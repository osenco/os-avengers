<?php
/**
 * Plugin Name: Avengers Assemble
 * Plugin URI: https://osen.co.ke/wp/plugins/os-avengers
 * Description: WordPress plugin for our team
 * Author: Osen Concepts < hi@osen.co.ke >
 * Version: 1.4
 * Author URI: https://osen.co.ke/
 *
 * Requires at least: 4.4
 * Tested up to: 4.9.5
 */
 
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

// Register Avengers Custom Post Type
function osen_our_team() {

    $labels = array(
        'name'                  => _x( 'Avengers', 'Post Type General Name', 'osen' ),
        'singular_name'         => _x( 'Avenger', 'Post Type Singular Name', 'osen' ),
        'menu_name'             => __( 'Avengers', 'osen' ),
        'name_admin_bar'        => __( 'Avenger', 'osen' ),
        'archives'              => __( 'Avengers Archives', 'osen' ),
        'attributes'            => __( 'Item Attributes', 'osen' ),
        'parent_item_colon'     => __( 'Parent Avenger:', 'osen' ),
        'all_items'             => __( 'All Avengers', 'osen' ),
        'add_new_item'          => __( 'Add New Avenger', 'osen' ),
        'add_new'               => __( 'Add New', 'osen' ),
        'new_item'              => __( 'New Avenger', 'osen' ),
        'edit_item'             => __( 'Edit Avenger', 'osen' ),
        'update_item'           => __( 'Update Avenger', 'osen' ),
        'view_item'             => __( 'View Avenger', 'osen' ),
        'view_items'            => __( 'View Avengers', 'osen' ),
        'search_items'          => __( 'Search Avenger', 'osen' ),
        'not_found'             => __( 'Not found', 'osen' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'osen' ),
        'featured_image'        => __( 'Avenger Avatar', 'osen' ),
        'set_featured_image'    => __( 'Set avenger avatar', 'osen' ),
        'remove_featured_image' => __( 'Remove avenger avatar', 'osen' ),
        'use_featured_image'    => __( 'Use as avenger avatar', 'osen' ),
        'insert_into_item'      => __( 'Insert into avenger', 'osen' ),
        'uploaded_to_this_item' => __( 'Uploaded to this avenger', 'osen' ),
        'items_list'            => __( 'Avengers list', 'osen' ),
        'items_list_navigation' => __( 'Avengers list navigation', 'osen' ),
        'filter_items_list'     => __( 'Filter avengers list', 'osen' ),
    );
    $args = array(
        'label'                 => __( 'Avenger', 'osen' ),
        'description'           => __( 'Post Type Description', 'osen' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
        'taxonomies'            => array( 'editor' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => get_template_directory_uri()."/assets/images/avengers.png",
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'avenger', $args );

}
add_action( 'init', 'osen_our_team', 0 );

// Register Custom Taxonomy - Avengers Type
function osen_avenger_type() {

    $labels = array(
        'name'                       => _x( 'Types', 'Taxonomy General Name', 'osen' ),
        'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'osen' ),
        'menu_name'                  => __( 'Types', 'osen' ),
        'all_items'                  => __( 'All Types', 'osen' ),
        'parent_item'                => __( 'Parent Type', 'osen' ),
        'parent_item_colon'          => __( 'Parent Type:', 'osen' ),
        'new_item_name'              => __( 'New Type Name', 'osen' ),
        'add_new_item'               => __( 'Add New Type', 'osen' ),
        'edit_item'                  => __( 'Edit Type', 'osen' ),
        'update_item'                => __( 'Update Type', 'osen' ),
        'view_item'                  => __( 'View Type', 'osen' ),
        'separate_items_with_commas' => __( 'Separate types with commas', 'osen' ),
        'add_or_remove_items'        => __( 'Add or remove types', 'osen' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'osen' ),
        'popular_items'              => __( 'Popular Type', 'osen' ),
        'search_items'               => __( 'Search Types', 'osen' ),
        'not_found'                  => __( 'Not Found', 'osen' ),
        'no_terms'                   => __( 'No types', 'osen' ),
        'items_list'                 => __( 'Types list', 'osen' ),
        'items_list_navigation'      => __( 'Types list navigation', 'osen' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'show_in_rest'               => true,
    );
    register_taxonomy( 'avenger_type', array( 'avenger' ), $args );

}
add_action( 'init', 'osen_avenger_type', 0 );
