<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package siniko
 */
$readmore_text = get_theme_mod('siniko_blog_read_more_text', 'Read More');
$readmore_icon = get_theme_mod('siniko_blog_read_more_icon', 'dripicons-arrow-thin-right');
$show_readmore = get_theme_mod('siniko_blog_btn_show', true);
if( is_single() ): ?>
        <div id="post-<?php the_ID(); ?>" <?php post_class('blog-wrapper'); ?> data-wow-delay=".3s">
            <?php if(has_post_thumbnail()): ?>
                <div class="blog-img">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
                </div>
            <?php endif; ?>
            <div class="blog-text blog2-text blog-details-content">
                <div class="blog-meta">
                    <span>
                        <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                            <i class="far fa-user-circle"></i> <?php print get_the_author(); ?>
                        </a>
                    </span>
                    <span><i class="dripicons-calendar"></i> <?php the_time(get_option('date_format')); ?> </span>
                    <span><a href="<?php comments_link(); ?>"><i class="dripicons-message"></i> <?php comments_number(); ?></a></span>
                </div>
                <div class="post-entry">
                    <?php the_content(); ?>
                    <?php
                        wp_link_pages( array(
                            'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'siniko' ),
                            'after'       => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ) );
                    ?>
                </div>
                <?php print siniko_get_tag(); ?>
            </div>
            
        </div>
<?php
else: ?>
    <div id="post-<?php the_ID(); ?>" <?php post_class('blog-wrapper mb-40'); ?> data-wow-delay=".3s">
        <?php if( has_post_thumbnail() ): ?>
            <div class="blog-img">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('full', array('class' => 'img-responsive' )); ?>
                </a>
            </div>
        <?php endif; ?>
        <div class="blog-text">
            
            <div class="blog-meta">
                <span>
                    <a href="<?php print esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>">
                        <i class="dripicons-user"></i> <?php print get_the_author(); ?>
                    </a>
                </span>
                <span><i class="dripicons-calendar"></i> <?php the_time(get_option('date_format')); ?> </span>
                <span><a href="<?php comments_link(); ?>"><i class="dripicons-message"></i> <?php comments_number(); ?></a></span>
            </div>

            <h4 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
            
            <?php the_excerpt(); ?>

            <?php if( $show_readmore ): ?>
                <div class="blog-d-btn">
                    <a class="btn" href="<?php the_permalink(); ?>"> <?php print wp_kses_post($readmore_text ); ?> <i class="<?php print wp_kses_post($readmore_icon ); ?>"></i></a>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php
endif; ?>


