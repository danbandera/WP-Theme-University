<?php 
function university_post_types()
{
    // Event Post Type
    register_post_type('event', array(
        'supports' => array('title', 'editor', 'excerpt'),
        'rewrite' => array('slug' => 'events'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-calendar',
        'labels' => array(
            'name' => 'Events',
            'singular_name' => 'Event',
            'all_items' => 'All Events',
            'edit_item' => 'Edit Event',
            'view_item' => 'View Event',
            'new_item' => 'New Event',
            'add_new_item' => 'Add New Event',
            'not_found' => 'No events found.',
        ),
    ));

    // Progam Post Type
    register_post_type('program', array(
        'supports' => array('title'),
        'rewrite' => array('slug' => 'programs'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-awards',
        'labels' => array(
            'name' => 'Programs',
            'singular_name' => 'Program',
            'all_items' => 'All Programs',
            'edit_item' => 'Edit Program',
            'view_item' => 'View Program',
            'new_item' => 'New Program',
            'add_new_item' => 'Add New Program',
            'not_found' => 'No Programs found.',
        ),
    ));

    // Professor Post Type
    register_post_type('professor', array(
        'show_in_rest' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'labels' => array(
            'name' => 'Professors',
            'singular_name' => 'Professor',
            'all_items' => 'All Professors',
            'edit_item' => 'Edit Professor',
            'view_item' => 'View Professor',
            'new_item' => 'New Professor',
            'add_new_item' => 'Add New Professor',
            'not_found' => 'No Professors found.',
        ),
    ));
    // Campus Post Type
    register_post_type('campus', array(
        'supports' => array('title', 'editor'),
        'rewrite' => array('slug' => 'campuses'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'menu_icon' => 'dashicons-location-alt',
        'labels' => array(
            'name' => 'Campuses',
            'singular_name' => 'Campus',
            'all_items' => 'All Campuses',
            'edit_item' => 'Edit Campus',
            'view_item' => 'View Campus',
            'new_item' => 'New Campus',
            'add_new_item' => 'Add New Campus',
            'not_found' => 'No Campuses found.',
        ),
    ));
}

add_action('init', 'university_post_types');
