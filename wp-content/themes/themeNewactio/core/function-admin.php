<?php
/*
@package themeNewactio
====================
ADMIN PAGE
====================
*/

function actio_add_admin_page(){

    add_menu_page( 'Actio Comunicação', 'Actio', 'manage_options', 'actio_comunicacao', 'actio_theme_create_page', '', 110);

    add_submenu_page('actio_comunicacao' , 'Actio Configurações', 'Configurações', 'manage_options', 'actio_comunicacao', 'actio_theme_create_page');
    add_submenu_page('actio_comunicacao' , 'Actio Opções CSS', 'CSS Customizado', 'manage_options', 'actio_comunicacao_css', 'actio_theme_configuracao_page');

    add_action('admin_init', 'actio_custom_settings');

}
add_action('admin_menu', 'actio_add_admin_page');

function actio_custom_settings(){
    register_setting('actio-settings-group','first_name');
}

function actio_theme_create_page(){

    require_once(get_template_directory() . '/core/template/actio-admin.php');

}
function actio_theme_configuracao_page(){

}