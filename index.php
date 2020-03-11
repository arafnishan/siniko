<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package siniko
 */

get_header();

$blog_column = is_active_sidebar( 'right-sidebar' ) ? 8 : 12 ;

?>

<div class="blog-area pt-115 pb-115">
    <div class="container">
        <div class="row">
			<div class="col-lg-<?php print esc_attr($blog_column); ?> blog-post-items blog-standard">
				<div class="blog-standard">
					<?php
					if ( have_posts() ) :

						if ( is_home() && ! is_front_page() ) :
							?>
							<header>
								<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
							</header>
							<?php
						endif;

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

						endwhile;
						?>
			               	<div class="paginations">
			               		<?php siniko_pagination('<i class="fas fa-angle-double-left"></i>', '<i class="fas fa-angle-double-right"></i>', '', array('class' => '')); ?>
			                </div>
						<?php
					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

				</div>
			</div>

			<?php if ( is_active_sidebar( 'right-sidebar' ) ) { ?>
		        <div class="col-lg-4 ">
					<?php get_sidebar(); ?>
	            </div>
			<?php
			}
			?>
	    </div>
    </div>
</div>

<?php
get_footer();
