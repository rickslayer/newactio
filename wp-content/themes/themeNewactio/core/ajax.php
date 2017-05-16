<?php

add_action('wp_ajax_nopriv_actio_get_post_by_category', 'actio_get_post_by_category');
add_action('wp_ajax_actio_get_post_by_category', 'actio_get_post_by_category');

require_once get_template_directory() . '/core/busca-posts.php';