<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->driver("cache", ["adapter" => "file"]);
        //$this->load->driver('config');
        $this->load->helper("github");
        $this->load->helper("forums");
    }

    protected function VeritfyRequest()
    {
        $this->load->config('secrets');

        // called by cron
        if (isset($_GET["secret"]))
            if ($_GET["secret"] === $this->config->item("CRON_SECRET"))
                return true;

        // by github
        if (isset($_SERVER["HTTP_X_HUB_SIGNATURE"]))
        {
            $theirs = $_SERVER["HTTP_X_HUB_SIGNATURE"];
            $ours = "sha1=" . hash_hmac("sha1", file_get_contents("php://input"), $this->config->item("GITHUB_SECRET"));
            if ($theirs === $ours)
                return true;
        }

        return false;
    }

    // we are called from CRON (to update forums)
    // and from github's webhook (to update commits/issues)
	public function index()
	{
        // first verify the request
        if (!$this->VeritfyRequest())
        {
            // pssst! we don't exist!
            show_404();
            return;
        }

        $this->load->config("database");
        $this->load->database($this->config->item("db"));
        
        $forums = new Forums($this->db);
        $github = new GitHub();

        $this->cache->save("forums_new_topics",     $forums->GetNewTopics(),       0);
        $this->cache->save("forums_recent_posts",   $forums->GetRecentPosts(),     0);

        if (isset($_SERVER["HTTP_X_HUB_SIGNATURE"])
        {               
            $this->cache->save("github_recent_commits", $github->GetRecentCommits(),   0);
            $this->cache->save("github_new_bugs",       $github->GetRecentBugs(false), 0);
            $this->cache->save("github_bug_updates",    $github->GetRecentBugs(true),  0);
        }

        // if we gone this far everything's ok,
        // exception would be thrown in case of an error
        set_status_header(204);
	}
}
