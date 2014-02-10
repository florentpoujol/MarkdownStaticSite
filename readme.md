# Markdown Static Site

Markdown Static Site is a small vanilla PHP script that lats you easily turn a bunch of [markdown](https://daringfireball.net/projects/markdown) files into a static site.

## Installation

The markdown files go in the `files` folder.  
Edit the value of the `markdownFilesPath` key in `config.json` to use another folder name.

Edit the value of the `defaultPath` key in `config.json` to the path of the default file to be shown when no path is specified via the URL.

If you don't want to use URL rewriting, set the value of the `useModRewrite` to `false` key in `config.json` (and delete/edit the `.htaccess`).

## Usage

The url `root-domain-or-folder/welcome` will display the markdown file at `root-domain-or-folder/files/welcome.md`.  
The url `root-domain-or-folder/folder/welcome` will display the markdown file at `root-domain-or-folder/files/folder/welcome.md`.  

You may access any files in the `files` folder without extension, provided the extension is set in the array as value of the `rewriteExtension` key in `config.json` (default is `md`, `html` and `php`).  

Without url rewriting, just add `index.php?` in front of the file's path : `root-domain-or-folder/index.php?welcome`.

## Markdown

Markdown to HTML conversion is powered by Michel Fortin's [PHP Markdown](https://github.com/michelf/php-markdown) v1.4.0.

PHP Markdown Lib Copyright (c) 2004-2013 Michel Fortin  
http://michelf.ca/  
All rights reserved.  

Based on Markdown  
Copyright (c) 2003-2005 John Gruber  
http://daringfireball.net/  
All rights reserved.  

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

- Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.
- Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.
- Neither the name "Markdown" nor the names of its contributors may be used to endorse or promote products derived from this software without specific prior written permission.

This software is provided by the copyright holders and contributors "as is" and any express or implied warranties, including, but not limited to, the implied warranties of merchantability and fitness for a particular purpose are disclaimed. In no event shall the copyright owner or contributors be liable for any direct, indirect, incidental, special, exemplary, or consequential damages (including, but not limited to, procurement of substitute goods or services; loss of use, data, or profits; or business interruption) however caused and on any theory of liability, whether in contract, strict liability, or tort (including negligence or otherwise) arising in any way out of the use of this software, even if advised of the possibility of such damage.

## Credits

Copyright © 2014 [Florent Poujol](http://florentpoujol.fr)   <florent.poujol@gmail.com>

This work is free. You can redistribute it and/or modify it under the terms of the Do What The Fuck You Want To Public License, Version 2, as published by Sam Hocevar. See the COPYING file for more details.
