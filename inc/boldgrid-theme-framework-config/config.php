<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-callaway';
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';

	// Enable sticky footer and attribution links.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	$boldgrid_framework_configs['temp']['attribution_links'] = true;

	// Disable background image.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'6' => array( '[action]boldgrid_primary_navigation' ),
		'7' => array( '[action]boldgrid_site_identity' ),
		'8' => array( '[widget]boldgrid-widget-2' ),
		'11' => array( '[menu]tertiary' ),
	);

	// Assign menus, widgets, and actions to locations in generic footer template.
	$boldgrid_framework_configs['template']['locations']['footer'] = array(
		'1' => array( '[menu]social' ),
		'5' => array( '[widget]boldgrid-widget-3' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
		'11' => array( '[menu]footer_center' ),
	);

	// Specify container classes.
	$boldgrid_framework_configs['template']['pages']['global']['header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['global']['footer'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['default']['entry-header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['default']['entry-content'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['default']['entry-footer'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-footer'] = 'container-fluid';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#1a091c',
				'#f9690e',
				'#ebf5ff',
				'#322933',
				'#ffe2cc',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#b09537',
				'#20272f',
				'#e3eaef',
				'#d8c56e',
				'#c09b67',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#a91636',
				'#212121',
				'#716e7f',
				'#a85466',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#1a3c54',
				'#83745d',
				'#dbe2e4',
				'#cc9f70',
				'#dbcab8',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#f27360',
				'#543f3b',
				'#f5eee9',
				'#f5a46c',
				'#f5eee9',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#627273',
			'colors' => array(
				'#3498db',
				'#f2f1ef',
				'#6c7a89',
				'#90bddb',
				'#6c7a89',
			),
		)
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Enable Typography Controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Questrial';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Questrial';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 10;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Questrial';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'lowercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 175;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 alt-font';

	// Button Classes.
	$boldgrid_framework_configs['components']['buttons']['variables']['button-primary-classes'] = '.btn';
	$boldgrid_framework_configs['components']['buttons']['variables']['button-secondary-classes'] = '.btn';

	// Social Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['primary'] = "Primary Menu";
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Header Top';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Header Bottom';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Footer Top';
	$boldgrid_framework_configs['menu']['locations']['footer_center'] = 'Footer Bottom';

	// Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-3']['name'] = 'Footer';

	return $boldgrid_framework_configs;
}
add_filter( 'boldgrid_theme_framework_config', 'boldgrid_theme_framework_config' );

/**
 * Site Title & Logo Controls
 */
function filter_logo_controls( $controls ) {
	$controls['logo_font_family']['default'] = 'Questrial';
	$controls['logo_font_size']['default'] = 36;
	$controls['logo_margin_top']['default'] = 5;
	$controls['logo_text_transform']['default'] = 'lowercase';

	// Controls above will override framework defaults
	return $controls;
}
add_filter( 'kirki/fields', 'filter_logo_controls' );
