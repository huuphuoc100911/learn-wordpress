<?php

// Đăng ký post_type và taxonomy
include_once WP_ME_PATH . 'includes/post_types.php';

// Đăng ký metaboxs
include_once WP_ME_PATH . 'includes/metaboxes.php';

// Thêm các cột vào custom post_type và custom taxonomy
include_once WP_ME_PATH . 'includes/admin_columns.php';

// Tạo menu cho admin
include_once WP_ME_PATH . 'includes/admin_menus.php';

// Làm việc vs CSDL trong wordpress
include_once WP_ME_PATH . 'includes/classes/wpOrder.php';