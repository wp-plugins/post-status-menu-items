=== Post Status Menu Items ===
Contributors: mrwweb
Tags: post status, admin menu, admin, administration, cms, scheduled, drafts, content management, edit flow
Requires at least: 3.0
Tested up to: 3.5
Stable tag: 1.1.2
Donate Link: https://www.networkforgood.org/donation/MakeDonation.aspx?ORGID2=522061398
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Adds post status links (e.g. "Draft") to post type admin menus.

== Description ==

This plugin is useful for people who regularly use all or most of the post statuses with Posts, Pages, or Custom Post Types. The plugin provides options to control which post statuses are displayed and in which menus those statuses are displayed. Each post status is followed by the number of posts in that status (e.g. "Drafts (17)").

Statuses with 0 posts are not displayed. Posts are the only post type for which the post status menu items are enabled by default.

This plugin works with custom statuses created by [Edit Flow](http://wordpress.org/extend/plugins/edit-flow/) or [`register_post_status()`](http://codex.wordpress.org/register_post_status).

== Installation ==

1. Upload the "post-status-menu-items" folder to the `/wp-content/plugins/` directory of your WordPress site.
1. Activate the plugin, "Post Status Menu Items" through the "Plugins" menu in WordPress

== Frequently Asked Questions ==

= Where are the Settings? =
* Settings > Writing.
* Look for the "Settings for 'Post Status Menu Items'" section.

= How Do I Turn the Menus On or Off for a Post Type? =
* Go to the plugin's settings (see above).
* Check or uncheck the post types you do or don't want to display post statuses for.
* Click "Save Changes"

= Can I suggest a feature? =
* Sure thing. Do it on this [thread in the Support Forums](http://wordpress.org/support/topic/plugin-post-status-menu-items-post-your-feature-suggestions-here).

== Screenshots ==
1. The "Posts" flyout menu showing some post statuses.
2. The "Posts" expanded menu showing some post statuses.
3. Plugin Options on Settings > Writing (specific Post Types and Post Statuses may vary by site) 

== Changelog ==
= 1.1.2 =
* Second headers already sent fix. This one was an encoding issue.

= 1.1.1 =
* Fixed "headers already sent" error with some plugins.
* Added screenshot of plugin options

= 1.1.0 =
* Added support for custom post statuses made with Edit Flow or `register_post_status()`.
* Added option to control which post stati are displayed (see Settings > Writing).
* Moved/added all options to single option in the database. (Previously saved options should be automatically migrated.)
* First pass at inline documentation.
* Now translatable (i.e. i18n).
* Updated version compatibility #.

= 1.0.1 =
* Updated "Requires at least" version to 3.0 after some research.
* Tweaked function that adds menu items to be slightly more efficient (avoiding array_push).

= 1.0 =
* Almost a complete rewrite. Again :)
* Added "Private" and "Trash" Statuses.
* Added support for Pages and Custom Post Types.
* Added options to toggle display of menu items for all post types (Settings > Writing).
* Added status counts to each menu item.
* Statuses with 0 posts are now hidden.

= 0.2 =
* Rewrite to hopefully avoid conflicts with other plugins.

= 0.1 =
* First release.

== Upgrade Notice ==
= 1.1.2 =
Another fix for "headers already sent"/admin white screen. Sorry for the inconvenience.

= 1.1.1 =
Bug fix for "headers already sent"/white screen error.

= 1.1.0 =
New option to hide specific statuses. Now compatible with custom statuses, Edit Flow plugin, etc.

= 1.0.1 =
This update contains a very minor performance improvement.

= 1.0 =
New features! 1.0 adds Page and Custom Post Type support, post counts, and hides empty statuses.