<?php
/**
 * Template Name: Elementor Page
 *
 * The template file for displaying home page.
 *
 * @package siniko
 */

get_header(); ?>

<?php

if ( have_posts() ) :
	while ( have_posts() ) : the_post();
		ob_start();
		the_content();
	endwhile;
endif;

?>

<?php get_footer(); ?>
