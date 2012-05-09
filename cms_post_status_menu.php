<?php
/*
Plugin Name: Post Status Menu Items
Plugin URI: http://mrwweb.com/wordpress-post-status-menu-item-plugin/
Description: Adds post status links (e.g. "Draft (6)") to the Admin submenus.
Version: 1.0.1
Author: Mark Root-Wiley aka MRWweb
Author URI: http://mrwweb.com
*/

// Big thanks to http://wordpress.stackexchange.com/a/3831/9844 which sent me own the path to this completed plugin.

add_action('admin_menu', 'cms_post_status_menu');
/**
 * cms_post_status_menu()
 * appends post statuses to menus if settings warrant such action.
 */
function cms_post_status_menu() {
	
	global $submenu;
	// Get list of post types
	$ps_post_types = ps_get_post_type_list();
	
	// loop through the post types array we just got
	foreach( $ps_post_types as $type_id => $type_name ) {
		
		// check option for whether to statuses for this post type
		if ( get_option( 'ps_show_in_' . $type_id ) == 1 ) {
			
			// an array of all the statuses,with i18n
			// can people make custom statuses? Do I need to handle this?
			$ps_statuses = array(
				'draft' => __('Drafts'),
				'pending' => __('Pending'),
				'future' => __('Scheduled'),
				'publish' => __('Published'),
				'private' => __('Private'),
				'trash' => __('Trash')
			);
			
			// Get the correct submenu. Posts are a weird case.
			if( $type_id == 'post' ) {
				$menu = 'edit.php';
			} else {
				$menu = 'edit.php?post_type=' . $type_id;
			}			
			
			$status_counts = wp_count_posts( $type_id );
			
			// loop through statuses array
			foreach( $ps_statuses as $status_id => $status_name ) {
				$status_count = ' (' . $status_counts -> $status_id . ')';
				if( ! ( $status_count == ' (0)' ) ) {
					$submenu[$menu][] = array( $status_name . $status_count, 'read', get_admin_url() . 'edit.php?post_status=' . $status_id . '&post_type=' . $type_id );
				}
			}
		
		}
	
	}
	
}


// ------------------------------------------------------------------
// Make some rad plugin settings
// ------------------------------------------------------------------
//
// Thanks, Codex! http://codex.wordpress.org/Settings_API

add_action('admin_init', 'ps_settings_api_init');
/**
 * ps_settings_api_init()
 * adds setting section
 * adds and registers all settings fields
 * sets posts to show by default
 */
function ps_settings_api_init() {
	// Add the section to reading settings so we can add our
	// fields to it
	add_settings_section(
		'ps_setting_section',
		'Post Status Menu Items Settings',
		'ps_setting_section_callback_function',
		'writing'
	);
	
	$ps_post_types = ps_get_post_type_list();

	// loop through all post types now to add_settings_field and register_setting
	foreach( $ps_post_types as $type_id => $type_name ) {
		// Add the field with the names and function to use for our new
		// settings, put it in our new section
		add_settings_field(
			'ps_show_in_' . $type_id,
			'Show Statuses in <b>' . $type_name . '</b> Menu',
			'ps_make_checkbox_callback',
			'writing',
			'ps_setting_section',
			array( $type_id )
		);

		// Register our setting so that $_POST handling is done for us and
		// our callback function just has to echo the <input>
		register_setting( 'writing', 'ps_show_in_' . $type_id );
	}
	
	// Set Posts to Show by Default
	if( !get_option( 'ps_show_in_post' ) ) add_option( 'ps_show_in_post', 1 );
	
}


/**
 * ps_setting_section_callback_function()
 * doesn't do anything for the time being, if the plugin gets more complicated, it might
 */
function ps_setting_section_callback_function() {}

/**
 * ps_make_checkbox_callback()
 * echoes a checkbox for settings
 * $options is passed from add_settings_field() $args argument
 */
function ps_make_checkbox_callback( $options ) {
	
	$type_id = $options[0];
	
	echo '<input name="ps_show_in_' . $type_id . '" id="ps_show_in_' . $type_id . '" type="checkbox" value="1" ' . checked( 1, get_option('ps_show_in_' . $type_id . ''), false ) . ' />';

}

/**
 * ps_get_post_type_list()
 * no arguments
 * @returns an array of custom post types where show_ui = true
*/
function ps_get_post_type_list() {

	// The post types we'll always display
	$ps_post_types = array( 'post' => 'Posts', 'page' => 'Pages' );
	
	// Get all Public but Not Built In Post Types
	$ps_custom_post_types = get_post_types( array( 'show_ui' => true, '_builtin' => false ), 'objects', 'AND' );
	
	// Build array with the other post types
	foreach( $ps_custom_post_types as $key => $value ) {
		
		$type_id = $key;
		$type_name = $value->labels->name;
		$ps_post_types[$type_id] = $type_name;
		
	}
	
	return $ps_post_types;
	
}