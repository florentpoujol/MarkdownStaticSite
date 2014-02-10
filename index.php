<?php
// path inside which lies your markdown files
$markdownFilesPath = "files";

// default path/name of the .md file (relative to $markdownFilesPath) to read when no path is supplied in the url
$path = "welcome";

// Tell wether mod rewrite is use to remove "index.php?" from the url
$useModRewrite = true;

// type of file that can be accessed without specifying the extension
$rewriteExtensions = array( "md", "html", "php" );

if ( file_exists( "config.json" ) ) {
    $config = json_decode( file_get_contents( "config.json" ), true );
    $markdownFilesPath = $config["markdownFilesPath"];
    $path = $config["defaultPath"];
    $useModRewrite = $config["useModRewrite"];
    $rewriteExtensions = $config["rewriteExtensions"];
}


//-----------------------------------------

$queryString = trim( $_SERVER["QUERY_STRING"], "/" ); // GET part, after index.php?
// This the path of the file the user want to read
// ie : file1/file2

$folder = str_replace( $queryString, "", $_SERVER["REQUEST_URI"] ); // request uri is the full string after the domain name. $folder begins and ends by a slash
$indexUrl = "http://".$_SERVER['HTTP_HOST'].$folder;

if ( !$useModRewrite )
    $indexUrl .= "index.php?";

if ($queryString != "")
    $path = $queryString;
else // index, redirect toward default path
    header( "Location: ".$indexUrl.$path );

$pathInfo = pathinfo( $path );
$pageTitle = ucwords( $pathInfo['filename'] );
$filePath = $markdownFilesPath."/".$path;

if ( !isset( $pathInfo['extension'] ) ) {
    foreach ($rewriteExtensions as $ext) {
        if ( file_exists( $filePath.".".$ext ) ) {
            $filePath .= ".".$ext;
            break;
        }
    }
}

if ( !file_exists( $filePath ) ) {
    $filePath = "404.php";
    $title = "404";
}


//-----------------------------------------

function EndsWith( $haystack, $needle ) {
    return $needle === "" || substr( $haystack, -strlen( $needle ) ) === $needle;
}

function GetHtmlFromMarkdownFile( $filePath ) {
    if ( !file_exists( $filePath ) )
        return "File '$filePath' doesn't exists !";

    return Michelf\Markdown::defaultTransform( file_get_contents( $filePath ) );
}

require_once "lib/MarkdownInterface.php";
require_once "lib/Markdown.php";

include "template.php";