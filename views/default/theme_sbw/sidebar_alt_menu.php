<?php

$menu = elgg_view_menu('owner_block', [
	'entity' => elgg_get_logged_in_user_entity(),
]);

echo elgg_view_module('aside', elgg_echo('theme_sbw:my_content'), $menu);
