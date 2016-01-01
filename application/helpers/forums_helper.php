<?php

class Forums
{
    protected $db;

    function __construct($db)
    {
        $this->db = $db;
    }

    public function GetNewTopics()
    {
        $query = $this->db->query("SELECT
                                   id,
                                   poster as user,
                                   subject as title,
                                   posted as `date`
                                   FROM topics
                                   ORDER BY posted DESC
                                   LIMIT 5");
        return $query->result_array();
    }

    public function GetRecentPosts()
    {
        $query = $this->db->query("SELECT
                                        a.id,
                                        a.poster as user,
                                        b.subject as title,
                                        a.posted as `date`
                                   FROM posts a
                                   LEFT JOIN topics b
                                   ON a.topic_id = b.id
                                   -- GROUP BY a.topic_id
                                   ORDER BY a.posted DESC
                                   LIMIT 5");
        return $query->result_array();
    }
}
