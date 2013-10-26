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
                
                <!-- Uncomment for linked title
                <h2><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><?php bloginfo('name'); ?></a></h2>

                -->

                <h3><?php bloginfo( 'description' ); ?><!--Bits of tech, biking and photography.--></h3>
                <a class="social twitter" href="https://twitter.com/sumesh"><i class="fa fa-twitter fa-lg"></i> Twitter</a>
                <a class="social github" href="https://github.com/sumeshpremraj"><i class="fa fa-github fa-lg"></i> Github</a>
                <a class="social linkedin" href="http://www.linkedin.com/pub/sumesh-premraj/5/991/4b5"><i class="fa fa-linkedin fa-lg"></i> LinkedIn</a>
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