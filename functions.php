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
    add_theme_support('custom-logo',array(
        'width'=> '270'
    ));
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


// Register Custom Navigation Walker
require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
if ( ! file_exists( get_template_directory() . '/inc/wp-bootstrap-navwalker.php' ) ) {
	// file does not exist... return an error.
	return new WP_Error( 'wp-bootstrap-navwalker-missing', __( 'It appears the wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
	// file exists... require it.
    require_once get_template_directory() . '/inc/wp-bootstrap-navwalker.php';
}
//End Registation Nav Menu


function sahco_create_post_type() {
    
    register_post_type( 'marketings',
        array(
        'labels' => array(
            'name' => __( 'Marketings' ),
            'singular_name' => __( 'Marketing' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' =>  'dashicons-chart-line',
        'supports' => array( 'title', 'editor','thumbnail' )
        )
    );
    register_post_type('product_Services',
        array(
        'labels' => array(
            'name' => __( 'Product And Service' ),
            'singular_name' => __( 'Product-Service' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-nametag',
        'supports' => array( 'title', 'editor','thumbnail' )
        )
    );
    register_post_type('investors',
        array(
        'labels' => array(
            'name' => __( 'Investors' ),
            'singular_name' => __( 'Investor' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-add-page',
        'supports' => array( 'title', 'editor','thumbnail' )
        )
    );
    register_post_type('form_downloads',
        array(
        'labels' => array(
            'name' => __( 'Forms Download' ),
            'singular_name' => __( 'Form Download' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-add-page',
        'supports' => array( 'title' )
        )
    );
    register_post_type('board_of_directors',
        array(
        'labels' => array(
            'name' => __( 'Board of Directors' ),
            'singular_name' => __( 'Board of Director' )
        ),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-add-page',
        'supports' => array('title')
        )
    );
}
add_action( 'init', 'sahco_create_post_type' );
