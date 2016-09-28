<?php
	session_start();
	header('Cache-control: private');

	//$site_url = 'http://rami-portfolio.jp.tn/';
	 $site_url = 'http://localhost/test/app/';


	if(isSet($_GET['lang']))
	{
		$lang_short = $_GET['lang'];

		$_SESSION['lang'] = $lang_short;

	// setcookie("lang", $lang_short, time() + (3600 * 24 * 30));
	}
	else if(isSet($_SESSION['lang']))
	{
		$lang_short = $_SESSION['lang'];
	}
	else
	{
		$lang_short = 'en';
	}


	switch ($lang_short) {


	  case 'en':
	 	 $lang_file = 'lang.en.php';
	  break;

	  case 'fr':
		  $lang_file = 'lang.fr.php';
	  break;

	  default:
	 	 $lang_file = 'lang.en.php';

	}

	include_once 'languages/'.$lang_file;
?>