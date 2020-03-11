<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package siniko
 */

/**
*
* siniko header
*/
add_action('siniko_header_style', 'siniko_check_header', 10);

function siniko_check_header() {
	$siniko_header_style = get_post_meta( get_the_ID(), 'siniko_choice_header_style', true );
	$siniko_default_header_style = get_theme_mod('choose_default_header', 'header-style-1' );

	if( $siniko_header_style == 'header_style_1' ) {
		siniko_header_default();
	}
	elseif( $siniko_header_style=='header_style_2' ) {

		siniko_header_style_2();
	}
	elseif( $siniko_header_style=='header_style_3' ) {

		siniko_header_style_3();
	}
	else {

		/** default header style **/
		if($siniko_default_header_style == 'header-style-1'){
			siniko_header_default();
		}elseif($siniko_default_header_style == 'header-style-2'){
			siniko_header_style_2();
		}elseif($siniko_default_header_style == 'header-style-3'){
			siniko_header_style_3();
		}
	}
}

/**
* header style 1
*/
function siniko_header_default() {
	$siniko_topbar_switch = get_theme_mod('siniko_topbar_switch');
	$siniko_search = get_theme_mod('siniko_search');
	$siniko_cta_switch = get_theme_mod('siniko_cta_switch');
	$siniko_show_extra_info 	= get_theme_mod('siniko_show_extra_info');
	?>

		<header class="header-transparent">
			<?php 
			if( $siniko_topbar_switch ) { ?>
			<div class="top-bar d-none d-md-block">
				<div class="container">
					<div class="row">
						<?php siniko_header_intro(); ?>
						<div class="col-xl-6 col-lg-6 col-md-6">
							<?php siniko_header_free_analysis(); ?>
							<?php siniko_header_social_profiles(); ?>
						</div>
					</div>
				</div>
			</div>
			<?php 
			} ?> 
			<div id="sticky-header" class="main-menu-area menu-area-2 menu-area-3">
				<div class="container">
					<div class="menu-bg p-0 menu-bg-3">
						<div class="row">
							<div class="col-xl-3 col-lg-3 d-flex align-items-center">
								<?php siniko_header_logo(); ?>
							</div>
							<div class="col-xl-9 col-lg-9">
								<?php if( $siniko_show_extra_info ): ?>
								<div class="menu-bar info-bar text-right d-none d-md-none d-lg-block">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<?php endif; ?>

								<?php if( $siniko_search ): ?>
								<div class="search-icon d-none d-md-none d-lg-block">
									<a href="#" data-toggle="modal" data-target="#search-modal"><i class="dripicons-search"></i></a>
								</div>
								<?php endif; ?>
								<div class="main-menu text-right">
									<nav id="mobile-menu">
									<?php wp_nav_menu( array(
			                            	'theme_location' => 'main-menu',
			                            	'menu_class' => 'siniko-menu',
											'fallback_cb'     => 'Siniko_Navwalker::fallback',
											'walker'          => new Siniko_Navwalker(),
			                            ) );
		                            ?>
									</nav>
								</div>
								<div class="mobile-menu"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php siniko_extra_info(); ?>
		</header>
<?php 
}

/**
* header style 2
*/
function siniko_header_style_2(){
$siniko_show_extra_info 	= get_theme_mod('siniko_show_extra_info');
$siniko_search = get_theme_mod('siniko_search');	
$siniko_cta_switch = get_theme_mod('siniko_cta_switch');
?>
		<header class="header-transparent">
			<div id="sticky-header" class="main-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-xl-3 col-lg-3 d-flex align-items-center">
							<?php siniko_header_logo(); ?>
						</div>
						<div class="col-xl-9 col-lg-9">
							<?php if( $siniko_show_extra_info ): ?>
							<div class="menu-bar info-bar text-right d-none d-md-none d-lg-block">
								<span></span>
								<span></span>
								<span></span>
							</div>
							<?php endif; ?>

							<?php if( $siniko_search ): ?>
							<div class="search-icon d-none d-md-none d-lg-block">
								<a href="#" data-toggle="modal" data-target="#search-modal"><i class="dripicons-search"></i></a>
							</div>
							<?php endif; ?>
							<div class="main-menu text-right">
								<nav id="mobile-menu">
									<?php wp_nav_menu( array(
			                            	'theme_location' => 'main-menu',
			                            	'menu_class' => 'siniko-menu',
											'fallback_cb'     => 'Siniko_Navwalker::fallback',
											'walker'          => new Siniko_Navwalker(),
			                            ) );
		                            ?>
								</nav>
							</div>
							<div class="mobile-menu"></div>
						</div>
					</div>
				</div>
			</div>
			<?php siniko_extra_info(); ?>
		</header>
<?php }

/**
* header style 3
*/
function siniko_header_style_3(){
$siniko_show_extra_info 	= get_theme_mod('siniko_show_extra_info');
$siniko_search = get_theme_mod('siniko_search');	
$siniko_cta_switch = get_theme_mod('siniko_cta_switch');
?>
		<header class="header-transparent">
			<div id="sticky-header" class="main-menu-area menu-area-2">
				<div class="container">
					<div class="menu-bg">
						<div class="row">
							<div class="col-xl-3 col-lg-3 d-flex align-items-center">
								<?php siniko_header_logo(); ?>
							</div>
							<div class="col-xl-9 col-lg-9">
								<?php if( $siniko_show_extra_info ): ?>
								<div class="menu-bar info-bar text-right d-none d-md-none d-lg-block">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<?php endif; ?>

								<?php if( $siniko_search ): ?>
								<div class="search-icon d-none d-md-none d-lg-block">
									<a href="#" data-toggle="modal" data-target="#search-modal"><i class="dripicons-search"></i></a>
								</div>
								<?php endif; ?>
								
								<div class="main-menu text-right">
									<nav id="mobile-menu">
										<?php wp_nav_menu( array(
			                            	'theme_location' => 'main-menu',
			                            	'menu_class' => 'siniko-menu',
											'fallback_cb'     => 'Siniko_Navwalker::fallback',
											'walker'          => new Siniko_Navwalker(),
			                            ) );
		                            	?>
									</nav>
								</div>
								<div class="mobile-menu"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php siniko_extra_info(); ?>
			
		</header>	
<?php }



/** 
 * [siniko_extra_info description]
 * @return [type] [description]
 */
function siniko_extra_info(){
	
	$logo 	= get_theme_mod('siniko_extra_info_logo');
	$office_address 	= get_theme_mod('siniko_office_address');
	$phone_number 	= get_theme_mod('siniko_phone_number');
	$email_address 	= get_theme_mod('siniko_email_address');
	$portfolios 	= get_theme_mod('siniko_portfolios');

	$siniko_extra_info_fb_url 			= get_theme_mod('siniko_extra_info_fb_url');
	$siniko_extra_info_twitter_url 		= get_theme_mod('siniko_extra_info_twitter_url');
	$siniko_extra_info_behance_url 		= get_theme_mod('siniko_extra_info_behance_url');
	$siniko_extra_info_instagram_url 	= get_theme_mod('siniko_extra_info_instagram_url');

	
?>
	<div class="extra-info">
		<div class="close-icon">
			<button>
				<i class="far fa-times-circle"></i>
			</button>
		</div>
		<div class="logo-side mb-30">
			<a href="index.html">
				<img src="<?php print esc_url( $logo ); ?>" alt="Logo" />
			</a>
		</div>
		<div class="side-info mb-30">
			<div class="contact-list mb-30">
				<h4><?php print esc_html_e('Office Address', 'siniko'); ?></h4>
				<p><?php print wp_kses_post( $office_address ); ?></p>
			</div>
			<div class="contact-list mb-30">
				<h4><?php print esc_html_e('Phone Number', 'siniko'); ?></h4>
				<?php print wp_kses_post( $phone_number ); ?>
			</div>
			<div class="contact-list mb-30">
				<h4><?php print esc_html_e('Email Address', 'siniko'); ?></h4>
				<?php print wp_kses_post( $email_address ); ?>
			</div>
		</div>

		<?php if( !empty($portfolios) ): ?>
		<div class="instagram">
			<?php 
			$q = new \WP_Query(array(
				'post_type'     => 'portfolio',
			    'posts_per_page'=> 6,
			    'orderby' 		=> 'menu_order',
			   	'order'			=> 'DESC',
			));
			if($q->have_posts()):
				$number = 0;
				while($q->have_posts()): $q->the_post(); 
					$number++;
					$icon_id = get_post_meta(get_the_id(), 'service_icon_thumb_id', true);
					$icon_url = wp_get_attachment_image_src( $icon_id, 'thumbnail' );

					?>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail(array(90, 90)); ?>
					</a>
				<?php 
				endwhile; 
				wp_reset_postdata(); 
			endif; 
			?>
		</div>
		<?php endif; ?>


		<div class="social-icon-right mt-20">
			<a href="<?php print esc_url( $siniko_extra_info_fb_url ); ?>">
				<i class="fab fa-facebook-f"></i>
			</a>
			<a href="<?php print esc_url( $siniko_extra_info_twitter_url ); ?>">
				<i class="fab fa-twitter"></i>
			</a>
			<a href="<?php print esc_url( $siniko_extra_info_behance_url ); ?>">
				<i class="fab fa-google-plus-g"></i>
			</a>
			<a href="<?php print esc_url( $siniko_extra_info_instagram_url ); ?>">
				<i class="fab fa-instagram"></i>
			</a>
		</div>
	</div>

<?php }

// favicon logo
function siniko_favicon_logo_func() {
    $siniko_favicon = get_template_directory_uri() . '/img/logo/favicon.png';
    $siniko_favicon_url = get_theme_mod('favicon_url', $siniko_favicon);
    ?>

    <link rel="shortcut icon" type="image/x-icon" href="<?php print esc_url( $siniko_favicon_url ); ?>">

    <?php   
} 
add_action('wp_head', 'siniko_favicon_logo_func');


/** 
 * [siniko_header_intro description]
 * @return [type] [description]
 */
function siniko_header_intro(){
	$header_phone 	= get_theme_mod('header_phone', '+5 123 456 7899.');
	$header_mail 	= get_theme_mod('header_mail', 'Support@gmail.com.');
?>
	<div class="col-xl-6 col-lg-6 col-md-6 d-flex align-items-center">
		<div class="header-info">
			<p><i class="dripicons-phone"></i> <span> <?php print esc_html($header_phone); ?></span></p>
			<p><i class="dripicons-message"></i> <?php print esc_html($header_mail); ?><span></span></p>
		</div>
	</div>

<?php }

/** 
 * [siniko_header_social_profiles description]
 * @return [type] [description]
 */
function siniko_header_social_profiles() {
	$siniko_topbar_fb_url 			= get_theme_mod('siniko_topbar_fb_url', '#');
	$siniko_topbar_twitter_url 	= get_theme_mod('siniko_topbar_twitter_url', '#');
	$siniko_topbar_google_url 		= get_theme_mod('siniko_topbar_google_url', '#');
	$siniko_topbar_instagram_url 	= get_theme_mod('siniko_topbar_instagram_url', '#');
	?>
		<div class="header-social f-right">
		    <?php 
			if ($siniko_topbar_fb_url != '#'): ?>
			  <a href="<?php print esc_url($siniko_topbar_fb_url); ?>">
			      <i class="fab fa-facebook-f"></i>
			  </a><?php 
			  endif; ?>

		  	<?php 
			if ($siniko_topbar_twitter_url != '#'): ?>
			  <a href="<?php print esc_url($siniko_topbar_twitter_url); ?>">
			      <i class="fab fa-twitter"></i>
			  </a><?php 
			  endif; ?>

		  	<?php 
			if ($siniko_topbar_google_url != '#'): ?>
			  <a href="<?php print esc_url($siniko_topbar_google_url); ?>">
			      <i class="fab fa-google-plus-g"></i>
			  </a>
			  <?php 
			  endif; ?>

		  	<?php 
			if ($siniko_topbar_instagram_url != '#'): ?>
			  <a href="<?php print esc_url($siniko_topbar_instagram_url); ?>">
			      <i class="fab fa-instagram"></i>
			  </a> <?php 
			  endif; ?>
		</div>
<?php 
}

/** 
 * [header_cta description]
 * @return [type] [description]
 */
function header_cta(){
	// phone
	$header_cta_ph_icon 	= get_theme_mod('header_cta_ph_icon', 'ti-email');
	$header_cta_ph_title 	= get_theme_mod('header_cta_ph_title', 'Any Needs');
	$header_cta_ph_no 	= get_theme_mod('header_cta_ph_no', '+000 (123) 456 77');	

	// Support
	$header_cta_sup_icon 	= get_theme_mod('header_cta_sup_icon', 'ti-headphone-alt');
	$header_cta_sup_title 	= get_theme_mod('header_cta_sup_title', 'support');
	$header_cta_sup_no 	= get_theme_mod('header_cta_sup_no', 'infofrial@gmail.com');	

	// address
	$header_cta_add_icon 	= get_theme_mod('header_cta_add_icon', 'ti-map');
	$header_cta_add_title 	= get_theme_mod('header_cta_add_title', 'address');
	$header_cta_add_no 	= get_theme_mod('header_cta_ph_no', 'North Ryde, Australia.');
?>

	<div class="header-cta-wrapper">
		<div class="header-cta-text">
			<span>
				<i class="<?php print esc_attr($header_cta_ph_icon); ?>"></i> <?php print esc_html($header_cta_ph_title); ?>
			</span>
			<p><?php print esc_html($header_cta_ph_no); ?></p>
		</div>

		<div class="header-cta-text">
			<span>
				<i class="<?php print esc_attr($header_cta_sup_icon); ?>"></i> <?php print esc_html($header_cta_sup_title); ?>
			</span>
			<p><?php print esc_html($header_cta_sup_no); ?></p>
		</div>	

		<div class="header-cta-text d-md-none d-lg-block">
			<span>
				<i class="<?php print esc_attr($header_cta_add_icon); ?>"></i> <?php print esc_html($header_cta_add_title); ?>
			</span>
			<p><?php print esc_html($header_cta_add_no); ?></p>
		</div>

	</div>

<?php }

/** 
 * [siniko_header_free_analysis description]
 * @return [type] [description]
 */
function siniko_header_free_analysis() {
	$siniko_free_analysis 		= get_theme_mod('siniko_free_analysis');
	$siniko_free_analysis_text 	= get_theme_mod('siniko_free_analysis_text');
	$siniko_free_analysis_link 	= get_theme_mod('siniko_free_analysis_link');

	if($siniko_free_analysis): ?>
	    <div class="header-btn f-right">
	        <a href="<?php print esc_url($siniko_free_analysis_link); ?>"><?php print esc_html($siniko_free_analysis_text); ?></a>
	    </div>
	<?php endif; ?>

<?php 
} 

// header logo
function siniko_header_logo() {
	?>
	    <div class="logo">
	        <?php 
	        $siniko_logo_on = get_post_meta(get_the_ID(), 'siniko_enable_sec_logo', true);
	        $siniko_logo = get_template_directory_uri() . '/img/logo/logo.png';
	        $siniko_logo_white = get_template_directory_uri() . '/img/logo/logo-white.png';

			$siniko_retina_logo = get_template_directory_uri().'/img/logo/logo@2x.png';
		    $siniko_retina_logo_white = get_template_directory_uri().'/img/logo/logo-white@2x.png';

			$siniko_retina_logo  = get_theme_mod('retina_logo',$siniko_retina_logo);
		    $siniko_retina_logo_white  = get_theme_mod('retina_secondary_logo',$siniko_retina_logo_white);

	        $siniko_site_logo = get_theme_mod('logo', $siniko_logo);
	        $siniko_secondary_logo = get_theme_mod('seconday_logo', $siniko_logo_white);
	        ?>
	         
	         <?php
	        if( has_custom_logo()){
	        	the_custom_logo();
	        }else{
	        	
				if($siniko_logo_on === 'on') { ?>

                    <a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($siniko_site_logo); ?>" alt="<?php print esc_attr('logo','siniko'); ?>" />
					</a>
					<a class="retina-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($siniko_retina_logo); ?>" alt="<?php print esc_attr('logo','siniko'); ?>" />
                    </a>
	        	<?php 
	            }
	            else{ ?>
					<a class="standard-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($siniko_secondary_logo); ?>" alt="<?php print esc_attr('logo','siniko'); ?>" />
					</a>
					<a class="retina-logo" href="<?php print esc_url(home_url('/')); ?>">
                        <img src="<?php print esc_url($siniko_retina_logo_white); ?>" alt="<?php print esc_attr('logo','siniko'); ?>" />
                    </a>
	        	<?php 
	        	}
			}	
			?>
	    </div>
	<?php 
} 



/**
*
* siniko footer
*/
add_action('siniko_footer_style', 'siniko_check_footer', 10);

function siniko_check_footer() {
	$siniko_footer_style = get_post_meta( get_the_ID(), 'siniko_choice_footer_style', true );	
	$siniko_default_footer_style = get_theme_mod('choose_default_footer', 'footer-style-1' );
	
	if($siniko_footer_style == 'footer-style-1'){
		siniko_footer_default();
	}
	elseif( $siniko_footer_style == 'footer-style-2' ) {
		siniko_footer_style_1();
	}
/**/	elseif( $siniko_footer_style == 'footer-style-3' ) {
		siniko_footer_style_2();
	}
	elseif( $siniko_footer_style == 'footer-style-4' ) {
        siniko_footer_style_3();
    }
	else{
		/** default footer style **/
		if($siniko_default_footer_style == 'footer-style-1'){
			siniko_footer_default();
		}elseif($siniko_default_footer_style == 'footer-style-2'){
			siniko_footer_style_1();
		}elseif($siniko_default_footer_style == 'footer-style-3'){
			siniko_footer_style_2();
		}elseif($siniko_default_footer_style == 'footer-style-4'){
            siniko_footer_style_3();
        }
	}
}

/**
* footer  style 1
*/
function siniko_footer_style_1() {
$siniko_footer_bg_url = get_post_meta( get_the_ID(), 'siniko_footer_bg', true );
?>

    <footer class="footer-style-1">
    	<?php if ( is_active_sidebar('footer-widget-style-one') ): ?>
		<div class="footer-area pt-60">
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar('footer-widget-style-one'); ?>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="footer-bottom pb-20">
			<div class="container">
				<div class="footer-border">
					<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <?php dynamic_sidebar('footer-menu'); ?>
                        </div>
						<div class="col-xl-6 col-lg-6 col-md-12 text-lg-right">
							<div class="copyright">
								<p><i class="far fa-copyright"></i> <?php print siniko_copyright_text(); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- footer-area-end -->
	</footer>

<?php 
}

/**
* footer  style 2
*/
function siniko_footer_style_2() {
$siniko_footer_bg_url = get_post_meta( get_the_ID(), 'siniko_footer_bg', true );
?>
	<footer>
		<div class="footer-area footer-style-2 footer-white primary-bg pt-60 ">
			<?php if ( is_active_sidebar('footer-widget-style-one') ): ?>
			<div class="container">
				<div class="row">
					<?php dynamic_sidebar('footer-widget-style-one'); ?>
				</div>
			</div>
			<?php endif; ?>

			<div class="footer-bottom pb-20">
				<div class="container">
					<div class="footer-border">
						<div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <?php dynamic_sidebar('footer-menu'); ?>
                            </div>
							<div class="col-xl-6 col-lg-6 col-md-12 text-lg-right">
								<div class="copyright">
									<p><i class="far fa-copyright"></i> <?php print siniko_copyright_text(); ?></p>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
<?php 
}

/**
 * footer  style 3
 */
function siniko_footer_style_3(){
    $siniko_footer_bg_url = get_theme_mod('siniko_footer_bg_url');
    $siniko_sidebar_active = is_active_sidebar( 'footer-top-widget' ) ? 'pt-100' : '' ;
    $siniko_copyright_active = is_active_sidebar( 'footer-top-widget' ) ? 'pt-55' : '' ;
    $copyright_column = is_active_sidebar( 'footer-menu' ) ? '6 text-lg-right' : '12 text-center' ;
    ?>
    <footer class="footer-style-3">
        <div class="footer-area  <?php print esc_attr($siniko_sidebar_active); ?>">
            <?php if ( is_active_sidebar('footer-widget-left') || is_active_sidebar('footer-widget-center') || is_active_sidebar('footer-widget-right')): ?>
                <div class="container">
                    <?php /*dynamic_sidebar('footer-top-widget'); */?>



                    <div class="row">
                        <div class="col-xl-5 col-lg-5 col-md-6">
                            <?php dynamic_sidebar('footer-widget-left'); ?>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-6">
                            <?php dynamic_sidebar('footer-widget-center'); ?>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6">
                            <?php dynamic_sidebar('footer-widget-right'); ?>
                        </div>
                    </div>


                    <!--an-->

                    <?php dynamic_sidebar('footer-top-widget'); ?>

                    <!--an-->

                </div>
            <?php endif; ?>
            <div class="footer-bottom  pb-20">
                <div class="container">
                    <div class="footer-border">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-12">
                                <?php dynamic_sidebar('footer-menu'); ?>
                            </div>
                            <div class="col-xl-<?php print esc_attr($copyright_column); ?> col-lg-<?php print esc_attr($copyright_column); ?> col-md-12">
                                <div class="copyright">
                                    <p><i class="far fa-copyright"></i> <?php print siniko_copyright_text(); ?></p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <?php
}

/**
* footer default
*/
function siniko_footer_default() {
$siniko_footer_bg_url = get_theme_mod('siniko_footer_bg_url');
$siniko_sidebar_active = is_active_sidebar( 'footer-top-widget' ) ? 'pt-100' : '' ;
$siniko_copyright_active = is_active_sidebar( 'footer-top-widget' ) ? 'pt-55' : '' ;
$copyright_column = is_active_sidebar( 'footer-menu' ) ? '6 text-lg-right' : '12 text-center' ;
?>
<footer>
	<div class="footer-area default-footer footer-white footer-black-bg <?php print esc_attr($siniko_sidebar_active); ?>" style="background-image:url(<?php print esc_url( $siniko_footer_bg_url ); ?>)">
		<?php if ( is_active_sidebar('footer-widget-left') || is_active_sidebar('footer-widget-center') || is_active_sidebar('footer-widget-right')): ?>
			<div class="container">




				<div class="row">
					<div class="col-xl-5 col-lg-5 col-md-6">
						<?php dynamic_sidebar('footer-widget-left'); ?>
					</div>
					<div class="col-xl-4 col-lg-4 col-md-6">
						<?php dynamic_sidebar('footer-widget-center'); ?>
					</div>
					<div class="col-xl-3 col-lg-3 col-md-6">
						<?php dynamic_sidebar('footer-widget-right'); ?>
					</div>	
				</div>




                <!--an-->
                <?php dynamic_sidebar('footer-top-widget'); ?>
                <!--an-->

			</div>
		<?php endif; ?>
		<div class="footer-bottom  pb-20">
			<div class="container">
				<div class="footer-border">
					<div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-12">
                            <?php dynamic_sidebar('footer-menu'); ?>
                        </div>
						<div class="col-xl-<?php print esc_attr($copyright_column); ?> col-lg-<?php print esc_attr($copyright_column); ?> col-md-12 ">
							<div class="copyright">
								<p><i class="far fa-copyright"></i> <?php print siniko_copyright_text(); ?></p>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<?php 
}


/** 
 * [siniko_header_social_profiles description]
 * @return [type] [description]
 */

function siniko_footer_wrapper() { 
	$siniko_footer_text = get_theme_mod('siniko_footer_text'); 
	if( $siniko_footer_text ) { ?>

    <div class="footer-area blue-bg pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                    <div class="footer-wrapper text-center">
                       	<?php do_action('siniko_footer'); ?>
                    </div>
                </div>
            </div>
        </div>
	  </div>

  <?php
  }
}

add_action('siniko_footer_wrapper','siniko_footer_wrapper',20);

/** 
 * [siniko_slider_social]
 */
function siniko_slider_social() {
	$siniko_slider_fb_url 			= get_theme_mod('siniko_slider_fb_url', '#');
	$siniko_slider_twitter_url 	= get_theme_mod('siniko_slider_twitter_url', '#');
	$siniko_slider_behance_url 	= get_theme_mod('siniko_slider_behance_url', '#');
	?>
	<div class="sliders-icon">
	    <?php 
		if ($siniko_slider_fb_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_slider_fb_url); ?>">
		      <i class="fab fa-facebook-f"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_slider_twitter_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_slider_twitter_url); ?>">
		      <i class="fab fa-twitter"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_slider_behance_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_slider_behance_url); ?>">
		      <i class="fab fa-behance-square"></i>
		  </a><?php 
		  endif; ?>

	</div>
<?php 
}

add_action('siniko_slider','siniko_slider_social',20);

/** 
 * [siniko_footer_logo]
 */
function siniko_footer_logo(){
	$siniko_logo = get_theme_mod('siniko_footer_logo');

	if($siniko_logo) {
		print '<div class="footer-logo"><a href="/"><img src="'.esc_url($siniko_logo).'" alt="'.esc_attr__('img','siniko').'"></a></div>';
	}
}
add_action('siniko_footer','siniko_footer_logo',10);

function siniko_footer_text(){
	$siniko_footer_text = get_theme_mod('siniko_footer_text');

	if($siniko_footer_text){
		print '<div class="footer-text"><p>'. esc_html($siniko_footer_text) .'</p></div>';
	}
}
add_action('siniko_footer','siniko_footer_text',10);

/** 
 * [siniko_header_social_profiles description]
 * @return [type] [description]
 */
function siniko_footer_social() {
	$siniko_footer_fb_url 			= get_theme_mod('siniko_footer_fb_url', '#');
	$siniko_footer_twitter_url 	= get_theme_mod('siniko_footer_twitter_url', '#');
	$siniko_footer_behance_url 	= get_theme_mod('siniko_footer_behance_url', '#');
	$siniko_footer_google_url 		= get_theme_mod('siniko_footer_google_url', '#');
	$siniko_footer_instagram_url 	= get_theme_mod('siniko_footer_instagram_url', '#');
	?>
	<div class="footer-icon">
	    <?php 
		if ($siniko_footer_fb_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_footer_fb_url); ?>">
		      <i class="fab fa-facebook-f"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_footer_twitter_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_footer_twitter_url); ?>">
		      <i class="fab fa-twitter"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_footer_behance_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_footer_behance_url); ?>">
		      <i class="fab fa-behance-square"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_footer_google_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_footer_google_url); ?>">
		      <i class="fab fa-google-plus-g"></i>
		  </a>
		  <?php 
		  endif; ?>

	  	<?php 
		if ($siniko_footer_instagram_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_footer_instagram_url); ?>">
		      <i class="fab fa-instagram"></i>
		  </a> <?php 
		  endif; ?>
	</div>
<?php 
}

add_action('siniko_footer','siniko_footer_social',20);

function siniko_copyright_text(){
	return get_theme_mod('siniko_copyright', esc_html__('Copyright ©2019 Enventer. All Rights Reserved','siniko'));
}


function siniko_side_info(){
	return get_theme_mod('side_info', esc_html__('Header Sidebar Info','siniko'));
}
function siniko_sidebar_logo(){
	$siniko_logo = get_theme_mod('siniko_sidebar_logo',get_template_directory_uri() . '/img/logo/footer.png');
	return '<div class="logo-side mb-30"><a href="/"><img src="'.esc_url($siniko_logo).'" alt="'.esc_attr__('img','siniko').'"></a></div>';
}

/** 
 * [siniko_header_social_profiles description]
 * @return [type] [description]
 */
function siniko_side_social() {
	$siniko_side_info_fb_url 			= get_theme_mod('siniko_side_info_fb_url', '#');
	$siniko_side_info_twitter_url 	= get_theme_mod('siniko_side_info_twitter_url', '#');
	$siniko_side_info_behance_url 	= get_theme_mod('siniko_side_info_behance_url', '#');
	$siniko_side_info_google_url 		= get_theme_mod('siniko_side_info_google_url', '#');
	$siniko_side_info_instagram_url 	= get_theme_mod('siniko_side_info_instagram_url', '#');
	?>
	<div class="social-icon-right mt-20">
	    <?php 
		if ($siniko_side_info_fb_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_side_info_fb_url); ?>">
		      <i class="fab fa-facebook-f"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_side_info_twitter_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_side_info_twitter_url); ?>">
		      <i class="fab fa-twitter"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_side_info_behance_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_side_info_behance_url); ?>">
		      <i class="fab fa-behance-square"></i>
		  </a><?php 
		  endif; ?>

	  	<?php 
		if ($siniko_side_info_google_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_side_info_google_url); ?>">
		      <i class="fab fa-google-plus-g"></i>
		  </a>
		  <?php 
		  endif; ?>

	  	<?php 
		if ($siniko_side_info_instagram_url != '#'): ?>
		  <a href="<?php print esc_url($siniko_side_info_instagram_url); ?>">
		      <i class="fab fa-instagram"></i>
		  </a> <?php 
		  endif; ?>
	</div>
<?php 
}


// breadcrumb-min-height
function siniko_breadcrumb_min_height_func(){
   	$siniko_breadcrumb_top = get_theme_mod('siniko_breadcrumb_top', '320px');
	$siniko_breadcrumb_bottom = get_theme_mod('siniko_breadcrumb_bottom', '200px');

    wp_enqueue_style( 'siniko-breadcrumb-min-height', SINIKO_THEME_CSS_DIR . '/color/siniko-breadcrumb-min-height.css', array());
    if($siniko_breadcrumb_top OR $siniko_breadcrumb_bottom){
        $custom_css = '';
        $custom_css .= ".breadcrumb-pt-pb{ 
        					padding-top: ".$siniko_breadcrumb_top."; 
        					padding-bottom: ".$siniko_breadcrumb_bottom."
        				}";

        wp_add_inline_style('siniko-breadcrumb-min-height',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'siniko_breadcrumb_min_height_func');



/** 
 * [siniko_breadcrumb_func description]
 * @return [type] [description]
 */
function siniko_breadcrumb_func() { 
	$siniko_invisible_breadcrumb = get_post_meta( get_the_ID(), 'siniko_invisible_breadcrumb', true );
	if( !$siniko_invisible_breadcrumb ) {
		$bg_img = get_theme_mod('breadcrumb_bg_img');

		$siniko_blog_breadcrumb = get_theme_mod('siniko_blog_breadcrumb', '');
		if ( is_front_page() && is_home() ) { ?>
		<div class="page-title-area breadcrumb-bg  breadcrumb-area blue-bg pt-17 pb-160  front-home" data-background="<?php print esc_attr($bg_img);?>">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="page-title page-title-white text-center">
							<h2><?php print esc_html__('Blog','siniko') ?> </h2>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php	
		} elseif ( is_front_page()){?>
		<div class="breadcrumb-area breadcrumb-bg only-front-page">
		</div>
		<?php
		} elseif ( is_home()){ ?>


			<div class="page-title-area breadcrumb-bg  breadcrumb-area blue-bg breadcrumb-spacing" data-background="<?php print esc_attr($bg_img);?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="page-title page-title-white text-center">
								<?php 
								if ( is_single() && 'post' == get_post_type() ) { 
									if ( $siniko_blog_breadcrumb == '' ) { ?>
										<h2><?php wp_title(''); ?></h2>
									<?php 
									}
									else { ?>
										<h2> <?php print esc_html($siniko_blog_breadcrumb);?></h2>
									<?php 
									} ?>
									
									<?php 
								}
								else { ?>
									<h2><?php wp_title(''); ?></h2>
								<?php 
								} ?>
								<div class="breadcrumb-list">
									<ul>
										<?php siniko_breadcrumbs(); ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	    <?php
		}
		elseif ( is_single() && 'product' == get_post_type() ) { ?>

		<div class="page-title-area breadcrumb-bg  breadcrumb-area blue-bg breadcrumb-spacing" style="background-image:url(<?php print esc_attr($bg_img);?>)">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<div class="page-title page-title-white text-center">
							<?php 
								if ( is_single() && 'product' == get_post_type() ) { 
									if ( $siniko_blog_breadcrumb == '' ) { ?>
										<h2><?php print esc_html__('Product Details', 'siniko'); ?></h2>
									<?php 
									}
									else { ?>
										<h1> <?php print esc_html($siniko_blog_breadcrumb);?></h1>
									<?php 
									} ?>
									
									<?php 
								}
								else { ?>
									<h1><?php wp_title(''); ?></h1>
								<?php 
							} ?>
							<div class="breadcrumb-list">
								<ul>
									<?php siniko_breadcrumbs(); ?>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php
        }
        elseif ( is_single() && 'bdevs-service' == get_post_type() ) { ?>

        <div class="page-title-area breadcrumb-bg  breadcrumb-area blue-bg breadcrumb-spacing" style="background-image:url(<?php print esc_attr($bg_img);?>)">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="page-title page-title-white text-center">
                            <?php 
                                if ( is_single() && 'bdevs-service' == get_post_type() ) { 
                                    if ( $siniko_blog_breadcrumb == '' ) { ?>
                                        <h2><?php print esc_html__('Services Details', 'siniko'); ?></h2>
                                    <?php 
                                    }
                                    else { ?>
                                        <h1> <?php print esc_html($siniko_blog_breadcrumb);?></h1>
                                    <?php 
                                    } ?>
                                    
                                    <?php 
                                }
                                else { ?>
                                    <h1><?php wp_title(''); ?></h1>
                                <?php 
                            } ?>
							<div class="breadcrumb-list">
								<ul>
									<?php siniko_breadcrumbs(); ?>
								</ul>
							</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<?php
		}
		else { ?>

			<div class="page-title-area breadcrumb-bg  breadcrumb-area blue-bg breadcrumb-spacing" data-background="<?php print esc_attr($bg_img);?>">
				<div class="container">
					<div class="row">
						<div class="col-xl-12">
							<div class="page-title page-title-white text-center">
								<?php 
								if ( is_single() && 'post' == get_post_type() ) { 
									if ( $siniko_blog_breadcrumb == '' ) { ?>
                                        <h2><?php wp_title(''); ?></h2>
                                    <?php 
                                    }
									else { ?>
										<h2> <?php print esc_html($siniko_blog_breadcrumb);?></h2>
									<?php 
									} ?>
									
									<?php 
								}
								else { ?>
									<h2><?php wp_title(''); ?></h2>
								<?php 
								} ?>
								<div class="breadcrumb-list">
									<ul>
										<?php siniko_breadcrumbs(); ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
		}		
	}
}
add_action('siniko_before_main_content', 'siniko_breadcrumb_func');

// siniko_search_form
function siniko_search_form() { ?>

		<!-- Modal Search -->
        <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="get" action="<?php print esc_url(home_url('/')); ?>">
                        <input type="search" name="s" value="<?php print esc_attr( get_search_query() ) ?>" placeholder="<?php print esc_attr__('Search here...', 'siniko'); ?>">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>

	<?php 
}

add_action('siniko_before_main_content', 'siniko_search_form');

if(!function_exists('siniko_breadcrumbs')) {

	function _siniko_home_callback($home) {
		return $home;
	}

	function _siniko_breadcrumbs_callback($breadcrumbs) {
		return $breadcrumbs;
	}

	function siniko_breadcrumbs() {
		global $post;
		$home = '<li class="breadcrumb-item"><a href="'.esc_url(home_url('/')).'" title="'.esc_attr__('Home','siniko').'">'.esc_html__('Home','siniko').'</a></li>';
		$showCurrent = 1;				
		$homeLink = esc_url(home_url('/'));
		if ( is_front_page() ) { return; }	// don't display breadcrumbs on the homepage (yet)

		print _siniko_home_callback($home);

		if ( is_category() ) {
			// category section
			$thisCat = get_category(get_query_var('cat'), false);
			if (!empty($thisCat->parent)) print get_category_parents($thisCat->parent, TRUE, ' ' . '/' . ' ');
			print '<li class=" active">'.  esc_html__('Archive for category','siniko').' "' . single_cat_title('', false) . '"' . '</li>';
		} 
		elseif ( is_search() ) {
			// search section
			print '<li class=" active">' .  esc_html__('Search results for','siniko').' "' . get_search_query() . '"' .'</li>';
		} 
		elseif ( is_day() ) {
			print '<li class=""><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a></li>';
			print '<li class="breadcrumb-item"><a href="' . get_month_link(get_the_time('Y'),get_the_time('m')) . '">' . get_the_time('F') . '</a> </li>';
			print '<li class="">' . get_the_time('d') .'</li>';
		} 
		elseif ( is_month() ) {
			// monthly archive
			print '<li class=""><a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> </li>';
			print '<li class=" active">' . get_the_time('F') .'</li>';
		} 
		elseif ( is_year() ) {
			// yearly archive
			print '<li class="active">'. get_the_time('Y') .'</li>';
		} 
		elseif ( is_single() && !is_attachment() ) {
			// single post or page
			if ( get_post_type() != 'post' ) {
				$post_type = get_post_type_object(get_post_type());
				$slug = $post_type->rewrite;
				print '<li class=""><a href="' . $homeLink . '/?post_type=' . $slug['slug'] . '">' . $post_type->labels->singular_name . '</a></li>';
				if ($showCurrent) print '<li class="active">'.  wp_trim_words(get_the_title(), 4, '...') .'</li>';
			} 
			else {
				$cat = get_the_category(); if (isset($cat[0])) {$cat = $cat[0];} else {$cat = false;}
				if ($cat) {$cats = get_category_parents($cat, TRUE, ' ' .' ' . ' ');} else {$cats=false;}
				if (!$showCurrent && $cats) $cats = preg_replace("#^(.+)\s\s$#", "$1", $cats);
				print '<li class="">'.$cats.'</li>';
				if ($showCurrent) print '<li class="active">'.  wp_trim_words(get_the_title(), 4, '...') .'</li>';
			}
		} 
		elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
			// some other single item
			$post_type = get_post_type_object(get_post_type());
			print '<li class="breadcrumb-item">' . $post_type->labels->singular_name .'<li>';
		} 
		elseif ( is_attachment() ) {
			// attachment section
			$parent = get_post($post->post_parent);
			$cat = get_the_category($parent->ID); if (isset($cat[0])) {$cat = $cat[0];} else {$cat=false;}
			if ($cat) print get_category_parents($cat, TRUE, ' ' . ' ' . ' ');
			print '<li class=""><a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a></li>';
			if ($showCurrent) print  '<li class="active">'.  wp_trim_words(get_the_title(), 4, '...') .'</li>';
		} 
		elseif ( is_page() && !$post->post_parent ) {

			// parent page
			if ($showCurrent) 
				print '<li class="active"><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
		} 
		elseif ( is_page() && $post->post_parent ) {
			// child page
			$parent_id  = $post->post_parent;
			$breadcrumbs = array();

			while ($parent_id) {
				$page = get_page($parent_id);
				$breadcrumbs[] = '<li class=""><a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a></li>';
				$parent_id  = $page->post_parent;
			}
			$breadcrumbs = array_reverse($breadcrumbs);
			for ($i = 0; $i < count($breadcrumbs); $i++) {
				print _siniko_breadcrumbs_callback($breadcrumbs[$i]);
				if ($i != count($breadcrumbs)-1);
			}
			if ($showCurrent) print '<li class="active">'.  wp_trim_words(get_the_title(), 4, '...') .'</li>';
		} 
		elseif ( is_tag() ) {
			// tags archive
			print '<li class="">' .  esc_html__('Posts tagged','siniko').' "' . single_tag_title('', false) . '"' . '</li>';
		} 
		elseif ( is_author() ) {
			// author archive 
			global $author;
			$userdata = get_userdata($author);
			print '<li class="">' .  esc_html__('Articles posted by','siniko'). ' ' . $userdata->display_name . '</li>';
		} 
		elseif ( is_404() ) {
			// 404
			print '<li class="active">' .  esc_html__('Not Found','siniko') .'</li>';
		}
	  
		if ( get_query_var('paged') ) {
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) print '<li class=""> (';
				print  '<li class="active">'.esc_html__('Page','siniko') . ' ' . get_query_var('paged').'</li>';
			if ( is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author() ) print ')</li>';
		}
	}
}

/**
*
* pagination
*/
if( !function_exists('siniko_pagination') ) {

	function _siniko_pagi_callback($home) {
		return $home;
	}

	//page navegation
	function siniko_pagination( $prev, $next, $pages, $args ) {
		global $wp_query, $wp_rewrite;
		$menu = '';
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		
		if( $pages=='' ){
			global $wp_query;
			$pages = $wp_query->max_num_pages;
			
			if(!$pages)
				$pages = 1;
		}

		$pagination = array(
			'base' => add_query_arg('paged','%#%'),
			'format' => '',
			'total' => $pages,
			'current' => $current,
			'prev_text' => $prev,
			'next_text' => $next,
			'type' => 'array'
		);

		//rewrite permalinks
		if( $wp_rewrite->using_permalinks() )
			$pagination['base'] = user_trailingslashit( trailingslashit( remove_query_arg( 's', get_pagenum_link( 1 ) ) ) . 'page/%#%/', 'paged' );

		if( !empty($wp_query->query_vars['s']) )
			$pagination['add_args'] = array( 's' => get_query_var( 's' ) );

		$pagi = '';
		if(paginate_links( $pagination )!=''){
			$paginations = paginate_links( $pagination );
			$pagi .= '<ul>';
						foreach ($paginations as $key => $pg) {
							$pagi.= '<li>'.$pg.'</li>';
						}
			$pagi .= '</ul>';
		}

		print _siniko_home_callback($pagi);
	}
}



// theme color
function siniko_custom_color(){
    $color_code = get_theme_mod( 'siniko_color_option','#22759e');
    wp_enqueue_style( 'siniko-custom', SINIKO_THEME_CSS_DIR . '/color/siniko-custom.css', array());
    if($color_code!=''){
        $custom_css = '';
        $custom_css .= ".main-menu nav ul > li > a::before,.main-menu nav > ul > li:hover > .sub-menu li > a:hover,.menu-bar span,#scrollUp:hover,.team-marker,.newsletter-form button.btn:hover,.team-social-icon a:hover,.cta-text a.btn:hover,.contact-btn .btn,.contact i,.pricing2-box .pricing-box-button a.btn:hover,.social-profile a:hover { background: ".$color_code."}";

        $custom_css .= ".search-icon a:hover,.team-icon a:hover,.price-count span,.blog-meta > span i,.blog-standard .blog-meta > span a:hover,.widget-social-icon a,.avatar-name span { color: ".$color_code."}";

        $custom_css .= ".team-wrapper{ border-color: ".$color_code."}";
        wp_add_inline_style('siniko-custom',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'siniko_custom_color');

// sec color
function siniko_sec_custom_color(){
    $color_code = get_theme_mod( 'siniko_sec_color_option','#338c8f');
    wp_enqueue_style( 'siniko-sec-custom', SINIKO_THEME_CSS_DIR . '/color/siniko-sec-custom.css', array());
    if($color_code!=''){
        $custom_css = '';
        $custom_css .= " .slider-content span::before,.slider-content span::after,.features-text.active::before,
.features-text.active::after,#scrollUp,.promo-text h1::before,.promo-text h1::after,.newsletter-form button.btn,.testimonial-active .owl-dot.active,.blog-text h4::before,.footer-icon a,.team-social-icon a,.footer-white .footer-icon a:hover,.header-btn a,.slider-active button:hover,.awesome-features-wrapper::before,.awesome-features-wrapper::after,.promos-icon i,.paginations ul li:hover a, .paginations ul li .current,.blog-post-tag > a:hover,.comments-text > a:hover,.portfolio-filter button::before{ background: ".$color_code."}";

        $custom_css .= ".slider-content span,.features-text.active h2,.services-box:hover .services-box-text a:hover, .services-box.active .services-box-text a:hover,.section-title span,.price-count h1 span.usd,.testimonial-text span,.testimonial-img::after,.blog-text h4 > a:hover,.blog-text > a:hover,.footer-wrapper li:hover a,.footer-wrapper li:hover a,.contact-address-icon i,.footer-bottom-link li a:hover,.video-icon-view a,.price-box-count h1 span.usd,.footer-white .footer-wrapper li a:hover,.footer-white .footer-wrapper li a:hover,.footer-white .footer-bottom-link li a:hover,.widget-social-icon a:hover,.widget li a:hover,.portfolio-caption h4 a:hover,.portfolio-filter button:hover, .portfolio-filter button.active{ color: ".$color_code."}";

        $custom_css .= ".testimonial-img::after,.blog-post-tag > a:hover,.comments-text > a:hover{ border-color: ".$color_code."}";
        wp_add_inline_style('siniko-sec-custom',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'siniko_sec_custom_color');

// theme btn color
function siniko_theme_btn_color(){
    $color_code = get_theme_mod( 'siniko_theme_btn_color','#22759e');
    wp_enqueue_style( 'siniko-theme-btn', SINIKO_THEME_CSS_DIR . '/color/siniko-theme-btn.css', array());
    if($color_code!=''){
        $custom_css = '';
        $custom_css .= ".btn,.btn.btn-yellow:hover{ background: ".$color_code."}";

        $custom_css .= " { color: ".$color_code."}";

        $custom_css .= " { border-color: ".$color_code."}";
        wp_add_inline_style('siniko-theme-btn',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'siniko_theme_btn_color');

// theme btn sec color
function siniko_theme_btn_sec_color(){
    $color_code = get_theme_mod( 'siniko_btn_sec_color','#46a4d4');
    wp_enqueue_style( 'siniko-sec-btn', SINIKO_THEME_CSS_DIR . '/color/siniko-sec-btn.css', array());
    if($color_code!=''){
        $custom_css = '';
        $custom_css .= ".btn:hover,.btn-yellow{ background: ".$color_code."}";

        $custom_css .= ".service-box .service-link:hover { color: ".$color_code."}";

        $custom_css .= " { border-color: ".$color_code."}";
        wp_add_inline_style('siniko-sec-btn',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'siniko_theme_btn_sec_color');


// header top bg color
function siniko_breadcrumb_bg_color(){
    $color_code = get_theme_mod( 'siniko_breadcrumb_bg_color','#0D6BFF');
    wp_enqueue_style( 'siniko-breadcrumb-bg', SINIKO_THEME_CSS_DIR . '/color/siniko-breadcrumb-bg.css', array());
    if($color_code!=''){
        $custom_css = '';
        $custom_css .= ".breadcrumb-bg.blue-bg{ background-color: ".$color_code."}";

        wp_add_inline_style('siniko-breadcrumb-bg',$custom_css);
    }
}
add_action('wp_enqueue_scripts', 'siniko_breadcrumb_bg_color');
