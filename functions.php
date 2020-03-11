<?php
/**
 * siniko functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package siniko
 */

if ( ! function_exists( 'siniko_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function siniko_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on siniko, use a find and replace
		 * to change 'siniko' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'siniko', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'main-menu' => esc_html__( 'Main Menu', 'siniko' )
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'siniko_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Enable custom header
		 */
		add_theme_support('custom-header');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );

		/**
		 * Enable suporrt for Post Formats
		 *
		 * see: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support( 'post-formats', array(
			'aside',
			'gallery',
			'link',
			'image',
			'quote',
			'status',
			'video',
			'audio',
			'chat',
		) );

		// Add theme support for selective refresh for widgets.
		//add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		add_image_size( 'siniko-center-thumb', 770, 510, array('center','center') );
		add_image_size( 'siniko-latest-blog-2-column', 500, 556, array('center','center') );
		add_image_size( 'siniko-latest-blog-grid', 650,525, array('center','center') );
		add_image_size( 'siniko-gallery-thumb', 480, 500, array('center','center') );
		add_image_size( 'siniko-serice-3-col', 600, 455,array('center','center') );
		add_image_size( 'siniko-service-thumb', 700, 760,array('center','center') );
		add_image_size( 'siniko-team-thumb', 450, 530,array('center','center') );

	}
endif;
add_action( 'after_setup_theme', 'siniko_setup' );


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function siniko_pingback_header() {
	if ( is_singular() && pings_open() ) {
		print '<link rel="pingback" href="'. esc_url( get_bloginfo( 'pingback_url' ) ). '">';
	}
}
add_action( 'wp_head', 'siniko_pingback_header' );





/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function siniko_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'siniko_content_width', 640 );
}
add_action( 'after_setup_theme', 'siniko_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function siniko_widgets_init() {

	/**
	* blog sidebar
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'siniko' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add Blog Widgets', 'siniko' ),
		'before_widget' => '<div id="%1$s" class="widget mb-40 %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="widget-title-box mb-30">
								<span class="animate-border"></span>
								<h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );


	/**
	* Footer Widget Style One
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Style One', 'siniko' ),
		'id'            => 'footer-widget-style-one',
		'description'   => esc_html__( 'Add widgets here.', 'siniko' ),
		'before_widget' => '<div class="col-xl-3 col-lg-3 col-md-6">
						<div id="%1$s" class="footer-wrapper mb-30 %2$s">
		',
		'after_widget'  => '</div></div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );


	/**
	* Footer Widget Default Left Section
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget : Left', 'siniko' ),
		'id'            => 'footer-widget-left',
		'description'   => esc_html__( 'Footer Widget', 'siniko' ),
		'before_widget' => '<div id="%1$s" class="%2$s footer-wrapper mb-50 pr-50">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );	

	/**
	* Footer Widget Default Center Section
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget: Center', 'siniko' ),
		'id'            => 'footer-widget-center',
		'description'   => esc_html__( 'Footer Widget : Center', 'siniko' ),
		'before_widget' => '<div id="%1$s" class="%2$s footer-wrapper pl-50 mb-50">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	/**
	* Footer Widget Default Right Section
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Widget : Right', 'siniko' ),
		'id'            => 'footer-widget-right',
		'description'   => esc_html__( 'Footer Widget : Right', 'siniko' ),
		'before_widget' => '<div class="footer-wrapper mb-50">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="footer-title">',
		'after_title'   => '</h3>',
	) );

	/**
	* Footer Top Widget
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Top', 'siniko' ),
		'id'            => 'footer-top-widget',
		'description'   => esc_html__( 'Footer Top Widget', 'siniko' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );

	/**
	* Footer Menu
	*/
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Menu', 'siniko' ),
		'id'            => 'footer-menu',
		'description'   => esc_html__( 'Add Footer Menu', 'siniko' ),
		'before_widget' => '<nav class="footer-bottom-link">',
		'after_widget'  => '</nav>',
		'before_title'  => '<h3 class="footer-title d-none">',
		'after_title'   => '</h3>',
	) );



	/**
	* Service Widget
	*/
	register_sidebar(
		array(
			'name' 			=> esc_html__( 'Services Sidebar', 'siniko' ),
			'id' 			=> 'services-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown on Service Details Sidebar.', 'siniko' ),
			'before_title' 	=> '<h3>',
			'after_title' 	=> '</h3>',
			'before_widget' => '<div class="services-sidebar mb-50  %2$s">',
			'after_widget' 	=> '</div>',
		)
	);

	/**
	* Portfolio Widget
	*/
	register_sidebar(
		array(
			'name' 			=> esc_html__( 'Portfolio Sidebar', 'siniko' ),
			'id' 			=> 'portfolio-sidebar',
			'description' 	=> esc_html__( 'Widgets in this area will be shown on Portfolio Details Sidebar.', 'siniko' ),
			'before_title' 	=> '<h3>',
			'after_title' 	=> '</h3>',
			'before_widget' => '<div class="portfolio-sidebar  %2$s">',
			'after_widget' 	=> '</div>',
		)
	);

	

}
add_action( 'widgets_init', 'siniko_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
define('SINIKO_THEME_DIR', get_template_directory() );
define('SINIKO_THEME_URI', get_template_directory_uri());
define('SINIKO_THEME_CSS_DIR', SINIKO_THEME_URI.'/css/');
define('SINIKO_THEME_JS_DIR', SINIKO_THEME_URI.'/js/');
define('SINIKO_THEME_INC', SINIKO_THEME_DIR.'/inc/');

/** 
 * siniko_scripts description
 * @return [type] [description]
 */
function siniko_scripts() {
	/**
	* all css files
	*/
    wp_enqueue_style( 'siniko-fonts', '//fonts.googleapis.com/css?family=Nunito:300,400,600,700,800|Rubik:300,400,500,700', array(), '1.0.0' );
	wp_enqueue_style('bootstrap', SINIKO_THEME_CSS_DIR.'bootstrap.min.css', array());
	wp_enqueue_style('owl-carousel', SINIKO_THEME_CSS_DIR.'owl.carousel.min.css', array());
	wp_enqueue_style('animate', SINIKO_THEME_CSS_DIR.'animate.min.css', array());
	wp_enqueue_style('magnific-popup', SINIKO_THEME_CSS_DIR.'magnific-popup.css', array());
	wp_enqueue_style('meanmenu', SINIKO_THEME_CSS_DIR.'meanmenu.css', array());
	wp_enqueue_style('fontawesome-all', SINIKO_THEME_CSS_DIR.'fontawesome-all.min.css', array());
	wp_enqueue_style('slick', SINIKO_THEME_CSS_DIR.'slick.css', array());
	wp_enqueue_style('dripicons', SINIKO_THEME_CSS_DIR.'dripicons.css', array());
	wp_enqueue_style('themify-icons', SINIKO_THEME_CSS_DIR.'themify-icons.css', array());
	wp_enqueue_style('siniko-default', SINIKO_THEME_CSS_DIR.'siniko-default.css', array());
	wp_enqueue_style('siniko-main', SINIKO_THEME_CSS_DIR.'main.css', array());
	wp_enqueue_style( 'siniko-style', get_stylesheet_uri() );
	wp_enqueue_style('responsive', SINIKO_THEME_CSS_DIR.'responsive.css', array());

	if(get_theme_mod( 'rtl_switch',false)) {
		wp_enqueue_style( 'siniko-rtl', SINIKO_THEME_CSS_DIR . 'rtl.css', array() );
		wp_enqueue_style( 'siniko-rtl-responsive', SINIKO_THEME_CSS_DIR . 'rtl-responsive.css', array() );
	}

	// all js
	wp_enqueue_script( 'popper', SINIKO_THEME_JS_DIR.'popper.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'bootstrap', SINIKO_THEME_JS_DIR.'bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'owl-carousel', SINIKO_THEME_JS_DIR.'owl.carousel.min.js', array('jquery', 'imagesloaded'), false, true );
	wp_enqueue_script( 'jquery-counterup', SINIKO_THEME_JS_DIR.'jquery.counterup.min.js', array('jquery', 'imagesloaded'), false, true );
	wp_enqueue_script( 'waypoints', SINIKO_THEME_JS_DIR.'waypoints.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-countdown', SINIKO_THEME_JS_DIR.'jquery.countdown.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-counterup', SINIKO_THEME_JS_DIR.'jquery.counterup.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-magnific-popup', SINIKO_THEME_JS_DIR.'jquery.magnific-popup.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'isotope-pkgd', SINIKO_THEME_JS_DIR.'isotope.pkgd.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-meanmenu', SINIKO_THEME_JS_DIR.'jquery.meanmenu.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'slick', SINIKO_THEME_JS_DIR.'slick.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'wow', SINIKO_THEME_JS_DIR.'wow.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'jquery-scrollUp', SINIKO_THEME_JS_DIR.'jquery.scrollUp.min.js', array('jquery'), false, true );
	wp_enqueue_script( 'siniko-plugins', SINIKO_THEME_JS_DIR.'plugins.js', array('jquery'), false, true );

	if(get_theme_mod( 'rtl_switch',false)) {
		wp_enqueue_script( 'rtl-main', SINIKO_THEME_JS_DIR.'rtl-main.js', array('jquery'), false, true );
	}
	else{
		wp_enqueue_script( 'siniko-rtl-main', SINIKO_THEME_JS_DIR.'main.js', array('jquery'), false, true );
	}


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'siniko_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Custom template helper function for this theme.
 */
require get_template_directory() . '/inc/template-helper.php';


/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
* include siniko functions file
*/
require_once SINIKO_THEME_INC . 'siniko_navwalker.php';
require_once SINIKO_THEME_INC . 'siniko_customizer.php';
require_once SINIKO_THEME_INC . 'siniko_customizer_data.php';
require_once SINIKO_THEME_INC . 'class-tgm-plugin-activation.php';
require_once SINIKO_THEME_INC . 'siniko_add_plugin.php';



/**
*
* comment section
*
*/
add_filter('comment_form_default_fields', 'siniko_comment_form_default_fields_func');

function siniko_comment_form_default_fields_func($default){
	$default['author'] = '<div class="row">
                            <div class="col-xl-12">
                            	<div class="contacts-name">
                                	<input type="text" name="author" placeholder="'.esc_attr__('Your Name....','siniko').'">
                                </div>
                            </div>';
	$default['email'] = '<div class="col-xl-12">
							<div class="contacts-email">
                            <input type="text" name="email" placeholder="'.esc_attr__('Your Email....','siniko').'">
                        	</div>
                        </div>';
	$default['url'] = '';

	$default['clients_commnet'] = '<div class="col-xl-12">
									<div class="contacts-message">
                                     <textarea id="comment" name="comment" cols="30" rows="10" placeholder="'.esc_attr__('Your Comments....','siniko').'"></textarea>
                                    </div>';
	return $default;
}

add_filter('comment_form_defaults', 'siniko_comment_form_defaults_func');

function siniko_comment_form_defaults_func($info){
	if( !is_user_logged_in() ){
		$info['comment_field'] = '';
		$info['submit_field'] = '%1$s %2$s</div></div>';
	}else {
		$info['comment_field'] = '<div class="comments-textarea contacts-message">
                                                <textarea id="comment" name="comment" cols="30" rows="10" placeholder="'.esc_attr__('Your Comments....','siniko').'"></textarea>';
        $info['submit_field'] = '%1$s %2$s</div>';
	}


	$info['submit_button'] = '<button class="btn" type="submit">'.esc_html__('Post Comment','siniko').' </button>';

	$info['title_reply_before'] = '<div class="post-title mb-20">
                                        <h2>';
	$info['title_reply_after'] = '</h2></div>';
	$info['comment_notes_before'] = '';

	return $info;
}

if( !function_exists('siniko_comment') ) {
	function siniko_comment($comment, $args, $depth) {
		$GLOBAL['comment'] = $comment;
		extract($args, EXTR_SKIP);
		$args['reply_text'] = 'Reply <i class="fas fa-arrow-right ml-2"></i>';
		$replayClass = 'comment-depth-' . esc_attr($depth);
		?>
			<li id="comment-<?php comment_ID(); ?>" <?php comment_class($replayClass); ?>>
				<div class="comments-box">
					<div class="comments-avatar">
						<?php print get_avatar($comment, 102, null, null, array('class'=> array())); ?>
					</div>
					<div class="comments-text">
						<div class="avatar-name">
							<h5><?php print get_comment_author_link(); ?></h5>
							<span><?php comment_time( get_option('date_format') ); ?></span>
						</div>
						<?php comment_text(); ?>
						<?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'] ))); ?>
					</div>
				</div>
		<?php
	}
}

/**
* shortcode supports for removing extra p, spance etc
*
*/
add_filter( 'the_content', 'siniko_shortcode_extra_content_remove' );
/**
 * Filters the content to remove any extra paragraph or break tags
 * caused by shortcodes.
 *
 * @since 1.0.0
 *
 * @param string $content  String of HTML content.
 * @return string $content Amended string of HTML content.
 */
function siniko_shortcode_extra_content_remove( $content ) {

    $array = array(
        '<p>['    => '[',
        ']</p>'   => ']',
        ']<br />' => ']'
    );
    return strtr( $content, $array );

}

/**
 * [ocdi_import_files description]
 * @return [type] [description]
 */
function siniko_import_files() {
    return array(
        array(
            'import_file_name'           => esc_html__('siniko Demo Data', 'siniko'),
            'import_file_url'            => 'http://bdevs.net/plugins/wp/siniko/demo_data/siniko-demo-content.xml',
            'import_widget_file_url'     => 'http://bdevs.net/plugins/wp/siniko/demo_data/siniko-widget.json',
            'import_customizer_file_url' => 'http://bdevs.net/plugins/wp/siniko/demo_data/siniko-customizer.dat',
            'import_preview_image_url'   => 'http://www.bdevs.net/ocdi/preview.jpg',
            'import_notice'              => esc_html__( 'After you import this demo, you will have to setup the slider separately.', 'siniko' ),
        ),

    );
}
add_filter( 'pt-ocdi/import_files', 'siniko_import_files' );

/**
 * [ocdi_after_import_setup description]
 * @return [type] [description]
 */
function ocdi_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'Home' );
    $blog_page_id  = get_page_by_title( 'Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'ocdi_after_import_setup' );

// siniko_search_filter_form
if(!function_exists('siniko_search_filter_form')){
  function siniko_search_filter_form( $form ) {
    
    $form = sprintf( 
    	'<div class="search-form"><form action="%s" method="get">
      	<input type="text" value="%s" required name="s" placeholder="%s">
      	<button type="submit"> <i class="fas fa-search"></i>  </button>
		</form></div>',
		esc_url( home_url('/')),
		esc_attr( get_search_query()),
		esc_html__('Search','siniko')
	);

    return $form;
  }
  add_filter( 'get_search_form','siniko_search_filter_form');
}

function _html_markup_render( $markup ){
	return $markup;
}

function new_excerpt_more( $more ) {
	return ' ....';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_action('admin_enqueue_scripts', 'siniko_admin_custom_scripts');
function siniko_admin_custom_scripts(){
	wp_enqueue_media();
	wp_register_script('admin_custom_scripts', get_template_directory_uri().'/inc/js/admin_custom.js', array('jquery'), '', true);
	wp_enqueue_script('admin_custom_scripts');

}


// enable_rtl
function enable_rtl(){
	if(get_theme_mod( 'rtl_switch',false)) {
		return ' dir="rtl" ';
	}
	else{
		return '';
	}
}

//svg support
function add_file_types_to_uploads($file_types){
$new_filetypes = array();
$new_filetypes['svg'] = 'image/svg+xml';
$file_types = array_merge($file_types, $new_filetypes );
return $file_types;
}
add_filter('upload_mimes', 'add_file_types_to_uploads');