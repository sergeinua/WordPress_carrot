<?php

function carrot_styles(){
    wp_enqueue_style('style', get_template_directory_uri() . '/html/dist/css/styles.css');
}
add_action( 'wp_enqueue_scripts', 'carrot_styles' );

// custom class for cf7
function custom_custom_form_class_attr( $class ) {
    $class .= ' modal-form';
    return $class;
}
add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );