<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body <?php body_class()?>>
    <header>
        <div class="logo">
            <img src="https://image.ibb.co/gqQK6S/e704f8ef_984d_4ada_97ba_9872e0d364cf.png"/>
        </div>
        <nav id="menu" class="">
            <div id="menu-button">Menu <i class="fas fa-plus fa-sm"></i> </div>
            <?php
                wp_nav_menu();
            ?>
        </nav>
        <h1><a href="<?php home_url()?>"><?php bloginfo('name');?></a></h1>
        <h5>    
            <?php wp_get_recent_posts(); ?>
            <?php bloginfo('description');?>
        </h5>
        <ul id="recent-posts">
            <h5>Recent posts</h5>
            <?php
                $args = array( 'numberposts' => '3' );
                $recent_posts = wp_get_recent_posts($args);
                foreach( $recent_posts as $recent ){
                    echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
                }
                wp_reset_query();
            ?>
        </ul>
        


    </header>
    <div class="wrapper">