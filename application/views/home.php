
<div style="text-align:center;">
<div class="newsfold">
    <h1>Commits</h1>
    <?php

        // we need to move "master" to the top
        $branches = array_keys($commits);
        if ($index = array_search("master", $branches))
        {
            array_splice($branches, $index, 1);
            $branches = array_merge(["master"], $branches);
        }

        foreach ($branches as $branch)
        {
            print "<h2>Branch <code>$branch</code></h2>";

            foreach(array_slice($commits[$branch], 0, 5) as $commit)
            {
                print "<div class=\"update\">";
                print "<a href=\"https://github.com/OregonCore/OregonCore/commit/{$commit["sha"]}\" class=\"commit-sha\">";
                print substr($commit["sha"], 0, 5);
                print "</a>";
                print html_escape($commit["msg"]);
                print "</div>\n";
            }
        }
    ?>

    <div class="cleaner"></div>
</div>

<div class="newsfold">
    <h1>Forums</h1>
    <h2>Recent Posts</h2>
<?php
    foreach ($recentposts as $post)
    {
        printf ('<div class="update">
                    <small>%s</small>
                    <a href="//forums.oregon-core.net/viewtopic.php?pid=%u#p%u">%s</a>
                    by %s
                </div>',
                date("d.m H:i", $post["date"]),
                $post["id"],
                $post["id"],
                html_escape($post["title"]),
                html_escape($post["user"]));
    }
?>
    <h2>New Topics</h2>
<?php
    foreach ($newtopics as $topic)
    {
        printf ('<div class="update">
                 <small>%s</small>
                    <a href="//forums.oregon-core.net/viewtopic.php?id=%u">%s</a>
                    by %s
                 </div>',
                date("d.m H:i", $topic["date"]),
                $topic["id"],
                html_escape($topic["title"]),
                html_escape($topic["user"]));
    }
?>
    <div class="cleaner"></div>
</div>
<div class="newsfold">
    <h1>Bugs</h1>
    <h2>Recent Posts</h2>
<?php
    foreach($newbugs as $bug)
    {
        print "<div class=\"update\">";
            print "<a href=\"https://github.com/OregonCore/OregonCore/issue/{$bug["number"]}\">";
            print "#{$bug["number"]}";
            print "</a> ";
        print html_escape($bug["title"]);
        print "</div>\n";
    }
?>
    <h2>New Bugs</h2>
<?php
    foreach($newbugs as $bug)
    {
        print "<div class=\"update\">";
            print "<a href=\"https://github.com/OregonCore/OregonCore/issue/{$bug["number"]}\">";
            print "#{$bug["number"]}";
            print "</a> ";
        print html_escape($bug["title"]);
        print "</div>\n";
    }
?>
    <div class="cleaner"></div>
</div>
<div class="cleaner"></div>

</div>
