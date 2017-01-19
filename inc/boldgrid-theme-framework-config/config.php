<?php
function boldgrid_theme_framework_config( $boldgrid_framework_configs ) {
	/**
	 * General Configs
	 */
	// Text domain.
	$boldgrid_framework_configs['theme_name'] = 'boldgrid-gridone';
	// Enable Sticky Footer.
	$boldgrid_framework_configs['scripts']['boldgrid-sticky-footer'] = true;
	// Enable typography controls.
	$boldgrid_framework_configs['customizer-options']['typography']['enabled'] = true;
	// Enable attribution links.
	$boldgrid_framework_configs['temp']['attribution_links'] = true;
	// Enable template wrapper.
	$boldgrid_framework_configs['boldgrid-parent-theme'] = true;
	// Specify the parent theme's name.
	$boldgrid_framework_configs['parent-theme-name'] = 'prime';
	// Select the footer template to use.
	$boldgrid_framework_configs['template']['footer'] = '1';
	// Select the header template to use.
	$boldgrid_framework_configs['template']['header'] = 'generic';
	// Assign menus, widgets, and actions to locations in generic header template.
	$boldgrid_framework_configs['template']['locations']['header'] = array(
		'1' => array( '[menu]secondary' ),
		'5' => array( '[widget]boldgrid-widget-1' ),
		'7' => array( '[action]boldgrid_site_identity' ),
		'6' => array( '[menu]social','[action]boldgrid_primary_navigation' ),
		'11' => array( '[widget]boldgrid-widget-2' ),
		// '8' => array(  ),
		'13' => array( '[menu]tertiary' ),
	);

	/**
	 * Customizer Configs
	 */
	//* Added two more colors to palette
	$boldgrid_framework_configs['customizer-options']['colors']['enabled'] = true;
	$boldgrid_framework_configs['customizer-options']['colors']['defaults'] = array(
		array (
			'default' => true,
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#f9690e',
				'#ebf5ff',
				'#1a091c',
				'#322933',
				'#ffe2cc',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#20272f',
				'#e3eaef',
				'#b09537',
				'#d8c56e',
				'#c09b67',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#212121',
				'#716e7f',
				'#a91636',
				'#a91636',
				'#ffffff',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#83745d',
				'#dbe2e4',
				'#1a3c54',
				'#cc9f70',
				'#dbcab8',
			)
		),
		array (
			'format' => 'palette-primary',
			'neutral-color' => '#ffffff',
			'colors' => array(
				'#543f3b',
				'#f5eee9',
				'#f27360',
				'#f5a46c',
				'#f5eee9',
			),
		)
	);

	// Text Contrast Colors.
	$boldgrid_framework_configs['customizer-options']['colors']['light_text'] = '#ffffff';
	$boldgrid_framework_configs['customizer-options']['colors']['dark_text'] = '#333333';

	// Typography Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_family'] = 'Questrial';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_font_size'] = 20;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['headings_text_transform'] = 'none';

	// Typography Alternate Headings.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_family'] = 'Oswald';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_font_size'] = 14;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['alternate_headings_text_transform'] = 'none';

	// Typography Navigation.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_family'] = 'Questrial';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_font_size'] = 16;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['navigation_text_transform'] = 'lowercase';

	// Typography Body.
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_family'] = 'Open Sans';
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_font_size'] = 18;
	$boldgrid_framework_configs['customizer-options']['typography']['defaults']['body_line_height'] = 140;

	// Typography Tagline Classes.
	$boldgrid_framework_configs['template']['tagline-classes'] = 'h4 alt-font';

	// Typography Relationships.
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['h2.title-main'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 6.1,
	);
	$boldgrid_framework_configs['customizer-options']['typography']['selectors']['.entry-header h1.entry-title'] = array(
		'type' => 'headings',
		'round' => 'floor',
		'amount' => 1.6,
	);

	// Icons.
	$boldgrid_framework_configs['social-icons']['size'] = 'normal';

	// Menu Locations.
	$boldgrid_framework_configs['menu']['locations']['primary'] = "Main Menu";
	$boldgrid_framework_configs['menu']['locations']['secondary'] = 'Above Header';
	$boldgrid_framework_configs['menu']['locations']['tertiary'] = 'Below Header';
	$boldgrid_framework_configs['menu']['locations']['social'] = 'Upper Right';

	//* Set the header's container class.
	$boldgrid_framework_configs['template']['pages']['global']['header'] = 'container-fluid';

	//* Set the footer's container class.
	$boldgrid_framework_configs['template']['pages']['global']['footer'] = 'container-fluid';

	// Background.
	$boldgrid_framework_configs['customizer-options']['background']['defaults']['background_image'] = false;

	// Name Widget Areas.
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-1']['name'] = 'Above Site Title';
	$boldgrid_framework_configs['widget']['sidebars']['boldgrid-widget-2']['name'] = 'Below Site Title';

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
