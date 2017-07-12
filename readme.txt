=== Forum Badges ===
Contributors: botzev
Donate link: https://www.george.botsev.it
Tags: forum, badges, swag
Requires at least: 4.6.1
Tested up to: 4.6.1
Stable tag: 1.0
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Plugin to display your WordPress.org forum badges

== Description ==
Have you ever wanted to display your profile badge from WordPress.org to your site? If yes - then this is the plugin for you.
Now you can display your achievements in the WordPress community on your blog and let the others know how much involved are you in the community.


== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/plugin-name` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the shortcode [badges badge=x] to get a badge in your content, where x is a badge from the list of badges.
More info in the Other Notes section

== List of Badges ==
Badge for WordCamp speaker:
`[badges badge=speaker]`

Badge for translation contributor
`[badges badge=translator-contributor]`

Badge for translation editor
`[badges badge=translator-editor]`

Badge for plugin developer
`[badges badge=plugins]`

Badge for theme developer
`[badges badge=themes]`

Badge for community team
`[badges badge=community]`

Badge for support team
`[badges badge=support]`

Badge for core team
`[badges badge=code-commiter]`

Badge for core contributor
`[badges badge=code-contributor]`

Badge for WordPress.tv contributor
`[badges badge=tv-contributor]`

Badge for WordPress.tv team
`[badges badge=tv-team]`

Badge for support contributor
`[badges badge=support-contributor]`

Badge for documentation contributor
`[badges badge=documentation-contributor]`

Badge for documentation team
`[badges badge=documentation]`

Badge for meta team
`[badges badge=meta]`

Badge for meta contributor
`[badges badge=meta-contributor]`

Badge for theme team
`[badges badge=themes-review]`

Badge for mobile team
`[badges badge=mobile]`

Badge for accessibility team
`[badges badge=accessibility]`

Badge for training team
`[badges badge=training-team]`

Badge for trainer
`[badges badge=training]`

Badge for  plugin reviewer
`[badges badge=plugin-review]`

Badge for WordCamp Organizer
`[badges badge=organizer]`

== Frequently Asked Questions ==

= How to make the shortcode work in a widget? =

Add this code to your theme functions.php or somewhere elese where appropriate:
`add_filter('widget_text','do_shortcode');`

== Screenshots ==

1. You can use the shortcode multiple times to display all the badges that you want/need.

== Changelog ==

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.0 =
* Initial release