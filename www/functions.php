<?php

function bigboss_scripts() {
    wp_enqueue_style('mainscss', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('resetmodalbg', get_template_directory_uri() . '/assets/css/reset__modal__bg.css');
    wp_enqueue_style('owlcardef', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.theme.default.min.css');
    wp_enqueue_style('owlcar', get_template_directory_uri() . '/owlcarousel/dist/assets/owl.carousel.min.css');
    wp_enqueue_script('jq', get_template_directory_uri() . '/assets/js/jquery.js', array(), '15052020', true);
    wp_enqueue_script('mainjs', get_template_directory_uri() . '/assets/js/main.js', array(), '15052020', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.js', array(), '15052020', true);
    wp_enqueue_script('popper', get_template_directory_uri() . '/assets/js/popper.js', array(), '15052020', true);
    wp_enqueue_script('isotop', get_template_directory_uri() . '/assets/js/isotop.js', array(), '15052020', true);
    wp_enqueue_script('owl', get_template_directory_uri() . '/owlcarousel/dist/owl.carousel.min.js', array(), '15052020', true);
    wp_enqueue_script('select2', get_template_directory_uri() . '/assets/js/select2.js', array(), '15052020', true);
    wp_enqueue_script('jqim', get_template_directory_uri() . '/assets/js/inputmask.js', array(), '15052020', true);
}

add_action( 'wp_enqueue_scripts', 'bigboss_scripts');

// Отключаем сам REST API
add_filter('rest_enabled', '__return_false');
// Отключаем фильтры REST API
remove_action( 'xmlrpc_rsd_apis',            'rest_output_rsd' );
remove_action( 'wp_head',                    'rest_output_link_wp_head', 10, 0 );
remove_action( 'template_redirect',          'rest_output_link_header', 11, 0 );
remove_action( 'auth_cookie_malformed',      'rest_cookie_collect_status' );
remove_action( 'auth_cookie_expired',        'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_username',   'rest_cookie_collect_status' );
remove_action( 'auth_cookie_bad_hash',       'rest_cookie_collect_status' );
remove_action( 'auth_cookie_valid',          'rest_cookie_collect_status' );
remove_filter( 'rest_authentication_errors', 'rest_cookie_check_errors', 100 );
// Отключаем события REST API
remove_action( 'init',          'rest_api_init' );
remove_action( 'rest_api_init', 'rest_api_default_filters', 10, 1 );
remove_action( 'parse_request', 'rest_api_loaded' );
// Отключаем Embeds связанные с REST API
remove_action( 'rest_api_init',          'wp_oembed_register_route'              );
remove_filter( 'rest_pre_serve_request', '_oembed_rest_pre_serve_request', 10, 4 );
remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
remove_action( 'wp_head', 'wp_oembed_add_host_js' );

