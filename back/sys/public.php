<?php
/*********************
docs.paxagency.com/php
*********************/
if($_URL[0]=='public') {
	$ext = pathinfo($_URL_STRING, PATHINFO_EXTENSION);
	if($ext=="css") header('Content-type: text/css');
	if($ext=="js") header('Content-type: text/javascript');
	if($ext=="jpg" || $ext=="jpeg") header('Content-type: image/jpeg');
	if($ext=="png") header('Content-type: image/png');
	if($ext=="gif") header('Content-type: image/gif');
	if($ext=="ico") header('Content-type: image/ico');
	if($ext=="svg") header('Content-type: image/svg+xml');
	readfile($_CWD.$_URL_STRING);
	die();
}
if($_URL_STRING=="robots.txt") {header("Content-Type: text/plain"); readfile($_CWD."robots.txt"); die();}
if($_URL_STRING=="sitemap.xml") {header('Content-type: application/xml'); readfile($_CWD."sitemap.xml"); die();}

?>
