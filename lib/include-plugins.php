<?php 

require_once get_template_directory() . '/lib/class-tgm-plugin-activation.php';

function _themename_register_required_plugins(){
    $plugins = array(
        array(
            'name' => '_themename metaboxes',
            'slug' => '_themename-metaboxes',
            'source' => get_template_directory_uri(). '/lib,plugins/firsttheme-metaboxes.zip',
            'required' => true,
            'version' => '1.0.0',
            'force_activation' => false, //set this allwasy to false
            'force_deactivation' => false //set this allwasy to false
        )
    );

    $config = array(

    );

    tgmpa($plugins, $config);
}

add_action('tgmpa_register', '_themename_register_required_plugins');