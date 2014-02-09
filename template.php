<!--
$pageTitle  is the CamelCased name of the file
$filePath   is the relative file path
$indexUrl   is the absolute url of the root folder
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $pageTitle; ?></title>
    </head>
    <body>
<?php
if ( EndsWith( $filePath, ".md" ) )
    echo GetHtmlFromMarkdownFile( $filePath );
elseif ( EndsWith( $filePath, ".php" ) )
    include $filePath;
else
    echo file_get_contents( $filePath );
?>
    </body>
</html>