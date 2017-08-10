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

	// Disable background image and call to action.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;
	$boldgrid_framework_configs['template']['call-to-action'] = 'disabled';
	$boldgrid_framework_configs['template']['post_navigation']['style'] = 'buttons';

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
		'1' => array( '[widget]boldgrid-widget-3' , '[menu]social' ),
		'5' => array( '[action]boldgrid_display_contact_block' ),
		'8' => array( '[action]boldgrid_display_attribution_links' ),
		'11' => array( '[menu]footer_center' ),
	);

	// Specify container classes.
	$boldgrid_framework_configs['template']['pages']['global']['header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['global']['footer'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-header'] = 'container-fluid';
	$boldgrid_framework_configs['template']['pages']['page_home.php']['entry-content'] = 'container-fluid';

	/**
	 * Customizer Configs
	 */
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ebf5ff',
			'colors' => array(
				'#1a091c',
				'#f9690e',
				'#ffffff',
				'#322933',
				'#ffe2cc',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#e3eaef',
			'colors' => array(
				'#b09537',
				'#20272f',
				'#ffffff',
				'#d8c56e',
				'#c09b67',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#7c7f87',
			'colors' => array(
				'#a91636',
				'#212121',
				'#ffffff',
				'#a85466',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#dbe2e4',
			'colors' => array(
				'#1a3c54',
				'#83745d',
				'#ffffff',
				'#cc9f70',
				'#dbcab8',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#f5eee9',
			'colors' => array(
				'#f27360',
				'#543f3b',
				'#ffffff',
				'#f5a46c',
				'#f5eee9',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#4a4b54',
			'colors' => array(
				'#3498db',
				'#f2f1ef',
				'#627273',
				'#90bddb',
				'#6c7a89',
			),
		)
	);

	// Override customizer options per subcategory.
	switch ( $boldgrid_framework_configs['inspiration']['subcategory_key'] ) {
		case 'Photography':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Consulting':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][1]['default'] = true;
			break;
		case 'Fitness':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Fashion':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][2]['default'] = true;
			break;
		case 'Real Estate':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'General':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][3]['default'] = true;
			break;
		case 'Music':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'Restaurant':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][4]['default'] = true;
			break;
		case 'Home Repair':
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][5]['default'] = true;
			break;
		// Default
		default:
			$boldgrid_framework_configs['customizer-options']['colors']['defaults'][0]['default'] = true;
			break;
	}

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
	$boldgrid_framework_configs['components']['buttons']['variables']['button-primary-classes'] = '.btn, .btn-color-1';
	$boldgrid_framework_configs['components']['buttons']['variables']['button-secondary-classes'] = '.btn, .btn-color-2';

	// Social Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations'] = array(
		'primary' => 'Primary Menu',
		'secondary' => 'Header Top',
		'tertiary' => 'Header Bottom',
		'social' => 'Footer Top',
		'footer_center' => 'Footer Bottom',
	);

	$boldgrid_framework_configs['menu']['footer_menus'][] = 'social';

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
