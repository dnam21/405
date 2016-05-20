<!DOCTYPE html>
<html>
<head>
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
	<?php wp_head();?>
</head>
<body>
  <div class="content">
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="<?php bloginfo('url');?>">Los Angeles</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav nav-pills pull-right">
	        <li><a href="<?php bloginfo('url');?>/history">history</a></li>
	        <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" herf="#" role="button" aria-haspopup="true"  aria-expanded="false" href="<?php bloginfo('url');?>/attractions">attractions<span class="caret"></span></a>
	        	<ul class="dropdown-menu">
	        		<li><a href="<?php bloginfo('url');?>/attraction">Attractions Page</a></li>
	        		<li><a href="<?php bloginfo('url');?>/live-entertainment">Live Entertainment</a></li>
	        		<li><a href="<?php bloginfo('url');?>/surf">Surf</a></li>
	        		<li><a href="<?php bloginfo('url');?>/theme-parks">Theme Parks</a></li>
	        		<li><a href="<?php bloginfo('url');?>/sights">Sights</a></li>
	        	</ul>
	        </li>
	        <li><a href="<?php bloginfo('url');?>/events">events</a></li>
	        <!-- <li><a href="<?php bloginfo('url');?>/map">map</a></li> -->
	      </ul>
	    </div>
	  </div>
	</nav>
	<!-- <div class="bg"></div> -->