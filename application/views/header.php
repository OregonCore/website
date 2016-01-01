<!doctype html>
<html>
    <head>
        <!-- this site shall be entirely utf-8 encoded -->
        <meta charset="utf-8">
        <!-- window/tab title -->
        <title>OregonCore Open Source Project</title>
        <!-- our site is responsive so we shuold have meta viewport -->
        <meta name="viewport" content="width=device-width, initial-scale=defualt">
        <!-- link to css -->
        <link rel="stylesheet" type="text/css" href="/style.css">
        <!-- link to nice favourite icon that is shown as window/tab icon -->
        <link rel="shortcut icon" type="image/x-icon" href="/favicon.ico?">
<?php
        if (isset($commitGraph))
        {
            print '<!-- js for drawing graph -->\n';
            print '<script type="text/javascript" src="/gitgraph.js"></script>\n';
            print '<!-- css for drawing graph -->\n';
            print '<link rel="stylesheet" type="text/css" href="/gitgraph.css">';
        }
?>
    </head>
    <body>
        <div id="wrapper">
            <!-- nice logo -->
            <a href="/"><img src="/images/oregoncore.png" alt="OregonCore Logo" id="logo"></a>
            <!-- menu below -->
            <div id="menu">
<?php
                    //       uri                            name
                    $menu = ["/"                        => "News",
                             "/about"                   => "About",
                             "//github.com/OregonCore/OregonCore"        => "Repository",
                             "//github.com/OregonCore/OregonCore/issues" => "Bug Tracker",
                             "//forums.oregon-core.net" => "Forums",
							 "//client00.chat.mibbit.com/?url=irc%3A%2F%2Firc.foonetic.net%2FOregonCore" => "IRC",
                             "//docs.oregon-core.net"   => "Documentation"];

                    // iterate and print menu
                    foreach ($menu as $uri => $name)
                    {
                        // check if uri matches one of the menu item's one,
                        // strtok() will ensure we compare only the part before '?'
                        if (strtok($_SERVER["REQUEST_URI"], '?') == $uri)
                            print "<a href=\"$uri\" class=\"active\">$name</a>\n";
                        else
                            print "<a href=\"$uri\">$name</a>\n";
                    }
?>
            </div>

            <!-- logo is floating, so we need to "clear" here -->
            <div class="cleaner"></div>
