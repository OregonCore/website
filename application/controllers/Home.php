<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->driver("cache", ["adapter" => "file"]);
    }

	public function index()
	{
        $this->load->driver("cache", ["adapter" => "file"]);
        // recent commits
        // 10 commits from each branch
        // [ branch => [commits], ... ]
        $github_recent_commits = [];
        
        $forums_new_topics   = [];
        $forums_recent_posts = [];

        
        $github_new_bugs     = [];
        $github_bug_updates  = [];

        if ($val = $this->cache->get("github_recent_commits"))
            $github_recent_commits = array_merge($github_recent_commits, $val);

        if ($val = $this->cache->get("forums_new_topics"))
            $forums_new_topics = array_merge($forums_new_topics, $val);
        
        if ($val = $this->cache->get("forums_recent_posts"))
            $forums_recent_posts = array_merge($forums_recent_posts, $val);

        if ($val = $this->cache->get("github_new_bugs"))
            $github_new_bugs = array_merge($github_new_bugs, $val);

        if ($val = $this->cache->get("github_bug_updates"))
            $github_bug_updates = array_merge($github_bug_updates, $val);
        
        $this->load->view('header');
		$this->load->view('home', ["commits"     => $github_recent_commits,
                                   "newtopics"   => $forums_new_topics,
                                   "recentposts" => $forums_recent_posts,
                                   "newbugs"     => $github_new_bugs,
                                   "bugupdates"  => $github_bug_updates]);
		$this->load->view('footer');
	}
}
