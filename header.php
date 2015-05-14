<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="icon" type="image/gif" href="<?php bloginfo('template_directory'); ?>/images/favicon.gif">
	<link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Raleway:500,900,300'>
    <link rel="stylesheet" type="text/css" href="http://www.essetra.com/cdn/bootstrap.css" >
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
    
    <script type="text/javascript" src="http://www.essetra.com/cdn/jquery.js"></script>
    <script type="text/javascript" src="http://www.essetra.com/cdn/bootstrap.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/script.js"></script>  
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
	<div class="container-fluid header">
    	<div class="row">
            <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-menu">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-toggle collapsed pull-left no-border" href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo-hor.png" width="300" alt=""/></a>
                </div>
            
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="top-menu">
                  <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php bloginfo('url');?>/startups">Startups</a></li>
                    <li><a href="<?php bloginfo('url');?>/events">Events</a></li>
                    <li><a href="<?php bloginfo('url');?>/entrepreneurs">Entrepreneurs</a></li>
                    <li><a href="<?php bloginfo('url');?>/mentors">Mentors</a></li>
                    <li><a href="<?php bloginfo('url');?>/investors">Investors</a></li>
                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>
                    <li><a href="<?php bloginfo('url');?>/login" class="btn btn-default">Login</a></li>
                    <li><a href="<?php bloginfo('url');?>/register">Signup</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
            <div class="logo hidden-xs">
                  <a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('template_directory');?>/images/logo.png" height="256" alt=""/></a>
            </div>
            <div class="search-div hidden-xs">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search startups, entrepreneurs, meetups, events..." aria-describedby="go-button">
                  <span class="input-group-btn">
                    <button class="btn btn-pink bg-solid-pink white" type="button"><strong>GO!</strong></button>
                  </span>
                </div>
            </div>
	    </div>
    </div>
 