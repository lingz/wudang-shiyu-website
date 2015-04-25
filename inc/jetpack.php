<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package wudang-shiyu
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function odeh_web_programming_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'odeh_web_programming_jetpack_setup' );
