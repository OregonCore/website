<?php

require_once (__DIR__ . "/github-php-client/client/GitHubClient.php");

class GitHub
{
    /// owner of the repository
    protected $owner  = "OregonCore";
    /// repository name
    protected $repo   = "OregonCore";
    /// php-github-client class
    protected $client;

    /// initialize us
    function __construct()
    {
        $this->client = new GitHubClient();
    }

    /// retrieve last activity
    /// @returns array
    public function GetRecentCommits()
    {
        // first, we need to know how many and what branches we have
        $heads = $this->client->git->refs->getAllHeads($this->owner, $this->repo);

        // ok... now fetch first 10 commits from each one
        $this->client->setPage();
        $this->client->setPageSize(5);

        $commits = [];

        foreach ($heads as $head)
        {
            if ($head->getObject()->getType() == "commit")
            {
                $branch = sscanf($head->getRef(), "refs/heads/%s")[0];
                $nodes = $this->client->repos->commits->listCommitsOnRepository($this->owner, $this->repo, $branch);
                $commits[$branch] = [];
                
                foreach ($nodes as $node)
                {
                    $commits[$branch][] = ["sha"    => $node->getSha(),
                                           "msg"    => strtok($node->getCommit()->getMessage(), "\n"),
                                           "author" => $node->getCommit()->getAuthor()->getName(),
                                           "date"   => convDate($node->getCommit()->getCommitter()->getDate())];
                }
            }
        }

        return $commits;
    }

    public function GetRecentBugs($byUpdate)
    {
       // $this->client->setPage(1);
       // $this->client->setPageSize(5);

        $issues = [];

        if ($byUpdate)
            $data = $this->client->issues->listIssues($this->owner, $this->repo, null, null, null, null, null, null, "updated", "desc", null);
        else
            $data = $this->client->issues->listIssues($this->owner, $this->repo, null, null, null, null, null, null, "created", "desc", null);

        foreach ($data as $issue)
            $issues[] = ["number" => $issue->getNumber(),
                         "title"  => $issue->getTitle()];

        return $issues;
    }
};

// helper to convert ISO 8601 datetime to unix timestamp
function convDate($date)
{
    if ($date = DateTime::createFromFormat("Y-m-d\TH:i:sP", $date))
        return $date->getTimestamp();
}

?>
