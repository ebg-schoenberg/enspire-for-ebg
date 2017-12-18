<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add config
/* ------------------------------------ */
Kirki::add_config( 'enspire', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Options', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'General', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_attr__( 'Blog', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_attr__( 'Header', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_attr__( 'Footer', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'layout', array(
    'priority'    => 50,
    'title'       => esc_attr__( 'Layout', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'sidebars', array(
    'priority'    => 60,
    'title'       => esc_attr__( 'Sidebars', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_attr__( 'Social Links', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_attr__( 'Styling', 'enspire' ),
    'description' => esc_attr__( '', 'enspire' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Custom CSS
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'custom',
	'label'			=> esc_attr__( 'Custom Stylesheet', 'enspire' ),
	'description'	=> esc_attr__( 'Load custom stylesheet (custom.css)', 'enspire' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Responsive Layout
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'responsive',
	'label'			=> esc_attr__( 'Responsive Layout', 'enspire' ),
	'description'	=> esc_attr__( 'Mobile and tablet optimizations (responsive.css)', 'enspire' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_attr__( 'Mobile Sidebar Content', 'enspire' ),
	'description'	=> esc_attr__( 'Sidebar content on low-resolution mobile devices (320px)', 'enspire' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Mobile Sidebar
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio',
	'settings'		=> 'mobile-sidebar-hide',
	'label'			=> esc_attr__( 'Mobile Sidebar Content', 'enspire' ),
	'description'	=> esc_attr__( 'Hide sidebar content on low-resolution mobile devices (320px)', 'enspire' ),
	'section'		=> 'general',
	'default'		=> '1',
	'choices'		=> array(
		'1'			=> esc_attr__( 'Show sidebars', 'enspire' ),
		's1'		=> esc_attr__( 'Hide primary sidebar', 'enspire' ),
		's2'		=> esc_attr__( 'Hide secondary sidebar', 'enspire' ),
		's1-s2'		=> esc_attr__( 'Hide both sidebars', 'enspire' ),
	),
) );
// General: RSS Feed
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'text',
	'settings'		=> 'rss-feed',
	'label'			=> esc_attr__( 'FeedBurner URL', 'enspire' ),
	'description'	=> esc_attr__( 'Enter your full FeedBurner URL (or any other preferred feed URL) if you wish to use FeedBurner over the standard WordPress feed e.g. http://feeds.feedburner.com/yoururlhere', 'enspire' ),
	'section'		=> 'general',
	'default'		=> '',
) );
// General: Post Comments
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'post-comments',
	'label'			=> esc_attr__( 'Post Comments', 'enspire' ),
	'description'	=> esc_attr__( 'Comments on posts', 'enspire' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// General: Page Comments
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'page-comments',
	'label'			=> esc_attr__( 'Page Comments', 'enspire' ),
	'description'	=> esc_attr__( 'Comments on pages', 'enspire' ),
	'section'		=> 'general',
	'default'		=> 'off',
) );
// General: Recommended Plugins
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_attr__( 'Recommended Plugins', 'enspire' ),
	'description'	=> esc_attr__( 'Enable or disable the recommended plugins notice', 'enspire' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Blog Layout
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio',
	'settings'		=> 'blog-layout',
	'label'			=> esc_attr__( 'Blog Layout', 'enspire' ),
	'description'	=> esc_attr__( '', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'blog-standard',
	'choices'		=> array(
		'blog-standard'	=> esc_attr__( 'Standard', 'enspire' ),
		'blog-grid'		=> esc_attr__( 'Grid', 'enspire' ),
		'blog-list'		=> esc_attr__( 'List', 'enspire' ),
	),
) );
// Blog: Heading
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'text',
	'settings'		=> 'blog-heading',
	'label'			=> esc_attr__( 'Heading', 'enspire' ),
	'description'	=> esc_attr__( 'Your blog heading', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Subheading
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'text',
	'settings'		=> 'blog-subheading',
	'label'			=> esc_attr__( 'Subheading', 'enspire' ),
	'description'	=> esc_attr__( 'Your blog subheading', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Excerpt Length
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_attr__( 'Excerpt Length', 'enspire' ),
	'description'	=> esc_attr__( 'Max number of words. Set it to 0 to disable.', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> '24',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Featured Posts Include
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'checkbox',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_attr__( 'Featured Posts', 'enspire' ),
	'description'	=> esc_attr__( 'To show featured posts in the slider AND the content below. Usually not recommended.', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> false,
) );
// Blog: Featured Category
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_attr__( 'Featured Category', 'enspire' ),
	'description'	=> esc_attr__( 'By not selecting a category, it will show your latest post(s) from all categories', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_attr__( 'Select a category', 'enspire' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_attr__( 'Featured Post Count', 'enspire' ),
	'description'	=> esc_attr__( 'Max number of featured posts to display. Set to 1 and it will show it without any slider script. Set it to 0 to disable', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> '6',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Frontpage Widgets Top
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-top',
	'label'			=> esc_attr__( 'Frontpage Widgets Top', 'enspire' ),
	'description'	=> esc_attr__( '2 columns of widgets', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Frontpage Widgets Bottom
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'frontpage-widgets-bottom',
	'label'			=> esc_attr__( 'Frontpage Widgets Bottom', 'enspire' ),
	'description'	=> esc_attr__( '2 columns of widgets', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Thumbnail Placeholder
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'placeholder',
	'label'			=> esc_attr__( 'Thumbnail Placeholder', 'enspire' ),
	'description'	=> esc_attr__( 'Show featured image placeholders if no featured image is set', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Thumbnail Comment Count
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_attr__( 'Thumbnail Comment Count', 'enspire' ),
	'description'	=> esc_attr__( 'Comment count on thumbnails', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Sharrre
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'sharrre',
	'label'			=> esc_attr__( 'Single - Share Bar', 'enspire' ),
	'description'	=> esc_attr__( 'Social sharing buttons for each article', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Sharrre Sticky
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'sharrre-scrollable',
	'label'			=> esc_attr__( 'Single - Scrollable Share Bar', 'enspire' ),
	'description'	=> esc_attr__( 'Make social links stick to browser window when scrolling down', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Twitter Username
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'text',
	'settings'		=> 'twitter-username',
	'label'			=> esc_attr__( 'Single - Share Bar - Twitter Username', 'enspire' ),
	'description'	=> esc_attr__( 'Your @username will be added to share-tweets of your posts (optional)', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> '',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_attr__( 'Single - Author Bio', 'enspire' ),
	'description'	=> esc_attr__( 'Shows post author description, if it exists', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Related Posts
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_attr__( 'Single - Related Posts', 'enspire' ),
	'description'	=> esc_attr__( 'Shows randomized related articles below the post', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_attr__( 'Disable', 'enspire' ),
		'categories'=> esc_attr__( 'Related by categories', 'enspire' ),
		'tags'		=> esc_attr__( 'Related by tags', 'enspire' ),
	),
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_attr__( 'Single - Post Navigation', 'enspire' ),
	'description'	=> esc_attr__( 'Shows links to the next and previous article', 'enspire' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_attr__( 'Disable', 'enspire' ),
		's1'		=> esc_attr__( 'Sidebar Primary', 'enspire' ),
		's2'		=> esc_attr__( 'Sidebar Secondary', 'enspire' ),
		'content'	=> esc_attr__( 'Below content', 'enspire' ),
	),
) );
// Header: Ads
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'header-ads',
	'label'			=> esc_attr__( 'Header Ads', 'enspire' ),
	'description'	=> esc_attr__( 'Header widget ads area', 'enspire' ),
	'section'		=> 'header',
	'default'		=> 'off',
) );
// Header: Custom Logo
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'image',
	'settings'		=> 'custom-logo',
	'label'			=> esc_attr__( 'Custom Logo', 'enspire' ),
	'description'	=> esc_attr__( 'Upload your custom logo image, 120px height recommended', 'enspire' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Site Description
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'site-description',
	'label'			=> esc_attr__( 'Site Description', 'enspire' ),
	'description'	=> esc_attr__( 'The description that appears next to your logo', 'enspire' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Ads
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-ads',
	'label'			=> esc_attr__( 'Footer Ads', 'enspire' ),
	'description'	=> esc_attr__( 'Footer widget ads area', 'enspire' ),
	'section'		=> 'footer',
	'default'		=> 'off',
) );
// Footer: Widget Columns
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_attr__( 'Footer Widget Columns', 'enspire' ),
	'description'	=> esc_attr__( 'Select columns to enable footer widgets. Recommended number: 3', 'enspire' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Custom Logo
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_attr__( 'Footer Logo', 'enspire' ),
	'description'	=> esc_attr__( 'Upload your custom logo image', 'enspire' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_attr__( 'Footer Copyright', 'enspire' ),
	'description'	=> esc_attr__( 'Replace the footer copyright text', 'enspire' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_attr__( 'Footer Credit', 'enspire' ),
	'description'	=> esc_attr__( 'Footer credit text', 'enspire' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Layout: Global
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-global',
	'label'			=> esc_attr__( 'Global Layout', 'enspire' ),
	'description'	=> esc_attr__( 'Other layouts will override this option if they are set', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'col-3cm',
	'choices'     => array(
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Home
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-home',
	'label'			=> esc_attr__( 'Home', 'enspire' ),
	'description'	=> esc_attr__( '(is_home) Posts homepage layout', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Single
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-single',
	'label'			=> esc_attr__( 'Single', 'enspire' ),
	'description'	=> esc_attr__( '(is_single) Single post layout - If a post has a set layout, it will override this.', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Archive
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive',
	'label'			=> esc_attr__( 'Archive', 'enspire' ),
	'description'	=> esc_attr__( '(is_archive) Category, date, tag and author archive layout', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout : Archive - Category
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-archive-category',
	'label'			=> esc_attr__( 'Archive - Category', 'enspire' ),
	'description'	=> esc_attr__( '(is_category) Category archive layout', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Search
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-search',
	'label'			=> esc_attr__( 'Search', 'enspire' ),
	'description'	=> esc_attr__( '(is_search) Search page layout', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Error 404
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-404',
	'label'			=> esc_attr__( 'Error 404', 'enspire' ),
	'description'	=> esc_attr__( '(is_404) Error 404 page layout', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Layout: Default Page
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio-image',
	'settings'		=> 'layout-page',
	'label'			=> esc_attr__( 'Default Page', 'enspire' ),
	'description'	=> esc_attr__( '(is_page) Default page layout - If a page has a set layout, it will override this.', 'enspire' ),
	'section'		=> 'layout',
	'default'		=> 'inherit',
	'choices'     => array(
		'inherit'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'col-1c'	=> get_template_directory_uri() . '/functions/images/col-1c.png',
		'col-2cl'	=> get_template_directory_uri() . '/functions/images/col-2cl.png',
		'col-2cr'	=> get_template_directory_uri() . '/functions/images/col-2cr.png',
		'col-3cm'	=> get_template_directory_uri() . '/functions/images/col-3cm.png',
		'col-3cl'	=> get_template_directory_uri() . '/functions/images/col-3cl.png',
		'col-3cr'	=> get_template_directory_uri() . '/functions/images/col-3cr.png',
	),
) );
// Sidebars: Create Sidebars
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Sidebars', 'enspire' ),
	'description'	=> esc_attr__( 'You must save and refresh the page to see your new sidebars.', 'enspire' ),
	'tooltip'		=> esc_attr__( 'Make sure that you save and refresh the page if you can not see the sidebars you have created.', 'enspire' ),
	'section'		=> 'sidebars',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('sidebar', 'enspire' ),
	),
	'settings'		=> 'sidebar-areas',
	'default'		=> '',
	'fields'		=> array(
		'title'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar Title', 'enspire' ),
			'description' => esc_attr__( 'The widget box title', 'enspire' ),
			'default'     => '',
		),
		'id'	=> array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Sidebar ID', 'enspire' ),
			'description' => esc_attr__( 'This ID must be unique', 'enspire' ),
			'default'     => 'sidebar-',
		),
	)
) );


function alx_kirki_sidebars_select() { 
 	$sidebars = array(); 
 	if ( isset( $GLOBALS['wp_registered_sidebars'] ) ) { 
 		$sidebars = $GLOBALS['wp_registered_sidebars']; 
 	} 
 	$sidebars_choices = array(); 
 	foreach ( $sidebars as $sidebar ) { 
 		$sidebars_choices[ $sidebar['id'] ] = $sidebar['name']; 
 	} 
 	if ( ! class_exists( 'Kirki' ) ) { 
 		return; 
 	}
	// Sidebars: Select
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's1-home',
		'label'			=> esc_attr__( 'Home', 'enspire' ),
		'description'	=> esc_attr__( '(is_home) Primary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's2-home',
		'label'			=> esc_attr__( 'Home', 'enspire' ),
		'description'	=> esc_attr__( '(is_home) Secondary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's1-single',
		'label'			=> esc_attr__( 'Single', 'enspire' ),
		'description'	=> esc_attr__( '(is_single) Primary - If a single post has a unique sidebar, it will override this.', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's2-single',
		'label'			=> esc_attr__( 'Single', 'enspire' ),
		'description'	=> esc_attr__( '(is_single) Secondary - If a single post has a unique sidebar, it will override this.', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive',
		'label'			=> esc_attr__( 'Archive', 'enspire' ),
		'description'	=> esc_attr__( '(is_archive) Primary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive',
		'label'			=> esc_attr__( 'Archive', 'enspire' ),
		'description'	=> esc_attr__( '(is_archive) Secondary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's1-archive-category',
		'label'			=> esc_attr__( 'Archive - Category', 'enspire' ),
		'description'	=> esc_attr__( '(is_category) Primary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's2-archive-category',
		'label'			=> esc_attr__( 'Archive - Category', 'enspire' ),
		'description'	=> esc_attr__( '(is_category) Secondary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's1-search',
		'label'			=> esc_attr__( 'Search', 'enspire' ),
		'description'	=> esc_attr__( '(is_search) Primary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's2-search',
		'label'			=> esc_attr__( 'Search', 'enspire' ),
		'description'	=> esc_attr__( '(is_search) Secondary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's1-404',
		'label'			=> esc_attr__( 'Error 404', 'enspire' ),
		'description'	=> esc_attr__( '(is_404) Primary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's2-404',
		'label'			=> esc_attr__( 'Error 404', 'enspire' ),
		'description'	=> esc_attr__( '(is_404) Secondary', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's1-page',
		'label'			=> esc_attr__( 'Default Page', 'enspire' ),
		'description'	=> esc_attr__( '(is_page) Primary - If a page has a unique sidebar, it will override this.', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	Kirki::add_field( 'alx_enspire', array(
		'type'			=> 'select',
		'settings'		=> 's2-page',
		'label'			=> esc_attr__( 'Default Page', 'enspire' ),
		'description'	=> esc_attr__( '(is_page) Secondary - If a page has a unique sidebar, it will override this.', 'enspire' ),
		'section'		=> 'sidebars',
		'choices'		=> $sidebars_choices, 
		'default'		=> '',
		'placeholder'	=> esc_attr__( 'Select a sidebar', 'enspire' ),
	) );
	
 } 
add_action( 'init', 'alx_kirki_sidebars_select', 999 ); 

// Social Links: List
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'repeater',
	'label'			=> esc_attr__( 'Create Social Links', 'enspire' ),
	'description'	=> esc_attr__( 'Create and organize your social links', 'enspire' ),
	'section'		=> 'social',
	'tooltip'		=> esc_attr__( 'Font Awesome names:', 'enspire' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'enspire' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_attr__('social link', 'enspire' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Title', 'enspire' ),
			'description'	=> esc_attr__( 'Ex: Facebook', 'enspire' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_attr__( 'Icon Name', 'enspire' ),
			'description'	=> esc_attr__( 'Font Awesome icons. Ex: fa-facebook ', 'enspire' ) . ' <a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank"><strong>' . esc_attr__( 'View All', 'enspire' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_attr__( 'Link', 'enspire' ),
			'description'	=> esc_attr__( 'Enter the full url for your icon button', 'enspire' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_attr__( 'Icon Color', 'enspire' ),
			'description'	=> esc_attr__( 'Set a unique color for your icon (optional)', 'enspire' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_attr__( 'Open in new window', 'enspire' ),
			'description'	=> esc_attr__( '', 'enspire' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_attr__( 'Dynamic Styles', 'enspire' ),
	'description'	=> esc_attr__( 'Turn on to use the styling options below', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Boxed Layout
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'switch',
	'settings'		=> 'boxed',
	'label'			=> esc_attr__( 'Boxed Layout', 'enspire' ),
	'description'	=> esc_attr__( 'Use a boxed layout', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Font
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_attr__( 'Font', 'enspire' ),
	'description'	=> esc_attr__( 'Select font for the theme', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> 'roboto-condensed',
	'choices'     => array(
		'titillium-web'			=> esc_attr__( 'Titillium Web, Latin (Self-hosted)', 'enspire' ),
		'titillium-web-ext'		=> esc_attr__( 'Titillium Web, Latin-Ext', 'enspire' ),
		'droid-serif'			=> esc_attr__( 'Droid Serif, Latin', 'enspire' ),
		'source-sans-pro'		=> esc_attr__( 'Source Sans Pro, Latin-Ext', 'enspire' ),
		'lato'					=> esc_attr__( 'Lato, Latin', 'enspire' ),
		'raleway'				=> esc_attr__( 'Raleway, Latin', 'enspire' ),
		'ubuntu'				=> esc_attr__( 'Ubuntu, Latin-Ext', 'enspire' ),
		'ubuntu-cyr'			=> esc_attr__( 'Ubuntu, Latin / Cyrillic-Ext', 'enspire' ),
		'roboto'				=> esc_attr__( 'Roboto, Latin-Ext', 'enspire' ),
		'roboto-cyr'			=> esc_attr__( 'Roboto, Latin / Cyrillic-Ext', 'enspire' ),
		'roboto-condensed'		=> esc_attr__( 'Roboto Condensed, Latin-Ext', 'enspire' ),
		'roboto-condensed-cyr'	=> esc_attr__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'enspire' ),
		'roboto-slab'			=> esc_attr__( 'Roboto Slab, Latin-Ext', 'enspire' ),
		'roboto-slab-cyr'		=> esc_attr__( 'Roboto Slab, Latin / Cyrillic-Ext', 'enspire' ),
		'playfair-display'		=> esc_attr__( 'Playfair Display, Latin-Ext', 'enspire' ),
		'playfair-display-cyr'	=> esc_attr__( 'Playfair Display, Latin / Cyrillic', 'enspire' ),
		'open-sans'				=> esc_attr__( 'Open Sans, Latin-Ext', 'enspire' ),
		'open-sans-cyr'			=> esc_attr__( 'Open Sans, Latin / Cyrillic-Ext', 'enspire' ),
		'pt-serif'				=> esc_attr__( 'PT Serif, Latin-Ext', 'enspire' ),
		'pt-serif-cyr'			=> esc_attr__( 'PT Serif, Latin / Cyrillic-Ext', 'enspire' ),
		'arial'					=> esc_attr__( 'Arial', 'enspire' ),
		'georgia'				=> esc_attr__( 'Georgia', 'enspire' ),
		'verdana'				=> esc_attr__( 'Verdana', 'enspire' ),
		'tahoma'				=> esc_attr__( 'Tahoma', 'enspire' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_attr__( 'Website Max-width', 'enspire' ),
	'description'	=> esc_attr__( 'Max-width of the container. If you use 2 sidebars, your container should be at least 1280px. Note: For 720px content (default) use 1460px for 2 sidebars and 1120px for 1 sidebar. If you use a combination of both, try something inbetween.', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '1460',
	'choices'     => array(
		'min'	=> '1024',
		'max'	=> '1600',
		'step'	=> '1',
	),
) );
// Styling: Sidebar Width
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'radio',
	'settings'		=> 'sidebar-padding',
	'label'			=> esc_attr__( 'Sidebar Width', 'enspire' ),
	'description'	=> esc_attr__( '', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '30',
	'choices'		=> array(
		'30'	=> esc_attr__( '280px primary (30px padding)', 'enspire' ),
		'20'	=> esc_attr__( '300px primary (20px padding)', 'enspire' ),
	),
) );
// Styling: Primary Color
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'color',
	'settings'		=> 'color-1',
	'label'			=> esc_attr__( 'Primary Color', 'enspire' ),
	'description'	=> esc_attr__( '', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '#1db954',
) );
// Styling: Logo Background
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'color',
	'settings'		=> 'color-logo',
	'label'			=> esc_attr__( 'Logo Background', 'enspire' ),
	'description'	=> esc_attr__( '', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '#1db954',
) );
// Styling: Comments Bubble
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'color',
	'settings'		=> 'color-bubble',
	'label'			=> esc_attr__( 'Comments Bubble', 'enspire' ),
	'description'	=> esc_attr__( '', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '#1db954',
) );
// Styling: Footer Background
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'color',
	'settings'		=> 'color-footer',
	'label'			=> esc_attr__( 'Footer Background', 'enspire' ),
	'description'	=> esc_attr__( '', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '#1db954',
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_attr__( 'Header Logo Image Max-height', 'enspire' ),
	'description'	=> esc_attr__( 'Your logo image should have the double height of this to be high resolution', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Image Border Radius
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'slider',
	'settings'		=> 'image-border-radius',
	'label'			=> esc_attr__( 'Image Border Radius', 'enspire' ),
	'description'	=> esc_attr__( 'Give your thumbnails and layout images rounded corners', 'enspire' ),
	'section'		=> 'styling',
	'default'		=> '3',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '15',
		'step'	=> '1',
	),
) );
// Styling: Body Background
Kirki::add_field( 'alx_enspire', array(
	'type'			=> 'background',
	'settings'		=> 'body-background',
	'label'			=> esc_attr__( 'Body Background', 'enspire' ),
	'description'	=> esc_attr__( 'Set background color and/or upload your own background image', 'enspire' ),
	'section'		=> 'styling',
	'default'     => array(
		'background-color'      => '',
		'background-image'      => '',
		'background-repeat'     => 'no-repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'fixed',
	),
) );