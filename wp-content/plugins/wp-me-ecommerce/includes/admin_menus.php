<?php
add_action('admin_menu', 'wp_admin_menu');

function wp_admin_menu()
{
    // Thêm menu cha
    add_menu_page(
        'WordPress',
        'WordPress',
        'manage_options',
        'wordpress',
        'wp_admin_page_dashboard',
        'dashicons-menu',
        25
    );
    add_submenu_page(
        'wordpress',
        'Đơn hàng',
        'Đơn hàng',
        'manage_options',
        'wordpress-orders',
        'wp_admin_page_order',
        26
    );
    add_submenu_page(
        'wordpress',
        'Cấu hình',
        'Cấu hình',
        'manage_options',
        'wordpress-setting',
        'wp_admin_page_setting',
        26
    );
}

function wp_admin_page_dashboard()
{
    echo 'wp_admin_page_dashboard';
}

function wp_admin_page_order()
{
    include_once WP_ME_PATH . 'includes/admin_pages/orders.php';
}

function wp_admin_page_setting()
{
    echo 'wp_admin_page_setting';
}