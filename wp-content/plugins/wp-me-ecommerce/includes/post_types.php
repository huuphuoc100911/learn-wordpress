<?php

// Đăng ký loại bài viết sản phẩm
add_action('init', 'wp_custome_post_type');
function wp_custome_post_type()
{
    // Post: bài viết

    // Page: trang

    // Product: Sản phẩm
    // http://localhost/learn-wordpress/products/iphone
    register_post_type(
        'product',
        array(
            'labels'      => array(
                'name'          => __('Các sản phẩm', 'wp-me-ecommerce'),
                'singular_name' => __('Sản phẩm', 'wp-me-ecommerce'),
            ),
            'public'      => true,
            'has_archive' => true,
            //url
            'rewrite'     => array('slug' => 'products'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt'),
        )
    );
}

// Đăng ký loại taxonomy
add_action('init', 'wp_custome_taxonomy_product');
function wp_custome_taxonomy_product()
{
    $labels = array(
        'name'              => _x('Danh mục', 'taxonomy general name'),
        'singular_name'     => _x('Danh mục', 'taxonomy singular name'),
        'search_items'      => __('Search Danh mục'),
        'all_items'         => __('All Courses'),
        'parent_item'       => __('Parent Danh mục'),
        'parent_item_colon' => __('Parent Danh mục:'),
        'edit_item'         => __('Edit Danh mục'),
        'update_item'       => __('Update Danh mục'),
        'add_new_item'      => __('Add New Danh mục'),
        'new_item_name'     => __('New Danh mục Name'),
        'menu_name'         => __('Danh mục'),
    );
    $args   = array(
        'hierarchical'      => true, // make it hierarchical (like categories)
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => ['slug' => 'danh-muc'],
    );

    // product ~ post_type
    // new name: product-cat
    register_taxonomy('product-cat', ['product'], $args);
}