<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package siniko
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function siniko_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}
	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}
	return $classes;
}
add_filter( 'body_class', 'siniko_body_classes' );

/**
 * Get tags.
 */
function siniko_get_tag() {
	$html = '';
	if(has_tag()) {
		$html .= '<div class="blog-post-tag"><span>'. esc_html__('Post Tags','siniko') .'</span>';
			$html .= get_the_tag_list('',' ','');
		$html .= '</div>';
	}
	return $html;
}

// siniko_service_sidebar
function siniko_service_sidebar() {
	if(is_active_sidebar('services-sidebar')){

		dynamic_sidebar( 'services-sidebar');
	}
}
add_action('siniko_service_sidebar','siniko_service_sidebar',20);

// siniko_portfolio_sidebar
function siniko_portfolio_sidebar() {
	if(is_active_sidebar('portfolio-sidebar')){

		dynamic_sidebar( 'portfolio-sidebar');
	}
}
add_action('siniko_portfolio_sidebar','siniko_portfolio_sidebar',20);