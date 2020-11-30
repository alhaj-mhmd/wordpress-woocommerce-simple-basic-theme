<?php

class Table {}
class Chair {} 
class Restaurant {}
class Customer {}

//**  attach assets files 
function simplle_basic_load_scripts()
{
    wp_enqueue_style("theme-css", get_template_directory_uri() . "/assest/css/theme.css", array(), "1.0", "all");
    wp_enqueue_style("theme-style", get_stylesheet_uri(), "1.0", "all");
    wp_enqueue_script("theme-js",get_template_directory_uri() . "/assest/js/theme.js",array("jquery"),"1.0",true);
}
add_action("wp_enqueue_scripts", "simplle_basic_load_scripts");


//**  regiset nav menu
function simle_basic_nav_config(){
    register_nav_menus(array(
        // menu/location id / menu name 
        "theme_primary_menu"=>"Primary Menu",
        "theme_footer_menu"=>"Footer Menu",
    ));
} 
add_action("after_setup_theme","simle_basic_nav_config");



