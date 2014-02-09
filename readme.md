# Markdown Static Site

Markdown Static Site is a small vanilla PHP script that lets you set-up a static site which content is made of [markdown](https://daringfireball.net/projects/markdown) files.

## Installation

The markdown files go in the `files` folder.  
Edit the `$markdownFilesPath` variable in `index.php` to use another folder name.

Edit the `$path` variable at the top of `index.php` to the path of the default file to be shown when no path is specified via the URL.

If you don't want to use URL rewriting, set the `$useModRewrite` variable to false in `index.php` (and delete/edit the `.htaccess`).

## Usage

The url `root-domain-or-folder/welcome` will display the markdown file at `root-domain-or-folder/files/welcome.md`.  
The url `root-domain-or-folder/folder/welcome` will display the markdown file at `root-domain-or-folder/files/folder/welcome.md`.  

You may add the `.md` extension in the url : `root-domain-or-folder/welcome.md`

Without url rewriting, just add `index.php?` in front of the file's path : `root-domain-or-folder/index.php?welcome`.

## Markdown

Markdown to HTML conversion is powered by @michelf [PHP Markdown](https://github.com/michelf/php-markdown) v1.4.0.

## Credits

Copyright © 2014 [Florent Poujol](http://florentpoujol.fr)   <florent.poujol@gmail.com>

This work is free. You can redistribute it and/or modify it under the terms of the Do What The Fuck You Want To Public License, Version 2, as published by Sam Hocevar. See the COPYING file for more details.
