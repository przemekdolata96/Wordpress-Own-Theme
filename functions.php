<?php
    function addStyles() {
        wp_enqueue_style('style',get_stylesheet_uri());
    }
    
    function addScripts() {
        wp_enqueue_script('script','https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',null,null,true);   
        wp_enqueue_script('script2',get_template_directory_uri().'/src/js/main.js',null,null,true);   
        wp_enqueue_script('script3','https://use.fontawesome.com/releases/v5.0.6/js/all.js',null,null,false);   
    }


    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    show_admin_bar(false);
    add_action('get_header', 'remove_admin_login_header');

    add_action('wp_enqueue_scripts','addStyles');
    add_action('wp_enqueue_scripts','addScripts');

     register_nav_menus();

    add_theme_support('post-thumbnails');
    
    add_image_size('small-thumbnail',320,180,true);
    add_image_size('medium-thumbnail',640,360,true);
    add_image_size('large-humbnail',960,540,true);

?>