<?php
// Register Custom Post Type Slider
function create_slider_cpt() {

	$labels = array(
		'name' => _x( 'Sliders', 'Post Type General Name', 'wplearning' ),
		'singular_name' => _x( 'Slider', 'Post Type Singular Name', 'wplearning' ),
		'menu_name' => _x( 'Sliders', 'Admin Menu text', 'wplearning' ),
		'name_admin_bar' => _x( 'Slider', 'Add New on Toolbar', 'wplearning' ),
		'archives' => __( 'Slider Archives', 'wplearning' ),
		'attributes' => __( 'Slider Attributes', 'wplearning' ),
		'parent_item_colon' => __( 'Parent Slider:', 'wplearning' ),
		'all_items' => __( 'All Sliders', 'wplearning' ),
		'add_new_item' => __( 'Add New Slider', 'wplearning' ),
		'add_new' => __( 'Add New', 'wplearning' ),
		'new_item' => __( 'New Slider', 'wplearning' ),
		'edit_item' => __( 'Edit Slider', 'wplearning' ),
		'update_item' => __( 'Update Slider', 'wplearning' ),
		'view_item' => __( 'View Slider', 'wplearning' ),
		'view_items' => __( 'View Sliders', 'wplearning' ),
		'search_items' => __( 'Search Slider', 'wplearning' ),
		'not_found' => __( 'Not found', 'wplearning' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'wplearning' ),
		'featured_image' => __( 'Featured Image', 'wplearning' ),
		'set_featured_image' => __( 'Set featured image', 'wplearning' ),
		'remove_featured_image' => __( 'Remove featured image', 'wplearning' ),
		'use_featured_image' => __( 'Use as featured image', 'wplearning' ),
		'insert_into_item' => __( 'Insert into Slider', 'wplearning' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Slider', 'wplearning' ),
		'items_list' => __( 'Sliders list', 'wplearning' ),
		'items_list_navigation' => __( 'Sliders list navigation', 'wplearning' ),
		'filter_items_list' => __( 'Filter Sliders list', 'wplearning' ),
	);
	$args = array(
		'label' => __( 'Slider', 'wplearning' ),
		'description' => __( '', 'wplearning' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-multisite',
		'supports' => array('title', 'excerpt', 'thumbnail'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'slider', $args );

}
add_action( 'init', 'create_slider_cpt', 0 );