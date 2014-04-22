=== Restore Image Title ===
Contributors: LesBessant
Tags: image, title
Requires at least: 3.5
Tested up to: 3.9
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Restores the title attribute when images are inserted into posts

== Description ==

WordPress 3.5 introduced a new feature - when images are inserted into posts, the title attribute is not included in the image tag. This was done with the best of intentions relating to accessibility, as documented on [Trac](http://core.trac.wordpress.org/ticket/18984)

Unfortunately, this causes problems for some Lightbox plugins, quite apart from stopping image tooltips from appearing. 

This plugin hooks into the media_send_to_editor filter and inserts the image title into the html inserted into the post.

== Installation ==


1. Upload the restore-image-title folder into the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress

== Frequently Asked Questions ==

= Does it do anything else? =

No.


== Changelog ==

= 1.0 =
* Initial release

= 1.1 =
* Checks for existence of title attribute before adding anything. Filters title with esc_attr() to avoid any markup in the title breaking the ing tag.

== Upgrade Notice ==

= 1.0 =
First release

= 1.1 =
Checks for existence of title attribute before adding anything. Filters title with esc_attr() to avoid any markup in the title breaking the ing tag.

