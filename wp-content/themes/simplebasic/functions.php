<?php
function simplle_basic_load_scripts()
{
    wp_enqueue_style("theme-css", get_template_directory_uri() . "/assest/css/theme.css", array(), "1.0", "all");
    wp_enqueue_style("theme-style", get_stylesheet_uri(), "1.0", "all");
    wp_enqueue_script("theme-js",get_template_directory_uri() . "/assest/js/theme.js",array("jquery"),"1.0",true);
}
add_action("wp_enqueue_scripts", "simplle_basic_load_scripts");
