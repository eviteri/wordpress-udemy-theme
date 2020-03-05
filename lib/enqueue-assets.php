<?php 

function _themename_assets(){
    wp_enqueue_style(
        '_themename-stylesheet', 
        get_template_directory_uri().'/dist/assets/css/bundle.css', 
        array(), 
        '1.0.0', 
        'all'
    );

    //load after '_themename-stylesheet'
    include(get_template_directory(). '/lib/inline-css.php'); 
    wp_add_inline_style('_themename-stylesheet',$inline_styles);

    wp_enqueue_script('jquery');
    wp_enqueue_script(
        '_themename-scripts',
        get_template_directory_uri().'/dist/assets/js/bundle.js', 
        ['jquery'], 
        '1.0.0', 
        true
    );
}
add_action('wp_enqueue_scripts', '_themename_assets');

function _themename_admin_assets(){
    wp_enqueue_style(
        '_themename-admin-stylesheet', 
        get_template_directory_uri().'/dist/assets/css/admin.css', 
        array(), 
        '1.0.0', 
        'all'
    );

    wp_enqueue_script(
        '_themename-admin-scripts',
        get_template_directory_uri().'/dist/assets/js/admin.js', 
        [], 
        '1.0.0', 
        true
    );
}
add_action('admin_enqueue_scripts', '_themename_admin_assets');

//No needed any more
function _themename_customize_preview_js(){
    wp_enqueue_script(
        '_themename-customize-preview',
        get_template_directory_uri().'/dist/assets/js/customize-preview.js', 
        ['customize-preview', 'jquery'], 
        '1.0.0', 
        true
    );

    include(get_template_directory(). '/lib/inline-css.php'); 
    wp_localize_script(
        '_themename-customize-preview',  // To be available in this js file - should match line 49
        '_themename', // variable name
        array(
            'inline-css' => $inline_styles_selectors
        )
    );
}
add_action('customize_preview_init', '_themename_customize_preview_js');