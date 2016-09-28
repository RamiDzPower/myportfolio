<?php
	include_once 'common.php';

	if(!empty($_POST)){
		extract($_POST);
		$valid = true;
			if($antispam != ""){
			}
			else{
				if(empty($nom)){
					$valid = false;
					$falsenom =  $lang['ENTER_NAME'];;
				}
				if(empty($email)){
					$valid = false;
					$falsemail = $lang['ENTER_MAIL'];
				}
				if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
					$valid = false;
					$falsemail = $lang['ENTER_MAIL_CORRECT'];
				}
				if(empty($message)){
					$valid = false;
					$falsemessage = $lang['ENTER_MSG'];
				}

				if($valid){
					$to = "lereddragon@gmail.com";
					$sujet = $nom." Has contacted you";
					$header = "From : $email \n";
					$header .= "Reply-To : $email";
					$message = stripslashes($message);
					$nom = stripslashes($nom);
					if(mail($to,$sujet,$message,$header)){
					$success = $lang['SUCCESS_MSG'];
					unset($nom);unset($nom);unset($nom);
						}else {
							$error = $lang['ERROR_MSG'];
								}
				}
		}
	}
?><!DOCTYPE html>
	<html lang="en-US" prefix="og: http://ogp.me/ns#">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible Content-Type" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta content="yes" name="apple-mobile-web-app-capable" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
		<title>Rami CHELLALI - Portfolio</title>
		<meta name="rami chellali" content="Rami Portfolio" />
		<meta name="description" content="Rami Chellali is FrontEnd Developer and Team Leader for Sofware Developement sometimes SEO Specialist & Social Media Guru" />
		<meta property="fb:app_id" content="1703583063264704">
		<meta property="og:site_name" content="Rami Portfolio" />
		<meta property="og:url" content="http://rami-portfolio.jp.tn/" />
		<meta property="og:type" content="website" />
		<meta property="og:title" content="Rami CHELLALI-Portfolio" />
		<meta property="og:description" content="Rami Chellali is FrontEnd Developer and Team Leader for Sofware Developement sometimes SEO Specialist & Social Media Guru" />
		<meta property="og:image" content="http://rami-portfolio.jp.tn/img/favicon.png" />
		<meta property="article:author" content="https://www.facebook.com/rami.chellali" />
		<meta name="twitter:card" content="summary" />
		<meta name="twitter:site" content="@r_nihonto" />
		<meta name="twitter:creator" content="@r_nihonto" />
		<meta name="twitter:title" content="Rami CHELLALI-Portfolio" />
		<meta name="twitter:description" content="Rami Chellali is FrontEnd Developer and Team Leader for Sofware Developement sometimes SEO Specialist & Social Media Guru" />
		<meta name="twitter:image" content="http://rami-portfolio.jp.tn/img/twitter-card.png" />
		<meta name="twitter:url" content="https://www.twitter.com/R_Nihonto" />
		<meta name="apple-mobile-web-app-title" content="RamiC" />
		<meta name="application-name" content="RamiC" />
		<meta name="msapplication-TileColor" content="#da532c" />
		<meta name="msapplication-TileImage" content="http://rami-portfolio.jp.tn/img/mstile-144x144.png?v=6990Yrmr0x" />
		<meta name="msapplication-config" content="http://rami-portfolio.jp.tn/img/browserconfig.xml?v=6990Yrmr0x" />
		<meta name="theme-color" content="#ffffff" />
		<!-- iOS/MacOS integration -->

		<link rel="apple-touch-icon" sizes="57x57" href="apple-touch-icon-57x57.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="60x60" href="apple-touch-icon-60x60.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="72x72" href="apple-touch-icon-72x72.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="76x76" href="apple-touch-icon-76x76.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="114x114" href="apple-touch-icon-114x114.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="120x120" href="apple-touch-icon-120x120.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="144x144" href="apple-touch-icon-144x144.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="152x152" href="apple-touch-icon-152x152.png?v=6990Yrmr0x">
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon-180x180.png?v=6990Yrmr0x">
		<meta name="apple-mobile-web-app-title" content="RamiC">

		<!-- Favicon -->

		<link rel="icon" type="image/png" href="favicon-32x32.png?v=6990Yrmr0x" sizes="32x32">
		<link rel="icon" type="image/png" href="android-chrome-192x192.png?v=6990Yrmr0x" sizes="192x192">
		<link rel="icon" type="image/png" href="favicon-96x96.png?v=6990Yrmr0x" sizes="96x96">
		<link rel="icon" type="image/png" href="favicon-16x16.png?v=6990Yrmr0x" sizes="16x16">
		<link rel="manifest" href="manifest.json?v=6990Yrmr0x">
		<link rel="mask-icon" href="safari-pinned-tab.svg?v=6990Yrmr0x" color="#5bbad5">
		<link rel="shortcut icon" href="favicon.ico?v=6990Yrmr0x">
		<meta name="application-name" content="RamiC">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="msapplication-TileImage" content="mstile-144x144.png?v=6990Yrmr0x">
		<meta name="msapplication-config" content="browserconfig.xml?v=6990Yrmr0x">
		<meta name="theme-color" content="#ffffff">




		<!--<link rel="alternate" hreflang="en-EN" href="http://www.BLABLA.en" />
		<link rel="alternate" hreflang="fr-FR" href="http://www.BLABLA.fr" /> -->


<!-- 		<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800|Dancing+Script:400,700|Old+Standard+TT:400,700">
		<link rel="stylesheet" type="text/css" href="<?=$site_url?>css/bootstrap.min.css"/> -->
		<link rel="stylesheet" type="text/css" href="<?=$site_url?>css/boot.min.css"/>
<!-- 		<link rel="stylesheet" type="text/css" href="<?=$site_url?>css/font-awesome/css/font-awesome.min.css"/>-->
<!-- 		<link rel="stylesheet" type="text/css" href="<?=$site_url?>css/style.css" media="all"/>-->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="<?php echo $page; ?>" class="index">
		<!--[if lt IE 8]>
		        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->
		<div class="se-pre-con">
			<div class="se-pre-con-inner">
				  <div class="arc_reactor">
					    <div class="case_container">
						      <div class="e7">
							        <div class="semi_arc_3 e5_1">
								          <div class="semi_arc_3 e5_2">
									            <div class="semi_arc_3 e5_3">
									              	<div class="semi_arc_3 e5_4"></div>
									            </div>
								          </div>
							        </div>
							        <div class="core2"></div>
						      </div>
						      <ul class="marks">
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
							        <li></li><li></li><li></li><li></li><li></li><li></li>
						      </ul>
					    </div>
				  </div><br>
				<p>loading.....</p>
			</div>
		</div>
		
		<nav class="navbar navbar-default navbar-fixed-top"  role=”navigation” >
			<div class="languages">
				<a href="<?=$site_url?>fr/">Français | </a>
				<a href="<?=$site_url?>en/">English</a>
			</div>
			<div class="container">
				<div class="navbar-header page-scroll">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#page-top">
						<img alt="Logo Rami" class="img-responsive logo-rami" src="<?=$site_url?>img/logo-rami.png" />
					</a>
				</div><!-- navbar-header page-scroll -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav navbar-right">
						<li class="hidden"><a href="#page-top"></a></li>
						<li class="page-scroll"><a href="#headerwrap"><?php echo $lang['HOME']; ?></a></li>
						<li class="page-scroll"><a href="#who-iam"><?php echo $lang['WHO_IAM']; ?></a></li>
						<li class="page-scroll"><a href="#cd-timeline"><?php echo $lang['TIMELINE']; ?></a></li>
						<li class="page-scroll"><a href="#skills"><?php echo $lang['SKILLS']; ?></a></li>
						<li class="page-scroll"><a href="#services"><?php echo $lang['SERVICES']; ?></a></li>
						<li class="page-scroll"><a href="#grid3d"><?php echo $lang['WORK']; ?></a></li>
						<li class="page-scroll"><a href="#testimonial"><?php echo $lang['TESTIMONIAL']; ?></a></li>
						<li class="page-scroll"><a href="#cd-google-map"><?php echo $lang['CONTACT']; ?></a></li>
						<li class=""><a href="<?=$site_url?>file/cv-rami-chellali.pdf" target="_blank"><?php echo $lang['DOWNLOAD_CV']; ?></a></li>
					</ul><!-- nav navbar-nav navbar-right -->
				</div><!-- nav-collapse -->
			</div><!-- container -->
		</nav><!-- navbar navbar-default navbar-fixed-top -->