<?php
/*
Plugin Name: Post Status Menu Items
Plugin URI: http://mrwweb.com/wordpress-post-status-menu-item-plugin/
Description: Adds post status links to the Posts admin submenu.
Version: 0.2
Author: Mark Root-Wiley aka MRWweb
Author URI: http://mrwweb.com
*/

// Big thanks to http://wordpress.stackexchange.com/a/3831/9844 for the hint on how to do this.

add_action('admin_menu', 'cms_post_status_menu');
function cms_post_status_menu() {
	
	global $submenu;
	$cms_post_status_items = array(
		array( __('Drafts'), 'read' , get_admin_url() . 'edit.php?post_status=draft&post_type=post' ),
		array( __('Pending'), 'read' , get_admin_url() . 'edit.php?post_status=pending&post_type=post' ),
		array( __('Scheduled'), 'read' , get_admin_url() . 'edit.php?post_status=future&post_type=post' ),
		array( __('Published'), 'read' , get_admin_url() . 'edit.php?post_status=publish&post_type=post' )
	);
	
	foreach( $cms_post_status_items as $item ) {
		array_push( $submenu['edit.php'], $item );
	}
	
}

?>