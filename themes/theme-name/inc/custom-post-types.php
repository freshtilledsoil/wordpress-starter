<?php
/**
 * Custom Post Types
 *
 * @package Theme Name
 */

function theme_custom_post_types_setup() {

  /*
    register_post_type( 'Custom Post Type',
    array(
          'labels' => array(
          'name' => 'Thing',
          'singular_name' => 'Thing',
          'add_new' => 'Add Thing',
          'add_new_item' => 'Add New Thing',
          'edit_item' => 'Edit Thing',
          'new_item' => 'New Thing',
          'all_items' => 'All Things',
          'view_item' => 'View Thing',
          'search_items' => 'Search Thing',
          'not_found' =>  'No things found',
          'not_found_in_trash' => 'No things found in Trash',
          'parent_item_colon' => '',
          'menu_name' => 'Things'
        ),
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array( 'slug' => 'thing' ),
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null
    )
    );
  */

/**
* Custom Taxonomies
*/

/*
  $args = array(
    'hierarchical'          => true,
    'labels'                => array(
		'name'                       => 'Categories',
		'singular_name'              => 'Category',
		'search_items'               => 'Search Categories',
		'popular_items'              => 'Popular Categories',
		'all_items'                  => 'All Categories',
		'parent_item'                => null,
		'parent_item_colon'          => null,
		'edit_item'                  => 'Edit Category',
		'update_item'                => 'Update Category',
		'add_new_item'               => 'Add New Category',
		'new_item_name'              => 'New Category',
		'add_or_remove_items'        => 'Add or remove categories',
		'choose_from_most_used'      => 'Choose from the most used categories',
		'not_found'                  => 'No categories found.',
		'menu_name'                  => 'Categories',
    ),
    'show_ui'               => true,
    'show_admin_column'     => true,
    'query_var'             => true,
    'rewrite'               => array( 'slug' => 'resourcecategory' )
  );
  
  register_taxonomy( 'category', 'thing', $args );
*/

} // theme_custom_post_types_setup

add_action( 'init', 'theme_custom_post_types_setup' );

?>