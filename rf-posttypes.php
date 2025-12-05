<?php
/*
 * Plugin Name:  RF Custom Post Types and Taxonomies
 * Description: A WordPress plugin that adds custom post types and taxonomies to BitcoinChaser.
 * Version: 3.08
 * Author: Ross Findlay
 * Author URI: https://bitcoinchaser.com
 */

 if( !defined('ABSPATH') ) {
   exit;
 }

function rf_register_review_custom_posttypes() { 
  $labels = array( 
    'name'               => 'Reviews',
    'singular_name'      => 'Review',
    'menu_name'          => 'Reviews', 
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Review',
    'new_item'           => 'New Review',
    'edit_item'          => 'Edit Review', 
    'view_item'          => 'View Review',
    'all_items'          => 'All Reviews',
    'search_items'       => 'Search Reviews',
    'parent_item_colon'  => 'Parent Review',
    'not_found'          => 'No Review found',
    'not_found_in_trash' => 'No Review found in Trash.', 
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true, 
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-star-filled',
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => 'reviews',
    'rewrite'            => true,
    'hierarchical'       => false,
    'show_in_rest'       => true, 
    'menu_position'      => 4,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author' ),
    'taxonomies'         => array( 'feature', 'provider', 'cryptocurrency', 'game', 'payment', 'country' ),
  );
  register_post_type( 'review', $args );  
}
add_action( 'init', 'rf_register_review_custom_posttypes' );

// Register bonus post type
function rf_register_bonus_custom_posttypes() { 

  $labels = array( 
    'name'               => 'Bonus',
    'singular_name'      => 'Bonus',
    'menu_name'          => 'Bonuses', 
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Bonus',
    'new_item'           => 'New Bonus',
    'edit_item'          => 'Edit Bonus', 
    'view_item'          => 'View Bonus',
    'all_items'          => 'All Bonuses',
    'search_items'       => 'Search Bonuses',
    'parent_item_colon'  => 'Parent Bonus',
    'not_found'          => 'No Bonuses found',
    'not_found_in_trash' => 'No Bonuses found in Trash.', 
  );
  
  $args = array(
    'labels'             => $labels,
    'public'             => true, 
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-heart',
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'rewrite'            => array('slug' => 'bonus'),
    'hierarchical'       => false,
    'show_in_rest'       => true, 
    'menu_position'      => 5,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author' ),
    'taxonomies'         => array( 'bonus_type', 'cryptocurrency' ),
  );
  register_post_type( 'bonus', $args );
  
}
add_action( 'init', 'rf_register_bonus_custom_posttypes' );

function rf_bonus_type_taxonomy() {
  $labels = array(
    'name'              => 'Bonus Type',
    'singular_name'     => 'Bonus Type',
    'search_items'      => 'Search Bonus Type',
    'all_items'         => 'All Bonus Types',
    'parent_item'       => 'Parent Bonus Type',
    'parent_item_colon' => 'Parent Bonus Type:',
    'edit_item'         => 'Edit Bonus Type',
    'update_item'       => 'Update Bonus Type',
    'add_new_item'      => 'Add New Bonus Type',
    'new_item_name'     => 'New Bonus Type Name',
    'menu_name'         => 'Bonus Type',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array('slug' => 'bonuses'),
  ); 
  register_taxonomy( 'bonus_type', array( 'bonus' ), $args );  
}
add_action( 'init', 'rf_bonus_type_taxonomy' );

function rf_register_streamer_custom_posttypes() { 
  $labels = array( 
    'name'               => 'Streamers',
    'singular_name'      => 'Streamer',
    'menu_name'          => 'Streamers', 
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Streamer',
    'new_item'           => 'New Streamer',
    'edit_item'          => 'Edit Streamer', 
    'view_item'          => 'View Streamer',
    'all_items'          => 'All Streamers',
    'search_items'       => 'Search Streamers',
    'parent_item_colon'  => 'Parent Streamer',
    'not_found'          => 'No Streamer found',
    'not_found_in_trash' => 'No Streamer found in Trash.', 
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true, 
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-star-filled',
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'rewrite'            => true,
    'hierarchical'       => false,
    'show_in_rest'       => true, 
    'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author' ),
  );
  register_post_type( 'streamer', $args );  
}
add_action( 'init', 'rf_register_streamer_custom_posttypes' );

function rf_register_slots_custom_posttypes() { 
  $labels = array( 
    'name'               => 'Slots',
    'singular_name'      => 'Slot',
    'menu_name'          => 'Slots', 
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Slot',
    'new_item'           => 'New Slot',
    'edit_item'          => 'Edit Slot', 
    'view_item'          => 'View Slot',
    'all_items'          => 'All Slots',
    'search_items'       => 'Search Slots',
    'parent_item_colon'  => 'Parent Slot',
    'not_found'          => 'No Slots found',
    'not_found_in_trash' => 'No Slots found in Trash.', 
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true, 
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-awards',
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'rewrite'            => array('slug' => 'slot'),
    'hierarchical'       => false,
    'show_in_rest'       => true, 
    'menu_position'      => 25,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author' ),
    'taxonomies'         => array( 'category', 'post_tag'),
  );

  register_post_type( 'slots', $args );
};
add_action( 'init', 'rf_register_slots_custom_posttypes' );

function rf_register_glossary_custom_posttype() { 
  $labels = array( 
    'name'               => 'Glossary',
    'singular_name'      => 'Glossary Term',
    'menu_name'          => 'Glossary', 
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Glossary Term',
    'new_item'           => 'New Glossary Term',
    'edit_item'          => 'Edit Glossary Term', 
    'view_item'          => 'View Glossary Term',
    'all_items'          => 'All Glossary Terms',
    'search_items'       => 'Search Glossary Terms',
    'parent_item_colon'  => 'Parent Glossary Term',
    'not_found'          => 'No Glossary Term found',
    'not_found_in_trash' => 'No Glossary Terms found in Trash.', 
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true, 
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-info-outline',
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'rewrite'            => array('slug' => 'term'),
    'hierarchical'       => false,
    'show_in_rest'       => true, 
    'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author' ),
  );
  register_post_type( 'glossary', $args );
}
add_action( 'init', 'rf_register_glossary_custom_posttype' );

function rf_review_type_taxonomy() {
  $labels = array(
    'name'              => 'Type',
    'singular_name'     => 'Type',
    'search_items'      => 'Search Types',
    'all_items'         => 'All Types',
    'parent_item'       => 'Parent Type',
    'parent_item_colon' => 'Parent Type:',
    'edit_item'         => 'Edit Type',
    'update_item'       => 'Update Type',
    'add_new_item'      => 'Add New Type',
    'new_item_name'     => 'New Type Name',
    'menu_name'         => 'Type',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'sites' ),
  );
  register_taxonomy( 'review_type', array( 'review' ), $args );  
}
add_action( 'init', 'rf_review_type_taxonomy' );

// function bc_feature_taxonomy() {
//   $labels = array(
//     'name'              => 'Features',
//     'singular_name'     => 'Feature',
//     'search_items'      => 'Search Features',
//     'all_items'         => 'All Features',
//     'parent_item'       => 'Parent Feature',
//     'parent_item_colon' => 'Parent Feature:',
//     'edit_item'         => 'Edit Feature',
//     'update_item'       => 'Update Feature',
//     'add_new_item'      => 'Add New Feature',
//     'new_item_name'     => 'New Feature Name',
//     'menu_name'         => 'Features',
//   );
//   $args = array(
//     'hierarchical'      => true,
//     'labels'            => $labels,
//     'show_ui'           => true,
//     'show_admin_column' => true,
//     'show_in_rest'      => true,
//     'query_var'         => true,
//     'rewrite'           => array( 'slug' => 'feature' ),
//   );
//   register_taxonomy( 'feature', array( 'review' ), $args );  
// }
// add_action( 'init', 'bc_feature_taxonomy' );

function bc_license_taxonomy() {
  $labels = array(
    'name'              => 'Licenses',
    'singular_name'     => 'License',
    'search_items'      => 'Search Licenses',
    'all_items'         => 'All Licenses',
    'parent_item'       => 'Parent License',
    'parent_item_colon' => 'Parent License:',
    'edit_item'         => 'Edit License',
    'update_item'       => 'Update License',
    'add_new_item'      => 'Add New License',
    'new_item_name'     => 'New License Name',
    'menu_name'         => 'Licenses',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'license' ),
  );
  register_taxonomy( 'license', array( 'review' ), $args );  
}
add_action( 'init', 'bc_license_taxonomy' );

function bc_cryptocurrency_taxonomy() {
  $labels = array(
    'name'              => 'Crypto',
    'singular_name'     => 'Crypto',
    'search_items'      => 'Search Crypto',
    'all_items'         => 'All Crypto',
    'parent_item'       => 'Parent Crypto',
    'parent_item_colon' => 'Parent Crypto:',
    'edit_item'         => 'Edit Crypto',
    'update_item'       => 'Update Crypto',
    'add_new_item'      => 'Add New Crypto',
    'new_item_name'     => 'New Crypto Name',
    'menu_name'         => 'Crypto',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'crypto' ),
  );
  register_taxonomy( 'cryptocurrency', array( 'review', 'post', 'bonus' ), $args );  
}
add_action( 'init', 'bc_cryptocurrency_taxonomy' );

function bc_games_taxonomy() {
  $labels = array(
    'name'              => 'Games',
    'singular_name'     => 'Game',
    'search_items'      => 'Search Games',
    'all_items'         => 'All Games',
    'parent_item'       => 'Parent Game',
    'parent_item_colon' => 'Parent Game:',
    'edit_item'         => 'Edit Game',
    'update_item'       => 'Update Game',
    'add_new_item'      => 'Add New Game',
    'new_item_name'     => 'New Game Name',
    'menu_name'         => 'Games',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'game' ),
  );
  register_taxonomy( 'game', array( 'review', 'post' ), $args );  
}
add_action( 'init', 'bc_games_taxonomy' );

function rf_provider_taxonomy() {
  $labels = array(
    'name'              => 'Providers',
    'singular_name'     => 'Provider',
    'search_items'      => 'Search Providers',
    'all_items'         => 'All Providers',
    'parent_item'       => 'Parent Provider',
    'parent_item_colon' => 'Parent Provider:',
    'edit_item'         => 'Edit Provider',
    'update_item'       => 'Update Provider',
    'add_new_item'      => 'Add New Provider',
    'new_item_name'     => 'New Provider Name',
    'menu_name'         => 'Providers',
  );

  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'provider' ),
  );
  register_taxonomy( 'provider', array( 'slots', 'review', 'post' ), $args );  
}
add_action( 'init', 'rf_provider_taxonomy' );

function bc_payment_taxonomy() {
  $labels = array(
    'name'              => 'Payment',
    'singular_name'     => 'Payment',
    'search_items'      => 'Search Payments',
    'all_items'         => 'All Payments',
    'parent_item'       => 'Parent Payment',
    'parent_item_colon' => 'Parent Payment:',
    'edit_item'         => 'Edit Payment',
    'update_item'       => 'Update Payment',
    'add_new_item'      => 'Add New Payment',
    'new_item_name'     => 'New Payment Name',
    'menu_name'         => 'Payments',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'payment' ),
  );
  register_taxonomy( 'payment', array( 'review' ), $args );  
}
add_action( 'init', 'bc_payment_taxonomy' );

function bc_country_taxonomy() {
  $labels = array(
    'name'              => 'Country',
    'singular_name'     => 'Country',
    'search_items'      => 'Search Countries',
    'all_items'         => 'All Countries',
    'parent_item'       => 'Parent Country',
    'parent_item_colon' => 'Parent Country:',
    'edit_item'         => 'Edit Country',
    'update_item'       => 'Update Country',
    'add_new_item'      => 'Add New Country',
    'new_item_name'     => 'New Country Name',
    'menu_name'         => 'Country',
  );
  $args = array(
    'hierarchical'      => true,
    'labels'            => $labels,
    'show_ui'           => true,
    'show_admin_column' => true,
    'show_in_rest'      => true,
    'query_var'         => true,
    'rewrite'           => array( 'slug' => 'country' ),
  );
  register_taxonomy( 'country', array( 'review' ), $args );  
}
add_action( 'init', 'bc_country_taxonomy' );

function rf_register_profile_custom_posttypes() { 
  $labels = array( 
    'name'               => 'Profiles',
    'singular_name'      => 'Profile',
    'menu_name'          => 'Profiles', 
    'add_new'            => 'Add New',
    'add_new_item'       => 'Add New Profile',
    'new_item'           => 'New Profile',
    'edit_item'          => 'Edit Profile', 
    'view_item'          => 'View Profile',
    'all_items'          => 'All Profiles',
    'search_items'       => 'Search Profiles',
    'parent_item_colon'  => 'Parent Profile',
    'not_found'          => 'No Profile found',
    'not_found_in_trash' => 'No Profile found in Trash.', 
  );
  $args = array(
    'labels'             => $labels,
    'public'             => true, 
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'menu_icon'          => 'dashicons-id',
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => false,
    'rewrite'            => array('slug' => 'profile'),
    'hierarchical'       => false,
    'show_in_rest'       => true, 
    'menu_position'      => 20,
    'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'author' ),
  );
  register_post_type( 'profile', $args );  
}
add_action( 'init', 'rf_register_profile_custom_posttypes' );