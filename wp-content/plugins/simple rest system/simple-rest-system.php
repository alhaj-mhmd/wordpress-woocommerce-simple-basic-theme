<?php
/*
Plugin Name: simple rest system 
Plugin URI:   
Description: Describe what your plugin is all about in a few short sentences
Version:     1.0
Author:      Mohammad
Author URI:  
License:     GPL2 etc
License URI:  */


function test (){
    echo "hi mohammad";
}
add_action( "get_sidebar", "test" );

function renym_wordpress_typo_fix( $text ) {
	return str_replace( 'wordpress', 'WordPress', $text );
}
add_filter( 'the_content', 'renym_wordpress_typo_fix' );
// /----------------------------------------------- 
function html_form_code() {
	echo '<form action="' . esc_url( $_SERVER['REQUEST_URI'] ) . '" method="post">';
	echo '<p>';
	echo 'Your Name (required) <br/>';
	echo '<input type="text" name="cf-name" pattern="[a-zA-Z0-9 ]+" value="' . ( isset( $_POST["cf-name"] ) ? esc_attr( $_POST["cf-name"] ) : '' ) . '" size="40" />';
    echo '</p>';
     
	echo '<p><input type="submit" name="cf-submitted" value="Send"></p>';
	echo '</form>';
}

// function deliver_mail() {

// 	// if the submit button is clicked, send the email
// 	if ( isset( $_POST['cf-submitted'] ) ) {

// 		// sanitize form values
// 		$name    = sanitize_text_field( $_POST["cf-name"] );
// 		$email   = sanitize_email( $_POST["cf-email"] );
// 		$subject = sanitize_text_field( $_POST["cf-subject"] );
// 		$message = esc_textarea( $_POST["cf-message"] );

// 		// get the blog administrator's email address
// 		$to = get_option( 'admin_email' );

// 		$headers = "From: $name <$email>" . "\r\n";

// 		// If email has been process for sending, display a success message
// 		if ( wp_mail( $to, $subject, $message, $headers ) ) {
// 			echo '<div>';
// 			echo '<p>Thanks for contacting me, expect a response soon.</p>';
// 			echo '</div>';
// 		} else {
// 			echo 'An unexpected error occurred';
// 		}
// 	}
// }

function cf_shortcode() {
	ob_start();
	deliver_mail();
	html_form_code();

	return ob_get_clean();
}

add_shortcode( 'sitepoint_contact_form', 'cf_shortcode' );

?>
?>