<?php
function cptui_register_my_cpts() {

/**
 * Post Type: Cats.
 */

$labels = [
    "name" => __( "Cats", "understrap" ),
    "singular_name" => __( "Cat", "understrap" ),
    "menu_name" => __( "Shelter Cats", "understrap" ),
    "all_items" => __( "All Cats", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new Cat", "understrap" ),
    "edit_item" => __( "Edit Cat", "understrap" ),
    "new_item" => __( "New Cat", "understrap" ),
    "view_item" => __( "View Cat", "understrap" ),
    "view_items" => __( "View Cats", "understrap" ),
    "search_items" => __( "Search Cats", "understrap" ),
    "not_found" => __( "No Cats found", "understrap" ),
    "not_found_in_trash" => __( "No Cats found in trash", "understrap" ),
    "parent" => __( "Parent Cat:", "understrap" ),
    "featured_image" => __( "Featured image for this Cat", "understrap" ),
    "set_featured_image" => __( "Set featured image for this Cat", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this Cat", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this Cat", "understrap" ),
    "archives" => __( "Cat archives", "understrap" ),
    "insert_into_item" => __( "Insert into Cat", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this Cat", "understrap" ),
    "filter_items_list" => __( "Filter Cats list", "understrap" ),
    "items_list_navigation" => __( "Cats list navigation", "understrap" ),
    "items_list" => __( "Cats list", "understrap" ),
    "attributes" => __( "Cats attributes", "understrap" ),
    "name_admin_bar" => __( "Cat", "understrap" ),
    "item_published" => __( "Cat published", "understrap" ),
    "item_published_privately" => __( "Cat published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "Cat reverted to draft.", "understrap" ),
    "item_scheduled" => __( "Cat scheduled", "understrap" ),
    "item_updated" => __( "Cat updated.", "understrap" ),
    "parent_item_colon" => __( "Parent Cat:", "understrap" ),
];

$args = [
    "label" => __( "Cats", "understrap" ),
    "labels" => $labels,
    "description" => "This is the Shelter Cats.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => "cat-archive",
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "shelter_cats", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-carrot",
    "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
    "taxonomies" => [ "cat_gender" ],
];

register_post_type( "shelter_cats", $args );

/**
 * Post Type: USP FAQs.
 */

$labels = [
    "name" => __( "USP FAQs", "understrap" ),
    "singular_name" => __( "USP FAQ", "understrap" ),
    "menu_name" => __( "USP FAQs", "understrap" ),
    "all_items" => __( "All USP FAQs", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new USP FAQ", "understrap" ),
    "edit_item" => __( "Edit USP FAQ", "understrap" ),
    "new_item" => __( "New USP FAQ", "understrap" ),
    "view_item" => __( "View USP FAQ", "understrap" ),
    "view_items" => __( "View USP FAQs", "understrap" ),
    "search_items" => __( "Search USP FAQs", "understrap" ),
    "not_found" => __( "No USP FAQs found", "understrap" ),
    "not_found_in_trash" => __( "No USP FAQs found in trash", "understrap" ),
    "parent" => __( "Parent USP FAQ:", "understrap" ),
    "featured_image" => __( "Featured image for this USP FAQ", "understrap" ),
    "set_featured_image" => __( "Set featured image for this USP FAQ", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this USP FAQ", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this USP FAQ", "understrap" ),
    "archives" => __( "USP FAQ archives", "understrap" ),
    "insert_into_item" => __( "Insert into USP FAQ", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this USP FAQ", "understrap" ),
    "filter_items_list" => __( "Filter USP FAQs list", "understrap" ),
    "items_list_navigation" => __( "USP FAQs list navigation", "understrap" ),
    "items_list" => __( "USP FAQs list", "understrap" ),
    "attributes" => __( "USP FAQs attributes", "understrap" ),
    "name_admin_bar" => __( "USP FAQ", "understrap" ),
    "item_published" => __( "USP FAQ published", "understrap" ),
    "item_published_privately" => __( "USP FAQ published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "USP FAQ reverted to draft.", "understrap" ),
    "item_scheduled" => __( "USP FAQ scheduled", "understrap" ),
    "item_updated" => __( "USP FAQ updated.", "understrap" ),
    "parent_item_colon" => __( "Parent USP FAQ:", "understrap" ),
];

$args = [
    "label" => __( "USP FAQs", "understrap" ),
    "labels" => $labels,
    "description" => "Here you can give information in USP format, ex: How to adopt?",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => true,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "usp_faq", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-format-status",
    "supports" => [ "title", "editor", "thumbnail" ],
];

register_post_type( "usp_faq", $args );

/**
 * Post Type: Success Stories.
 */

$labels = [
    "name" => __( "Success Stories", "understrap" ),
    "singular_name" => __( "Success Storie", "understrap" ),
    "menu_name" => __( "Success Stories", "understrap" ),
    "all_items" => __( "All Success Stories", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new Success Storie", "understrap" ),
    "edit_item" => __( "Edit Success Storie", "understrap" ),
    "new_item" => __( "New Success Storie", "understrap" ),
    "view_item" => __( "View Success Storie", "understrap" ),
    "view_items" => __( "View Success Stories", "understrap" ),
    "search_items" => __( "Search Success Stories", "understrap" ),
    "not_found" => __( "No Success Stories found", "understrap" ),
    "not_found_in_trash" => __( "No Success Stories found in trash", "understrap" ),
    "parent" => __( "Parent Success Storie:", "understrap" ),
    "featured_image" => __( "Featured image for this Success Storie", "understrap" ),
    "set_featured_image" => __( "Set featured image for this Success Storie", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this Success Storie", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this Success Storie", "understrap" ),
    "archives" => __( "Success Storie archives", "understrap" ),
    "insert_into_item" => __( "Insert into Success Storie", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this Success Storie", "understrap" ),
    "filter_items_list" => __( "Filter Success Stories list", "understrap" ),
    "items_list_navigation" => __( "Success Stories list navigation", "understrap" ),
    "items_list" => __( "Success Stories list", "understrap" ),
    "attributes" => __( "Success Stories attributes", "understrap" ),
    "name_admin_bar" => __( "Success Storie", "understrap" ),
    "item_published" => __( "Success Storie published", "understrap" ),
    "item_published_privately" => __( "Success Storie published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "Success Storie reverted to draft.", "understrap" ),
    "item_scheduled" => __( "Success Storie scheduled", "understrap" ),
    "item_updated" => __( "Success Storie updated.", "understrap" ),
    "parent_item_colon" => __( "Parent Success Storie:", "understrap" ),
];

$args = [
    "label" => __( "Success Stories", "understrap" ),
    "labels" => $labels,
    "description" => "Did a cat get adopted or something similar? Great! Spread the wonder of what happened in this Post.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => false,
    "rewrite" => [ "slug" => "success_stories", "with_front" => true ],
    "query_var" => true,
    "menu_icon" => "dashicons-buddicons-community",
    "supports" => [ "title", "editor", "thumbnail", "excerpt" ],
];

register_post_type( "success_stories", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

/**
 * Taxonomy: Genders.
 */

$labels = [
    "name" => __( "Genders", "understrap" ),
    "singular_name" => __( "Gender", "understrap" ),
    "menu_name" => __( "Genders", "understrap" ),
    "all_items" => __( "All Genders", "understrap" ),
    "edit_item" => __( "Edit Gender", "understrap" ),
    "view_item" => __( "View Gender", "understrap" ),
    "update_item" => __( "Update Gender name", "understrap" ),
    "add_new_item" => __( "Add new Gender", "understrap" ),
    "new_item_name" => __( "New Gender name", "understrap" ),
    "parent_item" => __( "Parent Gender", "understrap" ),
    "parent_item_colon" => __( "Parent Gender:", "understrap" ),
    "search_items" => __( "Search Genders", "understrap" ),
    "popular_items" => __( "Popular Genders", "understrap" ),
    "separate_items_with_commas" => __( "Separate Genders with commas", "understrap" ),
    "add_or_remove_items" => __( "Add or remove Genders", "understrap" ),
    "choose_from_most_used" => __( "Choose from the most used Genders", "understrap" ),
    "not_found" => __( "No Genders found", "understrap" ),
    "no_terms" => __( "No Genders", "understrap" ),
    "items_list_navigation" => __( "Genders list navigation", "understrap" ),
    "items_list" => __( "Genders list", "understrap" ),
];

$args = [
    "label" => __( "Genders", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'cat_gender', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "cat_gender",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "cat_gender", [ "shelter_cats" ], $args );

/**
 * Taxonomy: Cities.
 */

$labels = [
    "name" => __( "Cities", "understrap" ),
    "singular_name" => __( "City", "understrap" ),
    "menu_name" => __( "Cities", "understrap" ),
    "all_items" => __( "All Cities", "understrap" ),
    "edit_item" => __( "Edit City", "understrap" ),
    "view_item" => __( "View City", "understrap" ),
    "update_item" => __( "Update City name", "understrap" ),
    "add_new_item" => __( "Add new City", "understrap" ),
    "new_item_name" => __( "New City name", "understrap" ),
    "parent_item" => __( "Parent City", "understrap" ),
    "parent_item_colon" => __( "Parent City:", "understrap" ),
    "search_items" => __( "Search Cities", "understrap" ),
    "popular_items" => __( "Popular Cities", "understrap" ),
    "separate_items_with_commas" => __( "Separate Cities with commas", "understrap" ),
    "add_or_remove_items" => __( "Add or remove Cities", "understrap" ),
    "choose_from_most_used" => __( "Choose from the most used Cities", "understrap" ),
    "not_found" => __( "No Cities found", "understrap" ),
    "no_terms" => __( "No Cities", "understrap" ),
    "items_list_navigation" => __( "Cities list navigation", "understrap" ),
    "items_list" => __( "Cities list", "understrap" ),
];

$args = [
    "label" => __( "Cities", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'cat_city', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "cat_city",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "cat_city", [ "shelter_cats" ], $args );

/**
 * Taxonomy: Sizes.
 */

$labels = [
    "name" => __( "Sizes", "understrap" ),
    "singular_name" => __( "Size", "understrap" ),
    "menu_name" => __( "Sizes", "understrap" ),
    "all_items" => __( "All Sizes", "understrap" ),
    "edit_item" => __( "Edit Size", "understrap" ),
    "view_item" => __( "View Size", "understrap" ),
    "update_item" => __( "Update Size name", "understrap" ),
    "add_new_item" => __( "Add new Size", "understrap" ),
    "new_item_name" => __( "New Size name", "understrap" ),
    "parent_item" => __( "Parent Size", "understrap" ),
    "parent_item_colon" => __( "Parent Size:", "understrap" ),
    "search_items" => __( "Search Sizes", "understrap" ),
    "popular_items" => __( "Popular Sizes", "understrap" ),
    "separate_items_with_commas" => __( "Separate Sizes with commas", "understrap" ),
    "add_or_remove_items" => __( "Add or remove Sizes", "understrap" ),
    "choose_from_most_used" => __( "Choose from the most used Sizes", "understrap" ),
    "not_found" => __( "No Sizes found", "understrap" ),
    "no_terms" => __( "No Sizes", "understrap" ),
    "items_list_navigation" => __( "Sizes list navigation", "understrap" ),
    "items_list" => __( "Sizes list", "understrap" ),
];

$args = [
    "label" => __( "Sizes", "understrap" ),
    "labels" => $labels,
    "public" => true,
    "publicly_queryable" => true,
    "hierarchical" => false,
    "show_ui" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "query_var" => true,
    "rewrite" => [ 'slug' => 'cat_size', 'with_front' => true, ],
    "show_admin_column" => false,
    "show_in_rest" => true,
    "rest_base" => "cat_size",
    "rest_controller_class" => "WP_REST_Terms_Controller",
    "show_in_quick_edit" => false,
    ];
register_taxonomy( "cat_size", [ "shelter_cats" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );
