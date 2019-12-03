<?php

// Our custom post type function
function create_posttype() {
 
    register_post_type( 'testimonials',
    // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Testimonials' ),
                'singular_name' => __( 'Testimonial' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'testimonials'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


/*
* Creating a function to create our CPT
*/
 
function custom_post_type() {

    // Set UI labels for Custom Post Type
    $labels = array(
        'name'                => _x( 'Testinomials', 'Post Type General Name', 'twentythirteen' ),
        'singular_name'       => _x( 'Testinomial', 'Post Type Singular Name', 'twentythirteen' ),
        'menu_name'           => __( 'Testinomial', 'twentythirteen' ),
        'parent_item_colon'   => __( 'Parent Test', 'twentythirteen' ),
        'all_items'           => __( 'All Testinomials', 'twentythirteen' ),
        'view_item'           => __( 'View Testinomials', 'twentythirteen' ),
        'add_new_item'        => __( 'Add New Testinomials', 'twentythirteen' ),
        'add_new'             => __( 'Add New', 'twentythirteen' ),
        'edit_item'           => __( 'Edit Testinomial', 'twentythirteen' ),
        'update_item'         => __( 'Update Testinomial', 'twentythirteen' ),
        'search_items'        => __( 'Search Testinomial', 'twentythirteen' ),
        'not_found'           => __( 'Not Found', 'twentythirteen' ),
        'not_found_in_trash'  => __( 'Not found in Trash', 'twentythirteen' ),
    );
        
// Set other options for Custom Post Type
        
    $args = array(
        'label'               => __( 'Testinomials', 'twentythirteen' ),
        'description'         => __( 'What people are saying', 'twentythirteen' ),
        'labels'              => $labels,
        // Features this CPT supports in Post Editor
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes', ),
        // You can associate this CPT with a taxonomy or custom taxonomy. 
        'taxonomies'          => array( 'genres' ),
        /* A hierarchical CPT is like Pages and can have
        * Parent and child items. A non-hierarchical CPT
        * is like Posts.
        */ 
        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => true,
        'publicly_queryable'  => true,
        'capability_type'     => 'page',
    );
        
    // Registering your Custom Post Type
    register_post_type( 'testimonials', $args );
    
}
    
/* Hook into the 'init' action so that the function
* Containing our post type registration is not 
* unnecessarily executed. 
*/
    
add_action( 'init', 'custom_post_type', 0 );

add_action( 'pre_get_posts', 'add_my_post_types_to_query' );
 
function add_my_post_types_to_query( $query ) {
    if ( is_home() && $query->is_main_query() )
        $query->set( 'post_type', array( 'post', 'testimonials' ) );
    return $query;
}

function get_all_posts() {
    $posts = get_posts([
        'post_type' => 'testimonials',
        'post_status' => 'publish',
        'numberposts' => -1
    // 'order'    => 'ASC'
    ]);
    return $posts;
}
?>