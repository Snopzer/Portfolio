<!DOCTYPE html>
<html>
<head>
<title><?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'meta_title' );	}else{	bloginfo('name');  ?> - <?php bloginfo('description');  }?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="<?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'meta_description' );	}	?>" />
<meta name="keywords" content="<?php if ( function_exists( 'ot_get_option' ) ) {	echo ot_get_option( 'meta_keywords' );	}	?>" />
<script type="applisalonion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="<?php bloginfo('stylesheet_url'); ?>" rel='stylesheet' type='text/css' />	
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swipebox.css">
<link href="<?php bloginfo('template_url'); ?>/css/font-awesome.min.css" rel='stylesheet' type='text/css' />	
<!--//Custom Theme files-->
<!--web-font-->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Merriweather+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!--//web-font-->
<script src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
</head>