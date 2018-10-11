<?php


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