<?php
/*
Plugin Name: Forum Badges
Plugin URI:  https://wordpress.org/plugins/forum-badges/
Description: Plugin to display your WordPress.org forum badges
Version:     1.0
Author:      George Botsev
Author URI:  https://www.george.botsev.it
License:     GPL3
License URI: https://www.gnu.org/licenses/gpl-3.0.html
Text Domain: forumbadges
Domain Path: /languages
*/
class ForumBadgesWidget {
	
	function __construct() {
		add_action( 'wp_enqueue_scripts', array($this, 'EnqueueStyles') );
		add_shortcode('badges', array($this, 'ForumBadgesDisplay'));
	}
	function EnqueueStyles() {
                $url = plugins_url( 'style.css', __FILE__ );
		wp_enqueue_style( 'badges', $url  );
	}
	function ForumBadgesDisplay ($atts) {
		 extract(shortcode_atts(array(
		 'badge' => '',
				), $atts));
		switch ($badge){
			case 'speaker':
				$badge = 'speaker';
				$icon = 'megaphone';
				$role = 'WordCamp Speaker';
				break;
			case 'translator-editor':
				$badge = 'translation-editor';
				$icon = 'translation';
				$role = 'Translation Editor';
				break;
			case 'translator-contributor':
				$badge = 'translation-contributor';
				$icon = 'translation';
				$role = 'Translation Contributor';
				break;
			case 'plugins':
				$badge = 'plugins';
				$icon = 'admin-plugins';
				$role = 'Plugin Developer';
				break;
			case 'plugin-review':
				$badge = 'plugins-reviewer';
				$icon = 'admin-plugins';
				$role = 'Plugin Review Team';
				break;
			case 'themes':
				$badge = 'themes';
				$icon = 'admin-appearance';
				$role = 'Theme Developer';
				break;
			case 'themes-review':
				$badge = 'themes-reviewer';
				$icon = 'admin-appearance';
				$role = 'Theme Review Team';
				break;
			case 'community':
				$badge = 'community';
				$icon = 'groups';
				$role = 'Community Team';
				break;
			case 'support':
				$badge = 'support';
				$icon = 'format-chat';
				$role = 'Support Team';
				break;
			case 'support-contributor':
				$badge = 'support-contributor';
				$icon = 'format-chat';
				$role = 'Support Contributor';
				break;
			case 'code-commiter':
				$badge = 'code-committer';
				$icon = 'editor-code';
				$role = 'Core Team';
				break;
			case 'code-contributor':
				$badge = 'code';
				$icon = 'editor-code';
				$role = 'Core Contributor';
				break;
			case 'tv-contributor':
				$badge = 'wordpress-tv-contributor';
				$icon = 'video-alt2';
				$role = 'WordPress.tv Contributor';
				break;
			case 'tv-team':
				$badge = 'wordpress-tv';
				$icon = 'video-alt2';
				$role = 'WordPress.tv Team';
				break;
			case 'documentation':
				$badge = 'documentation';
				$icon = 'admin-page';
				$role = 'Documentation Team';
				break;
			case 'documentation-contributor':
				$badge = 'documentation-contributor';
				$icon = 'admin-page';
				$role = 'Documentation Contributor';
				break;
			case 'meta':
				$badge = 'meta';
				$icon = 'networking';
				$role = 'Meta Team';
				break;
			case 'meta-contributor':
				$badge = 'meta-contributor';
				$icon = 'networking';
				$role = 'Meta Contributor';
				break;
			case 'mobile':
				$badge = 'mobile';
				$icon = 'smartphone';
				$role = 'Mobile Team';
				break;
			case 'accessibility':
				$badge = 'accessibility';
				$icon = 'universal-access';
				$role = 'Accessibility Team';
				break;
			case 'training-team':
				$badge = 'training-team';
				$icon = 'welcome-learn-more';
				$role = 'Training Team';
				break;
			case 'training':
				$badge = 'training';
				$icon = 'welcome-learn-more';
				$role = 'Wordpress Trainer';
				break;
			case 'organizer':
				$badge = 'community';
				$icon = 'groups';
				$role = 'WordCamp Organizer';
				break;
			default	:
				$badge = 'warning';
				$icon = 'warning';
				$role = 'No badge specified';
				break;
		}
		$sc = '<div id="user-badges" class="badge item dashicons badge-' . $badge . ' dashicons-'. $icon .'" title="' . $role . '">&nbsp;</div>';
	return $sc;
}
}

new ForumBadgesWidget();