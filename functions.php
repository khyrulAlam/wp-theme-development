<?php
if(site_url() == 'http://localhost/wpsahco'){
    define('VERSION',time());
}else{
    difine('VERSION',wp_get_theme()->get('Version'));
};

function lw_setup_theme(){
    load_theme_textdomain('wpsahco');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    register_nav_menu('main-menu',__('Main Menu','lw1'));
    register_nav_menu('footer-menu',__('Footer Menu','lw1'));
}
add_action("after_setup_theme",'lw_setup_theme');

function sahco_assets(){
    // css
    wp_enqueue_style('sahco-style', get_stylesheet_uri(),null,VERSION);
    wp_enqueue_style('sahco-font-awesome', get_theme_file_uri('/assets/css/font-awesome.min.css') ,null,VERSION);
    wp_enqueue_style('sahco-animate', get_theme_file_uri('/assets/css/animate.css') ,null,VERSION);
    wp_enqueue_style('sahco-bootsnav', get_theme_file_uri('/assets/css/bootsnav.css') ,null,VERSION);
    wp_enqueue_style('sahco-bootstrap', get_theme_file_uri('/assets/css/bootstrap.min.css') ,null,VERSION);
    wp_enqueue_style('sahco-main', get_theme_file_uri('/assets/css/main.css') ,null,VERSION);

    // JS
    wp_enqueue_script( 'sahco-plugins', get_theme_file_uri('/assets/js/plugins.js'), array('jquery'),VERSION, true );
    wp_enqueue_script( 'sahco-bootsnav', get_theme_file_uri('/assets/js/bootsnav.js'), array('jquery'),VERSION, true );
    wp_enqueue_script( 'sahco-bootstrap', get_theme_file_uri('/assets/js/bootstrap.min.js'), array('jquery'),VERSION, true );
    wp_enqueue_script( 'sahco-main', get_theme_file_uri('/assets/js/main.js'), array('jquery'),VERSION, true );

    //code.jquery.com/jquery-3.2.1.min.js
}

add_action( "wp_enqueue_scripts", "sahco_assets" );