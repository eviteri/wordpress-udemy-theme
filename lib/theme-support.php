<?php

function _themename_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', array('search-form', 'comment-list', 'comment-form', 'gallery', 'caption'));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('custom-logo', array(
        'height' => 200,
        'width' => 600,
        'flex-height' => true,
        'flex-width' => true
    ));
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio'
    ));

    //gutenber - Adding Editor styles to resemble Front-End
    add_theme_support('editor-styles');
    // path to the style sheet
    add_editor_style('dist/assets/css/editor.css');

     //gutenber - Adding align-wide & align-full support for images
     add_theme_support('align-wide'); 

     // gutenber - Creating a custom Colour Palet. You will need to add classes to reflect the colors you are creating. 
     // Background color will have .has-greyish-purple-background-color {}
     // Color will have .has-greyish-purple-color {}
     add_theme_support('editor-color-palette', array(
         array(
             'name' => __('Greyish Purple', '_themename'),
             'slug' => 'greyish-purple',
             'color' => '#524d5b'
         ),
         array(
             'name' => __('Pale Green', '_themename'),
             'slug' => 'pale-green',
             'color' => '#9dd3a8'
         )
     ));

     //gutenber - Making Gutenbergs Embedded Content Responsive
     add_theme_support('responsive-embeds');
    

}
add_action('after_setup_theme', '_themename_theme_support');

