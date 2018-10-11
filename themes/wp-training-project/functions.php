<?php

    function university_files() {
        wp_enqueue_script('main-university-js', get_theme_file_uri('/js/scripts-bundled.js'), NULL, microtime(), true);
        wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('university_main_styles', get_stylesheet_uri(), NULL, microtime());
    }

    add_action('wp_enqueue_scripts', 'university_files');

    // Add Theme features
    function university_features() {
        // Title Tag for Browser Title
        add_theme_support('title-tag');

        // // Register Menu Locations
        // register_nav_menu('headerMenuLocation', 'Header Menu Location');
        // register_nav_menu('footerLocationOne', 'Footer Location One');
        // register_nav_menu('footerLocationTwo', 'Footer Location Two');

    }

    // invoke university_features after page is loaded and theme is initialized
    add_action('after_setup_theme', 'university_features');


    //register custom post types
    function university_post_types() {
        register_post_type('event', array(
            'public' => true,
            'labels' => array(
                'name' => 'Events'
            ),
            'menu_icon' => 'dashicons-calendar' // wordpress dashicons
        ));
    }
    
    add_action('init', 'university_post_types');
?>