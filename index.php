<?php

/**
 *
 * @file:			index.php
 * @brief:			Quick PHP script to use in my other apps
 * @author:			Veltys
 * @date:			2022-06-07
 * @version:		1.0.0
 * @note:			Usage: Put on a webserver an visit its URL
 */


if(!isset($_REQUEST['format']) || $_REQUEST['format'] == 'txt') {
    echo($_SERVER['REMOTE_ADDR']);
}
else if($_REQUEST['format'] == 'html') {
    echo(<<<"EOS"
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>IP address</title>
    </head>
    <body>
        <p>${_SERVER['REMOTE_ADDR']}</p>
    </body>
</html>
EOS);
}
?>