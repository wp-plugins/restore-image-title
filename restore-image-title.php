<?php
/*
Plugin Name: Restore Image Title
Description: Reverses WP 3.5's behaviour of stripping title from images inserted into posts
Version: 1.1
License: GPL
Author: Les Bessant
Author URI: http://losingit.me.uk/
*/

function lcb_restore_image_title( $html, $id ) {

	$attachment = get_post($id);
    if (strpos($html, "title=")) {
    	return $html;
    	}
    else {
		$mytitle = esc_attr($attachment->post_title);
		return str_replace('<img', '<img title="' . $mytitle . '" '  , $html);      
}
}
add_filter( 'media_send_to_editor', 'lcb_restore_image_title', 15, 2 );
?>