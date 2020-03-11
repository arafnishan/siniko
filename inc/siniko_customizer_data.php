<?php
/** 
 * siniko Customizer data
 */
function siniko_customizer( $data ) {
	return array(
		'panel' => array ( 
			'id' => 'siniko',
			'name' => esc_html__('Enventer Customizer','siniko'),
			'priority' => 10,
			'section' => array(
				'siniko_topbar_setting' => array(
					'name' => esc_html__( 'Topbar Swticher', 'siniko' ),
					'priority' => 10,
					'fields' => array(
						array(
							'name' => esc_html__( 'Topbar Swicher', 'siniko' ),
							'id' => 'siniko_topbar_switch',
							'default' => false,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),						
						array(
							'name' => esc_html__( 'Topbar Search', 'siniko' ),
							'id' => 'siniko_search',
							'default' => false,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),						
						array(
							'name' => esc_html__( 'Header Phone', 'siniko' ),
							'id' => 'header_phone',
							'default' => '+5 123 456 7899.',
							'type' => 'text',
							'transport'	=> 'refresh'
						),							
						array(
							'name' => esc_html__( 'Header Mail', 'siniko' ),
							'id' => 'header_mail',
							'default' => 'Support@gmail.com',
							'type' => 'text',
							'transport'	=> 'refresh'
						),	
						array(
							'name' => esc_html__( 'Analysis Button', 'siniko' ),
							'id' => 'siniko_free_analysis',
							'default' => false,
							'type' => 'switch',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Analysis Button Text', 'siniko' ),
							'id' => 'siniko_free_analysis_text',
							'default' => esc_html__('Free Analysis','siniko'),
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Analysis Button Link', 'siniko' ),
							'id' => 'siniko_free_analysis_link',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),						
						array(
							'name' => esc_html__( 'Facebook Url', 'siniko' ),
							'id' => 'siniko_topbar_fb_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Twitter Url', 'siniko' ),
							'id' => 'siniko_topbar_twitter_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Behance Url', 'siniko' ),
							'id' => 'siniko_footer_behance_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Google Plus Url', 'siniko' ),
							'id' => 'siniko_topbar_google_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Instagram Url', 'siniko' ),
							'id' => 'siniko_topbar_instagram_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),

					) 
				),
				'header_setting' => array(
					'name' => esc_html__( 'Header Setting', 'siniko' ),
					'priority' => 11,
					'fields' => array(
						array(
							'name' => esc_html__( 'Choose Header Style', 'siniko' ),
							'id' => 'choose_default_header',
							'type'     => 'select',
							'choices'  => array(
								'header-style-1' => 'Topbar Header',
								'header-style-2' => 'Black Header',
								'header-style-3' => 'Box Header',
							),
							'default' => 'header-style-1',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Header Logo', 'siniko' ),
							'id' => 'logo',
							'default' => get_template_directory_uri() . '/img/logo/logo.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header White Logo', 'siniko' ),
							'id' => 'seconday_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo-white.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina Logo', 'siniko' ),
							'id' => 'retina_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Header Retina White Logo', 'siniko' ),
							'id' => 'retina_secondary_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo-white@2x.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),						
					) 
				),
				'breadcrumb_setting'=> array(
					'name'=> esc_html__('Breadcrumb Setting','siniko'),
					'priority'=> 12,
					'fields'=> array(
						array(
							'name'=>esc_html__('Breadcrumb BG Color','siniko'),
							'id'=>'siniko_breadcrumb_bg_color',
							'default'=> esc_html__('#0D6BFF','siniko'),
							'transport'	=> 'refresh'  
						),	
						array(
							'name' => esc_html__( 'Breadcrumb Background Image', 'siniko' ),
							'id' => 'breadcrumb_bg_img',
							'default' => '',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name'=>esc_html__('Breadcrumb Padding Top : PX','siniko'),
							'id'=>'siniko_breadcrumb_top',
							'default'=> '320px',
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name'=>esc_html__('Breadcrumb Padding Bottom : PX','siniko'),
							'id'=>'siniko_breadcrumb_bottom',
							'default'=> '200px',
							'type'=>'text',
							'transport'	=> 'refresh'  
						),	
						array(
							'name' => esc_html__( 'Favicon', 'siniko' ),
							'id' => 'favicon_url',
							'default' => get_template_directory_uri() . '/img/logo/favicon.png',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
					)
				),
				'blog_setting'=> array(
					'name'=> esc_html__('Blog Setting','siniko'),
					'priority'=> 13,
					'fields'=> array(
						array(
							'name'=>esc_html__('Read More Text','siniko'),
							'id'=>'siniko_blog_read_more_text',
							'default'=> esc_html__('Read More','siniko'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Read More Icon','siniko'),
							'id'=>'siniko_blog_read_more_icon',
							'default'=> esc_html__('dripicons-arrow-thin-right','siniko'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						array(
							'name' => esc_html__( 'Blog Button Show', 'siniko' ),
							'id' => 'siniko_blog_btn_show',
							'default' => true,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),	
					)
				),	
				'error_404_setting'=> array(
					'name'=> esc_html__('404 Page Setting','siniko'),
					'priority'=> 14,
					'fields'=> array(
						array(
							'name'=>esc_html__('Heading','siniko'),
							'id'=>'siniko_404_page_heading',
							'default'=> esc_html__('Oops! That page can&rsquo;t be found.','siniko'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Description','siniko'),
							'id'=>'siniko_404_page_desc',
							'default'=> esc_html__('It looks like nothing was found at this location. Maybe try one of the links below or a search?','siniko'),
							'type'=>'textarea',
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Button Text','siniko'),
							'id'=>'siniko_404_btn_text',
							'default'=> esc_html__('Back Home','siniko'),
							'type'=>'textarea',
							'transport'	=> 'refresh'  
						),	
					)
				),	
				'siniko_ex_setting'=> array(
					'name'=> esc_html__('Extra Info Setting','siniko'),
					'priority'=> 15,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Show Extra Info', 'siniko' ),
							'id' => 'siniko_show_extra_info',
							'default' => true,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),
						array(
							'name'=>esc_html__('Logo','siniko'),
							'id'=>'siniko_extra_info_logo',
							'default' => get_template_directory_uri() . '/img/logo/logo-white.png',
							'type' => 'image',
							'transport'	=> 'refresh'  
						),	
						array(
							'name' => esc_html__( 'Office Address', 'siniko' ),
							'id' => 'siniko_office_address',
							'default' => '#',
							'type' => 'textarea' 
						),
						array(
							'name' => esc_html__( 'Phone Number', 'siniko' ),
							'id' => 'siniko_phone_number',
							'default' => '#',
							'type' => 'textarea' 
						),
						array(
							'name' => esc_html__( 'Email Address', 'siniko' ),
							'id' => 'siniko_email_address',
							'default' => '#',
							'type' => 'textarea' 
						),
						array(
							'name' => esc_html__( 'Show Portfolios', 'siniko' ),
							'id' => 'siniko_portfolios',
							'default' => false,
							'type' => 'switch',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Facebook Url', 'siniko' ),
							'id' => 'siniko_extra_info_fb_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Twitter Url', 'siniko' ),
							'id' => 'siniko_extra_info_twitter_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Behance Url', 'siniko' ),
							'id' => 'siniko_extra_info_behance_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Google Plus Url', 'siniko' ),
							'id' => 'siniko_extra_info_google_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
						array(
							'name' => esc_html__( 'Instagram Url', 'siniko' ),
							'id' => 'siniko_extra_info_instagram_url',
							'default' => '#',
							'type' => 'text',
							'transport'	=> 'refresh' 
						),
					)
				),
				'siniko_footer_setting'=> array(
					'name'=> esc_html__('Footer Setting','siniko'),
					'priority'=> 16,
					'fields'=> array(
						array(
							'name' => esc_html__( 'Choose Footer Style', 'siniko' ),
							'id' => 'choose_default_footer',
							'type'     => 'select',
							'choices'  => array(
								'footer-style-1' => 'Gray Footer',
								'footer-style-2' => 'Light Footer 4 Column',
								'footer-style-3' => 'Blue Footer',
                                'footer-style-4' => 'Light Footer 3 Column',
							),
							'default' => 'footer-style-1',
							'transport'	=> 'refresh'
						),
						array(
							'name' => esc_html__( 'Footer Background Image', 'siniko' ),
							'id' => 'siniko_footer_bg_url',
							'type' => 'image',
							'transport'	=> 'refresh' 
						),
						array(
							'name'=>esc_html__('Copy Right','siniko'),
							'id'=>'siniko_copyright',
							'default'=> esc_html__('Copyright &copy;2019 NilArtStudio. All Rights Reserved Copyright','siniko'),
							'type'=>'text',
							'transport'	=> 'refresh'  
						),
						
					)
				),
				'color_setting'=> array(
					'name'=> esc_html__('Color Setting','siniko'),
					'priority'=> 17,
					'fields'=> array(
						array(
							'name'=>esc_html__('Theme Color','siniko'),
							'id'=>'siniko_color_option',
							'default'=> esc_html__('#ee4212','siniko'),
							'transport'	=> 'refresh'  
						),							
						array(
							'name'=>esc_html__('Theme Sec Color','siniko'),
							'id'=>'siniko_sec_color_option',
							'default'=> esc_html__('#f89f22','siniko'),
							'transport'	=> 'refresh'  
						),						
						array(
							'name'=>esc_html__('Theme btn Color','siniko'),
							'id'=>'siniko_theme_btn_color',
							'default'=> esc_html__('#ee4212','siniko'),
							'transport'	=> 'refresh'  
						),							
						array(
							'name'=>esc_html__('Theme btn sec Color','siniko'),
							'id'=>'siniko_btn_sec_color',
							'default'=> esc_html__('#f89f22','siniko'),
							'transport'	=> 'refresh'  
						)												
					)
				),
				'rtl_setting'=> array(
					'name'=> esc_html__('RTL Setting','siniko'),
					'priority'=> 18,
					'fields'=> array(
						array(
							'name'=>esc_html__('Switch RTL','siniko'),
							'id'=>'rtl_switch',
							'default'=> false,
							'type'=>'switch',
							'transport'	=> 'refresh'  
						),
						
					)
				),
			),
		)
	);

}

add_filter('siniko_customizer_data', 'siniko_customizer');


