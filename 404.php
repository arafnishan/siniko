<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package siniko
 */
$heading = get_theme_mod('siniko_404_page_heading', 'Oops! That page can&rsquo;t be found.');
$desc = get_theme_mod('siniko_404_page_desc', 'It looks like nothing was found at this location. Maybe try one of the links below or a search?');
$btn_text = get_theme_mod('siniko_404_btn_text', 'BACK HOME');
get_header();
?>

<div class="blog-area pt-120 pb-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title error-title"><?php print wp_kses_post( $heading ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content mb-40">
					<p><?php print wp_kses_post( $desc ); ?></p>

					<?php get_search_form(); ?>

				</div><!-- .page-content -->
				<a href="<?php print esc_url(home_url('/')); ?>" class="btn brand-btn"><?php print wp_kses_post( $btn_text ); ?></a>
			</section><!-- .error-404 -->

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
