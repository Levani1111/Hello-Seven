<?php

// load stylesheets
function hello_seven_styles() {
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style( 'bootstrap' );

    // load main stylesheet
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), false, 'all' );
    wp_enqueue_style( 'main' );
}
add_action( 'wp_enqueue_scripts', 'hello_seven_styles' );

// load javascript
function hello_seven_js() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true );
    wp_enqueue_script( 'bootstrap' );
}
add_action( 'wp_enqueue_scripts', 'hello_seven_js' );

// Redirect function for ip address starting with 77.29
function redirect_if_ip_starts_with_77_29() {
    if (strpos($_SERVER['REMOTE_ADDR'], '77.29') === 0) {
        wp_redirect('https://www.google.com/');
        exit;
    }
}
add_action('init', 'redirect_if_ip_starts_with_77_29');

// custome post type for projects
function projects_post_type() {
    $args = array(
        'labels' => array(
            'name' => __( 'Projects' ),
            'singular_name' => __( 'Project' )
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-analytics',
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'my-Projects'),
    );
    register_post_type( 'projects', $args);
      
}
add_action( 'init', 'projects_post_type' );

// taxonomy for project type
function project_type_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => __( 'Project types' ),
            'singular_name' => __( 'type' )
        ),
        'hierarchical' => true,
        'public' => true,
       
    );
    register_taxonomy( 'types', array('projects'), $args);
}
add_action( 'init', 'project_type_taxonomy' );


// register menus
function register_theme_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'Primary Menu' ),
            'footer-menu' => __( 'Footer Menu' )
        )
    );
}
add_action( 'init', 'register_theme_menus' );

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );