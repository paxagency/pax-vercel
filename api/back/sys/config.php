<?php
$_SSL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 1 : 0;
$_PROTOCOL =  ($_SSL) ? "https://" : "http://";
$_CWD = "/var/task/user/";
// SITE
define('SITE_PUBLIC', $_PROTOCOL.$_SERVER['HTTP_HOST'].'/');
define('SITE_SSL', $_SSL);
define('SITE_ERRORS', 1);
define('SITE_PROD', 0);
define('SITE_URL_INDEX',1);
define('SITE_WWW', 0);
//PACKAGE
define('SITE_BUILD',0);  //BUILD CSS & JS
define('SITE_TEMP',0);   //WRAP VIEWS IN TEMPLATE TAGS FOR JS FRAMEWORK
// DIRECTORIES
define('DIR_BACK',$_CWD.'/back/');
define('DIR_APP',$_CWD.'/back/app/');
define('DIR_SYS',$_CWD.'/back/sys/');
define('DIR_DB',$_CWD.'/back/db/');
define('DIR_FRONT',$_CWD.'/front/');
define('DIR_PAGE',$_CWD.'/front/html/pages/');
define('DIR_TEMP',$_CWD.'/front/html/templates/');
// FILES
define('FILE_APP',$_CWD.'/back/sys/app.php');
// DATABASE
define('DB_CLASS', "seed");
define('DB_SERVER', "localhost");
define('DB_PORT', "9200");
define('DB_NAME', 'dbName');
define('DB_USER', 'root');
define('DB_PASS', 'root');
//S3
define('S3_KEY','{ACCESSKEY}');
define('S3_SECRET','{SECRETKEY}');
define('S3_BUCKET','bucket');
define('S3_URL','https://{key}.s3.amazonaws.com');
//EMAIL
define('EM_KEY', '{ACCESSKEY}');
define('EM_CLASS','postmark');
define('EM_FROM','info@website.com');
define('EM_SITE',$_SERVER['HTTP_HOST']);
?>
