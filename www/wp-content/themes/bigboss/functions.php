<?php

function bigboss_scripts() {
    wp_enqueue_style('bootstrapcss', get_template_directory_uri() . '/assets/css/bootstrap.css');
    wp_enqueue_style('mainscss', get_template_directory_uri() . '/assets/css/main.css');
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


