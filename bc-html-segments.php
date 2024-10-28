<?php

/*
Plugin Name: BC HTML Segments
Plugin URI:  https://berdingconsulting.com/product/bc-html-segments/
Description: Output just the header or footer for use with other sub-systems
Version:     0.1
Author:      Michael Berding
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// https://developer.wordpress.org/plugins/the-basics/header-requirements/

defined( 'ABSPATH' ) or die( 'No script kiddies please!' );

add_action( 'parse_request', function() {
	if ( $_GET['bc_segment']=='header' ) {
		get_header();
		// do_action('wp_footer');
		die;
	} elseif ( $_GET['bc_segment']=='footer' ) {
		//do_action('wp_head');
		get_footer();
		die;
	}
} );
