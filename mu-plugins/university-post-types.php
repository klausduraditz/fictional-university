<?php


//register custom post types
//!!Permalink-Structure in Backend has to be updated: Settings > Permalinks > Save Changes
function university_post_types() {
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Events',
            'add_new_item' => 'Add New Event',
            'edit_item' => 'Edit Event',
            'all_items' => 'All Events',
            'singular_name' => 'Event'
        ),
        'menu_icon' => 'dashicons-calendar' // wordpress dashicons
    ));
}

add_action('init', 'university_post_types');


?>