<?php
 function simple_bootsrap_theme_load_script(){
wp_enqueue_style( "bootstrap",get_template_directory_uri()."/assets/vendor/bootstrap/css/bootstrap.min.css" , array(),  "1.0", "all" );
wp_enqueue_style( "blog-hmoe", get_template_directory_uri()."/assets/css/blog-home.css", array(), "1.0","all" );
wp_enqueue_style( "style", get_stylesheet_uri() , array(), "1.0", "all" );

wp_enqueue_script( "bootstrap",get_template_directory_uri()."/assets/vendor/bootstrap/js/bootstrap.bundle.min.js", array("jquery"), "1.0", true );
}
 add_action("wp_enqueue_scripts","simple_bootsrap_theme_load_script");