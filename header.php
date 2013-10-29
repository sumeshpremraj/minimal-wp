<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="HandheldFriendly" content="True" />
    <meta name="MobileOptimized" content="320" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    
    <link rel="icon" href="/favicon.ico">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title('|',true,'right'); bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/font-awesome/css/font-awesome.min.css">
    <?php wp_head(); ?>
    
</head>
<body class="<?php body_class();?>">

    <div id="header">
        <div class="centerCol">
            <a href="<?php bloginfo('home'); ?>" class="logo"></a>
            <div class="header-meta">
                <h2><?php bloginfo( 'name' ); ?></h2>
                
                <!-- === Remove above h2 tag and uncomment this for linked title

                <h2><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h2>

                -->

                <h3><?php bloginfo( 'description' ); ?></h3>
                <!-- === Uncomment for social media links, edit the links below too!
                <a class="social twitter" href="#"><i class="fa fa-twitter fa-lg"></i> Twitter</a>
                <a class="social github" href="#"><i class="fa fa-github fa-lg"></i> Github</a>
                <a class="social linkedin" href="#"><i class="fa fa-linkedin fa-lg"></i> LinkedIn</a>
                <a class="social facebook" href="#"><i class="fa fa-facebook fa-lg"></i> Facebook</a>
                -->
            </div>

            <ul class="header-links">
                    <li><a href="/about/"><i class="fa fa-user"></i>About</a></li>
                    <li><a href="/contact/"><i class="fa fa-envelope"></i>Contact</a></li>
                    
                    <li><a href="/photos/"><i class="fa fa-camera-retro"></i>Photos</a></li>
                    
                    <li><a href="/work/"><i class="fa fa-folder-open"></i>Work</a></li>
            </ul>
            
        </div>
        <div class="clear">&nbsp;</div>
    </div>