<?php
// styles & scripts
function carrot_styles(){
    wp_enqueue_style('style', get_template_directory_uri() . '/html/dist/css/styles.css');
}
add_action( 'wp_enqueue_scripts', 'carrot_styles' );

// adding custom class for cf7
function custom_custom_form_class_attr( $class ) {
    $class .= ' modal-form';
    return $class;
}
add_filter( 'wpcf7_form_class_attr', 'custom_custom_form_class_attr' );

// allowing .svg upload
function cc_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'cc_mime_types' );

// hiding editor field from the pages
function hide_editor_field() {
    remove_post_type_support( 'page', 'editor' );
}
add_action( 'init', 'hide_editor_field' );

// hiding acf options page
function remove_acf_menu() {
    remove_menu_page('edit.php?post_type=acf');
}
add_action( 'admin_menu', 'remove_acf_menu', 999);

function my_nav_wrap(){
    $wrap  = '<ul id="%1$s" class="%2$s">';
    $wrap .= '%3$s';
    $wrap .= '<li class="presentation-link"><a href="'.get_field('presentation', 'options').'">Презентация</a></li>';
    $wrap .= '</ul>';
    //language switcher
    if(qtrans_getLanguage()=='ru') {
        $wrap .= '<li role="menuitem" class="language"><a href="' . get_site_url() . '/ua" role="link"><span>Рідною мовою</span></a></li>';
    }
    if(qtrans_getLanguage()=='ua'){
        $wrap .= '<li role="menuitem" class="language"><a href="' . get_site_url() . '/ru" role="link"><span>По-русски</span></a></li>';
    }
    return $wrap;
}

//language switcher
function add_last_nav_item($items) {
    if(qtrans_getLanguage()=='ru') {
        $items .= '<li role="menuitem" class="language"><a href="' . get_site_url() . '/ua" role="link"><span>Рідною мовою</span></a></li>';
    }
    if(qtrans_getLanguage()=='ua'){
        $items .= '<li role="menuitem" class="language"><a href="' . get_site_url() . '/ru" role="link"><span>По-русски</span></a></li>';
    }
    return $items;
}
//add_filter('wp_nav_menu_items','add_last_nav_item');
