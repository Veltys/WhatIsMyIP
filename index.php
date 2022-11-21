<?php

/**
 *
 * @file:			index.php
 * @brief:			Quick PHP script to use in my other apps
 * @author:			Veltys
 * @date:			2022-11-21
 * @version:		1.0.2
 * @note:			Usage: Put on a webserver an visit its URL
 */


if(!isset($_REQUEST['format']) || $_REQUEST['format'] == 'txt') {
    echo((isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : "0.0.0.0"));
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
        <p>
EOS);

    echo((isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : "0.0.0.0"));

    echo(<<<"EOS"
</p>
    </body>
</html>
EOS);
}
?>