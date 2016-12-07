<?php

echo elgg_view_field([
	'#type' => 'plaintext',
	'#label' => 'Email Footer',
	'name' => 'params[email_footer]',
	'value' => $vars['entity']->email_footer,
]);

$iframe = elgg_format_element('iframe', [
	'src' => elgg_normalize_url('html_email_handler/test'),
	'width' => 800,
	'height' => 800,
]);

echo elgg_view_module('aside', 'Preview', $iframe);
