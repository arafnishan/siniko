<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package siniko
 */ 
?>

<!doctype html>
<html <?php language_attributes(); ?> <?php print enable_rtl(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- Add your site or application content here -->
    <!-- header start -->
    <?php do_action('siniko_header_style'); ?>
    <!-- header end -->
    <!-- wrapper-box start -->
    <?php do_action('siniko_before_main_content'); ?>
    





        