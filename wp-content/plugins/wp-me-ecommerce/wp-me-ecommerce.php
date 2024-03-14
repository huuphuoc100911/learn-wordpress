<?php

/*
* Plugin Name: WordPress Me Ecommerce
* Plugin URI: https://example.com/plugins/the-basics/
* Description: Plugin phục vụ khóa học WordPress 2023
* Version: 1.0.0
* Requires at least: 5.2
* Requires PHP: 7.2
* Author: Huu Phuoc
* Author URI: #
* License: GPL v2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
* Update URI: #
* Text Domain: wp-me-ecommerce
* Domain Path: /languages
*/

// Định nghĩa các hằng số của Plugin
define("WP_ME_PATH", plugin_dir_path(__FILE__));
define("WP_ME_URL", plugin_dir_url(__FILE__));

// Định nghĩa các hành động khi plugin được kích hoạt
register_activation_hook(
    __FILE__,
    'wpme_ecommerce_activation'
);

function wpme_ecommerce_activation()
{
    // Tạo CSDL

    // Tạo dữ liệu mẫu

    // Tạo options
}

// Định nghĩa các hành động khi plugin được tắt đi
register_deactivation_hook(
    __FILE__,
    'wpme_ecommerce_deactivation'
);

function wpme_ecommerce_deactivation()
{
    // Xóa CSDL

    // Xóa CSDL

    // Xóa options
}