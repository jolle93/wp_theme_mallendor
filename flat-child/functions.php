<?php

add_action('wp_enqueue_scripts','md_enqueue_styles');

function md_enqueue_styles() {
	$parten_style = 'flat-style';

	wp_enqueue_style($parten_style, get_template_directory_uri() . '/style.css');
	wp_enqueue_style('flat-child-overrides', '/wp-content/themes/wp_theme_mallendor/flat-child/assets/css/overrides.css');
}