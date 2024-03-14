<?php
// Product screen: màn hình chỉnh sửa
// Đăng ký metabox cho sản phẩm
add_action('add_meta_boxes', 'wp_meta_box_product');

// Can thiệp vào hành động lưu bài viết
add_action('save_post', 'wp_save_post_product');

// Category Screen
// Đăng ký thêm trường cho taxonomy
// do_action(<taxonomy_name>_add_form_fields')
// do_action(<taxonomy_name>_edit_form_fields')

// Form lúc thêm mới
add_action('product_cat_add_form_fields', 'wp_meta_box_product_cat_add');

// Form lúc chỉnh sửa
add_action('product_cat_edit_form_fields', 'wp_meta_box_product_cat_edit');

// Xử lý khi lưu term
// do_action('create_<taxonomy_name>')
// do_action('edit_<taxonomy_name>')
add_action('create_product_cat', 'wp_meta_box_product_cat_save');
add_action('edit_product_cat', 'wp_meta_box_product_cat_save');


function wp_meta_box_product()
{
    add_meta_box(
        'wp_product_info',                  // Unique ID
        'Thông tin sản phẩm',               // Box title
        'wp_meta_box_product_html',         // Content callback, must be of type callable
        'product'                           // Post type
    );
}

function wp_meta_box_product_html()
{
    include_once WP_ME_PATH . 'includes/templates/meta_box_product.php';
}

function wp_save_post_product($post_id)
{
    var_dump($post_id);
    if ($_REQUEST['post_type'] == 'product') {
        $product_price = $_REQUEST['product_price'] ?? '';
        $product_price_sale = $_REQUEST['product_price_sale'] ?? '';
        $product_stock = $_REQUEST['product_stock'] ?? '';

        // Lưu vào CSDL: postmeta
        update_post_meta($post_id, 'product_price', $product_price);
        update_post_meta($post_id, 'product_price_sale', $product_price_sale);
        update_post_meta($post_id, 'product_stock', $product_stock);
    }
}

function wp_meta_box_product_cat_add()
{
    include WP_ME_PATH . 'includes/templates/meta_box_product_cat_add.php';
}

function wp_meta_box_product_cat_edit($term)
{
    include WP_ME_PATH . 'includes/templates/meta_box_product_cat_edit.php';
}

function wp_meta_box_product_cat_save($term_id)
{
    $image = $_POST['image'];
    update_term_meta($term_id, 'image', $image);
}