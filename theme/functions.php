<?php

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
        'supports' => array( 'title', 'editor', 'thumbnail',  'custom-fields'),
        'rewrite' => array('slug' => 'my-Projects'),
    );
    register_post_type( 'projects', $args);
      
}
add_action( 'init', 'projects_post_type' );

// taxonomy for project type
function project_type_taxonomy() {
    $args = array(
        'labels' => array(
            'name' => __( 'Project type' ),
            'singular_name' => __( 'type' )
        ),
        'hierarchical' => true,
        'public' => true,
       
    );
    register_taxonomy( 'type', array('projects'), $args);
}
add_action( 'init', 'project_type_taxonomy' );