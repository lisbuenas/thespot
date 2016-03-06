<?php // compress CSS
	header("content-type: text/css; charset: utf-8");
	header("cache-control: must-revalidate");
	$offset = 365 * 24 * 60 * 60;
	$expire = "expires: ".gmdate("D, d M Y H:i:s", time() + $offset)." GMT";
	header($expire);
	if(!ob_start("ob_gzhandler")) ob_start();
?>
<?php 
include 'font-awesome.min.css';
?>
<?php ob_flush(); ?>