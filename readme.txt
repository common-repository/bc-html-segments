=== Plugin Name ===
Contributors: mberding
Tags: 
Requires at least: 1.5.0
Tested up to: 5.4.2
Stable tag: 0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Output just the header or footer for use with other sub-systems

== Description ==

When installed this plugin allows you to append "&bc_segment=header" or "&bc_segment=footer" to URLs and have 
WordPress only output the HTML that is rendered when the get_header() and get_footer() functions are called,
respectively.  This is particularly useful if you want to have another system look like it's using the same
site as the original, yet not actually be running WordPress.

For example, if you have a College Bookstore that does buyback, you could write all of the code and functionality
of the buyback system into WordPress itself, or you could let WordPress do what it does best and create another
system using whatever your favorite framework is on a subdomain.  Then when it's time to integrate your custom
code into a working site, your system can just fetch the headers and footers from the parent WordPress site, and
viola!, your custom site is indistinguishable from the parent site.

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
1. Activate the plugin through the 'Plugins' screen in WordPress


== Frequently Asked Questions ==

= How does this plugin help me =

If you're running non-wordpress sub-systems that need to look like wordpress, and keep up with any changes the author
makes, then this can help you fetch the headers and footers as needed.


== Changelog ==

= 0.1 =
* Initial Creation.

