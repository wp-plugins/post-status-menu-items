=== Plugin Name ===
Contributors: mrwweb
Tags: post status, admin menu, admin, administration, cms, scheduled, drafts, content management
Requires at least: 3.0
Tested up to: 3.3.2
Stable tag: 1.0.1
Donate Link: https://www.networkforgood.org/donation/MakeDonation.aspx?ORGID2=522061398
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin adds the post statuses (e.g. "Draft") to Page, Post, and Custom Post Type admin menus.

== Description ==

This plugin is useful for people who regularly use all or most of the post statuses. Posts, Pages, and Custom Post Types are all supported by the plugin with options to toggle menu statuses on/off for each post type. __Posts are the only post type for which the post status menu items are enabled by default.__

The plugin adds the following post statuses to to the Dashboard's submenus: Drafts, Pending, Scheduled, Published, Private, and Trash. Each post status is followed by the number of posts in that status (e.g. "Drafts (17)"). Statuses with 0 posts are not displayed.

== Installation ==

1. Upload the "CMS Post Status Menu" folder to the `/wp-content/plugins/` directory of your WordPress site.
1. Activate the plugin, "Post Status Menu Items" through the "Plugins" menu in WordPress

== Frequently Asked Questions ==

= Where are the Settings? =
* Settings > Writing
* Look for the "Settings for 'Post Status Menu Items'" section.

= How Do I Turn the Menus On or Off for a Post Type =
* Go to the plugin's settings (see above).
* Check or uncheck the post types you do or don't want to display post statuses for.
* Click "Save Changes"

= Can I suggest a feature? =
* Sure thing. Do it on this [thread in the Support Forums](http://wordpress.org/support/topic/plugin-post-status-menu-items-post-your-feature-suggestions-here).

== Screenshots ==

1. The "Posts" flyout menu showing some post statuses.
2. The "Posts" expanded menu showing some post statuses.

== Changelog ==
= 1.0.1 =
* Updated "Requires at least" version to 3.0 after some research.
* Tweaked function that adds menu items to be slightly more efficient (avoiding array_push).

= 1.0 =
* Almost a complete rewrite. Again :)
* Added "Private" and "Trash Statuses."
* Added support for Pages and Custom Post Types.
* Added options to toggle display of menu items for all post types (Settings > Writing).
* Added status counts to each menu item.
* Statuses with 0 posts are now hidden.

= 0.2 =
* Rewrite to hopefully avoid conflicts with other plugins.

= 0.1 =
* First release.

== Upgrade Notice ==

= 1.0.1 =
This update contains a very minor performance improvement.

= 1.0 =
New features! 1.0 adds Page and Custom Post Type support, post counts, and hides empty statuses.