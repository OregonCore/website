Oregon-Core.Net
===============

Welcome to the repository!

This repository contains full source code of our website.  
it was built on top of CodeIgniter framework.

If you are new to it, here's a quick roadmap:

 - `application/config` contains some configs
 - `application/controllers` contains code to generate pages
 - `application/views` contains html templates
 - `application/helpers` contains helper such as github client

This site is made to be responsive - adaptive to different screen sizes,
although it doesn't use html5/css3 to its full potential.
 
HACKING:
--------

Feel free to contribute!  
There are two files:

  - application/config/database.php.dist
  - application/config/secrets.php.dist

That you'll need to copy and rename to without `.dist`.
Remote contents of that files are hidden for security reasons.

The website should have a webhook from this repository,
so it should be updated in real-time.
 
The site is hosted at host with php 7.0
