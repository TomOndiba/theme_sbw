<?php

elgg_register_event_handler('init', 'system', 'theme_sbw_init');

function theme_sbw_init() {
	elgg_unregister_plugin_hook_handler('prepare', 'menu:site', '_elgg_site_menu_setup');

	elgg_register_plugin_hook_handler('register', 'menu:topbar', 'theme_sbw_topbar_menu');

	elgg_require_js('theme_sbw');
}

/**
 *
 */
function theme_sbw_topbar_menu($hook, $type, $menu, $params) {
	$menu[] = ElggMenuItem::factory(array(
		'name' => 'site_menu_toggle',
		'text' => elgg_view_icon('bars'),
		'href' => '',
	));

	return $menu;
}
