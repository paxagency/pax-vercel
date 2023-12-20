<?php
/*********************
docs.paxagency.com/php
*********************/
if($_URL_STRING=="robots.txt") return require_once($_CWD."robots.txt");
if($_URL_STRING=="sitemap.xml") return require_once($_CWD."sitemap.xml");
if($_URL[0]=='public') {
	$ext = pathinfo($url, PATHINFO_EXTENSION);
	if($ext=="css") header('Content-type: text/css');
	if($ext=="js") header('Content-type: text/javascript');
	if($ext=="jpg" || $ext=="jpeg") header('Content-type: image/jpeg');
	if($ext=="png") header('Content-type: image/png');
	if($ext=="gif") header('Content-type: image/gif');
	if($ext=="ico") header('Content-type: image/ico');
	if($ext=="svg") header('Content-type: image/svg+xml');
	return require_once($_CWD.$_URL_STRING);
}
?>
