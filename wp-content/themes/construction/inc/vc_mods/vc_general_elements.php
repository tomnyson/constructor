<?php

/*------------------------------------------------------*/
/* BUTTON
/*------------------------------------------------------*/
vc_map( array(
	"name"                      => __("Button", "js_composer"),
	"base"                      => 'vc_button',
	"icon"                      => "icon-wpb-ui-button",
	"category"                  => __('WPC Elements', 'js_composer'),
	"description"               => __('Eye catching button', 'js_composer'),
	"save_always" 				=> true,
	"params"                    => array(
		array(
			'type'        => 'textfield',
			'heading'     => __( 'Text on the button', 'js_composer' ),
			'holder'      => 'button',
			'class'       => 'wpb_button',
			'param_name'  => 'title',
			'value'       => __( 'Text on the button', 'js_composer' ),
			'description' => __( 'Text on the button.', 'js_composer' )
		),
		array(
			'type'        => 'vc_link',
			'heading'     => __( 'URL (Link)', 'js_composer' ),
			'param_name'  => 'link',
			'description' => __( 'Button link.', 'js_composer' ),
			//"dependency"  => Array('element' => "link", 'value' => array('custom'))
		),
		array(
			'type'               => 'dropdown',
			'heading'            => __( 'Button Color', 'js_composer' ),
			'param_name'         => 'color',
			'description'        => __( 'Button color.', 'js_composer' ),
			'value'              => array(
				__("Light", "js_composer")           => "light",
				__("Ghost", "js_composer")           => "ghost",
				__("Dark", "js_composer")            => "dark",
				__("Primary Color", "js_composer")   => "primary",
				__("Secondary Color", "js_composer") => "secondary",
				__("Custom BG Color", "js_composer") => "custom",
			)
		),
		array(
			"type"       => "colorpicker",
			"class"      => "",
			"heading"    => __("Custom Button BG Color","js_composer"),
			"param_name" => "button_custom_color",
			"value"      => "",
			"dependency" => Array('element' => "color", 'value' => array('custom'))
		),
		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Size', 'js_composer' ),
			'param_name'  => 'size',
			'description' => __( 'Button size.', 'js_composer' ),
			'value'       => array(
				__("Regular Size", "js_composer") => "regular",
				__("Large Size", "js_composer")   => "large",
				__("Small Size", "js_composer")   => "small"
			)
		),

		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Position', 'js_composer' ),
			'param_name'  => 'position',
			'description' => __( 'Button Position.', 'js_composer' ),
			'value'       => array(
				__("Left", "js_composer") => "left",
				__("Center", "js_composer")   => "center",
				__("Right", "js_composer")   => "right"
			)
		),


		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Custom Margin Top","js_composer"),
			"param_name"	=> "margin_top",
			"value"			=> "",
			"description" 	=> "Don't include \"px\" in your string. e.g \"50\"",
		),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Custom Margin Bottom","js_composer"),
			"param_name"	=> "margin_bottom",
			"value"			=> "",
			"description" 	=> "Don't include \"px\" in your string. e.g \"50\"",
		),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Custom Margin Left","js_composer"),
			"param_name"	=> "margin_left",
			"value"			=> "",
			"description" 	=> "Don't include \"px\" in your string. e.g \"50\"",
		),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Custom Margin Right","js_composer"),
			"param_name"	=> "margin_right",
			"value"			=> "",
			"description" 	=> "Don't include \"px\" in your string. e.g \"50\"",
		),
		array(
			'type'        => 'textfield',
			'heading'     => __( 'Extra class name', 'js_composer' ),
			'param_name'  => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		)
	),
	'js_view'  => 'VcButtonView'
) );
/*------------------------------------------------------*/
/* ICON BOX
/*------------------------------------------------------*/
vc_map( array(
	"name"                    => __("Icon Box", "js_composer"),
	"base"                    => 'wpc_icon_box',
	"icon"                    => "",
	"show_settings_on_create" => true,
	"category"                => __('WPC Elements', 'js_composer'),
	"controls"                => "full",
	"save_always" 			  => true,
	"params"                  => array(

		array(
			"type"        => "textfield",
			"class"       => "",
			"heading"     => __("Heading", "js_composer"),
			"param_name"  => "title",
			"admin_label" => true,
			"value"       => "Icon Box Heading",
			"description" => __("Heading for this icon box.", "js_composer"),
		),
		array(
			"type"        => "textarea",
			"class"       => "",
			"heading"     => __("Description", "js_composer"),
			"param_name"  => "desc",
			"value"       => "Icon box description",
			"description" => __("Description for this icon box.", "js_composer")
		),
		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Text Align', 'js_composer' ),
			'param_name'  => 'position',
			'value'       => array(
				__("Left", "js_composer")   => "left",
				__("Center", "js_composer") => "center",
				__("Right", "js_composer")  => "right"
			)
		),
		array(
			"type" => "vc_link",
			"class" => "",
			"heading" => __("Add Link", "js_composer"),
			"param_name" => "link",
			"value" => "",
			"description" => __("Link that will be applied to this icon box.", "js_composer")
		),
		array(
			"type"       => "dropdown",
			"class"      => "",
			"heading"    => __("Apply link to:", "js_composer"),
			"param_name" => "read_more",
			"value"      => array(
				"Box Title"         => "title",
				"Display Read More" => "more",
			),
			"description" => __("Select whether to use color for icon or not.", "js_composer")
		),
		array(
			"type"        => "textfield",
			"class"       => "",
			"heading"     => __("Read More Text", "js_composer"),
			"param_name"  => "read_more_text",
			"value"       => "",
			"description" => __("Customize the read more text.", "js_composer"),
			"dependency"  => Array("element" => "read_more","value" => array("more")),
		),
		array(
			"type"       => "dropdown",
			"class"      => "",
			"heading"    => __("Icon to display:", "js_composer"),
			"param_name" => "icon_type",
			"value"      => array(
				"Font Awesome" => "font-awesome",
				"Custom Image" => "custom",
			),
			"description" => __("Select which icon you would like to use", "js_composer")
		),
		array(
			"type"        => "icon",
			"class"       => "",
			"heading"     => __("Select Icon:", "js_composer"),
			"param_name"  => "icon",
			"value"       => "twitter",
			"description" => __("Select the icon from the list.", "js_composer"),
			"dependency" => Array("element" => "icon_type","value" => array("font-awesome")),
		),
		array(
			"type"        => "attach_image",
			"class"       => "",
			"heading"     => __("Upload Custom Image:", "js_composer"),
			"param_name"  => "icon_img",
			"value"       => "",
			"description" => __("Upload the custom image.", "js_composer"),
			"dependency"  => Array("element" => "icon_type","value" => array("custom")),
		),
		array(
			'type'               => 'dropdown',
			'heading'            => __( 'Icon Color', 'js_composer' ),
			'param_name'         => 'color_option',
			"dependency" => Array("element" => "icon_type","value" => array("font-awesome")),
			'value'              => array(
				__("Primary Color", "js_composer")   => "primary",
				__("Secondary Color", "js_composer") => "secondary",
				__("Custom Color", "js_composer")    => "custom",
			)
		),
		array(
			"type"       => "colorpicker",
			"class"      => "",
			"heading"    => __("Custom Icon Color","js_composer"),
			"param_name" => "icon_custom_color",
			"dependency" => Array("element" => "icon_type","value" => array("font-awesome")),
			"value"      => "",
			"dependency" => Array('element' => "color_option", 'value' => array('custom'))
		),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Icon Size in Pixel","js_composer"),
			"param_name"	=> "icon_size",
			"dependency" => Array("element" => "icon_type","value" => array("font-awesome")),
			"value"			=> "80",
			"description" 	=> "Don't include \"px\" in your string. e.g \"50\"",
		),

		array(
			"type" => "textfield",
			"class" => "",
			"heading" => __("Extra Class", "js_composer"),
			"param_name" => "el_class",
			"value" => "",
			"description" => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		),
	)
)
);
function wpc_shortcode_icon_box($atts, $content = null) {
	// extract(shortcode_atts(array(
	// 	'title'             => '',
	// 	'desc'              => '',
	// 	'position'			=> '',
	// 	'link'              => '',
	// 	'read_more'         => '',
	// 	'read_more_text'    => '',
	// 	'icon_type'         => '',
	// 	'icon'              => '',
	// 	'icon_img'          => '',
	// 	'color_option'      => '',
	// 	'icon_custom_color' => '',
	// 	'icon_size'         => '',
	// 	'el_class'          => ''
	// ), $atts));
	$atts = vc_map_get_attributes( 'wpc_icon_box', $atts );
	extract( $atts );

	$output = $icon_styles = $imgurl = $position_class = null;

	if ( $link != '' ) $href = vc_build_link($link);

	if ( $position == 'right' ) $position_class = ' text-right';
	if ( $position == 'center' ) $position_class = ' text-center';

	$output .= '
	<div class="iconbox-wrapper '. esc_attr($el_class) . $position_class .'">';

		if ( $icon_type == 'font-awesome' ) {
		$output .= '
		<div class="iconbox-icon">';

				$icon_class = $icon_styles = '';
				if ( $color_option == 'primary' ) $icon_class = 'primary';
				if ( $color_option == 'secondary' ) $icon_class = 'secondary';
				if ( $color_option == 'custom' && $icon_custom_color !== '' ) {
					$icon_class = '';
					$icon_styles .= 'color: '.$icon_custom_color.';';
				}
				if ( $icon_size ) $icon_styles .= 'font-size:'. $icon_size .'px;';

				$output .= '
				<i class="fa fa-'. $icon .' '. $icon_class .'" style="'. $icon_styles .'"></i>';

		$output .= '
		</div>';

		} else {
			$imgurl = wp_get_attachment_image_src( $icon_img, 'small-thumb');

			$output .= '
			<div class="iconbox-image">';

				$output .= '
				<img src="'. $imgurl[0] .'">';

			$output .= '
			</div>';
		}

		if ( $title ) $output .= '
		<h4 class="iconbox-heading">';
			if ( $link !== '' && $read_more == 'title' ) {
				$output .= '
				<a href="'. $href['url'] .'">'. wp_kses_post($title) .'</a>';
			} else {
				$output .= wp_kses_post($title);
			}
		if ( $title ) $output .= '
		</h4>';

		if ( $desc !== '' ) {
			$output .= '
			<div class="iconbox-desc">';
				$output .= '
				<p>'. wp_kses_post($desc) .'</p>';

				if ( $link != '' && $read_more == 'more' ) {
					if ( $read_more_text !== '' ) {
						$output .= '
						<a class="iconbox-read-more" href="'. $href['url'] .'">'. esc_attr($read_more_text) .' <i class="fa fa-angle-right"></i></a>';
					}
				}

			$output .= '
			</div>';
		}

	$output .= '
	</div>';

	return $output;
}
add_shortcode('wpc_icon_box', 'wpc_shortcode_icon_box');


/*------------------------------------------------------*/
/* CHILD PAGE
/*------------------------------------------------------*/
$page_ids = get_all_page_ids();
$pages = array();
for ( $i = 0; $i < count($page_ids); $i++ ) {
	$pages[get_the_title($page_ids[$i])] = $page_ids[$i];
}

vc_map( array(
	"name"                      => __("Page Children", "js_composer"),
	"base"                      => 'wpc_childpage',
	"category"                  => __('WPC Elements', 'js_composer'),
	"description"               => __('Display list page children', 'js_composer'),
	"save_always" 				=> true,
	"params"                    => array(
		array(
			'type'        => 'textarea',
			'holder'      => 'h2',
			'heading'     => __( 'Widget Title', 'js_composer' ),
			'param_name'  => 'widget_title',
			'value'       => '',
			'description' => __('What text use as widget title. Leave blank if no title is needed.', 'js_composer')
		),
		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Select your parent Page', 'js_composer' ),
			'param_name'  => 'parrent_page_id',
			'description' => __( 'The builder item will use parrent page ID to get page childen of that page.', 'js_composer' ),
			'value'       => $pages
		),

		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Order', 'js_composer' ),
			'param_name'  => 'order',
			'description' => __( 'Ascending or descending order', 'js_composer' ),
			'default'	  => 'DESC',
			'value'       => array(
				__("DESC", "js_composer") => "DESC",
				__("ASC", "js_composer") => "ASC"
			)
		),

		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Orderby', 'js_composer' ),
			'param_name'  => 'orderby',
			'description' => __( 'Sort retrieved posts/pages by parameter', 'js_composer' ),
			'default'	  => 'none',
			'value'       => array(
				__("None", "js_composer")       => "none",
				__("ID", "js_composer")         => "ID",
				__("Title", "js_composer")      => "title",
				__("Name", "js_composer")       => "name",
				__("Random", "js_composer")     => "rand",
				__("Date", "js_composer")       => "date",
				__("Page Order", "js_composer") => "menu_order"
			)
		),

		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Specify page NOT to retrieve","js_composer"),
			"param_name"	=> "exclude",
			"value"			=> "",
			"description" 	=> "Use post ids, e.g: 16, 28",
		),
		// array(
		// 	"type"			=> "textfield",
		// 	"class"			=> "",
		// 	"heading"		=> __("Parent Page ID","js_composer"),
		// 	"param_name"	=> "parrent_page_id",
		// 	"value"			=> "",
		// 	"description" 	=> "Enter the page ID you want to get children of it.",
		// ),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Number of posts","js_composer"),
			"param_name"	=> "number",
			"value"			=> "9",
			"description" 	=> "How many post to show?",
		),

		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Display Mode', 'js_composer' ),
			'param_name'  => 'layout',
			'description' => __( 'The layout your page children being display', 'js_composer' ),
			'value'       => array(
				__("Grid", "js_composer")     => "grid",
				__("Carousel", "js_composer") => "carousel"
			)
		),

		array(
			"type"        => "checkbox",
			"heading"     => __("Carousel Autoplay","js_composer"),
			"value"       => array( __("Yes.","js_composer") => "yes" ),
			"param_name"  => "carousel_autoplay",
			"dependency" => Array('element' => "layout", 'value' => array('carousel'))
		),

		array(
			"type"			 => "textfield",
			"class"			 => "",
			"heading"		 => __("Carousel Autoplay Speed","js_composer"),
			"param_name"	 => "carousel_autoplay_speed",
			"value"			 => "3000",
			'description'    => __( 'Carousel Autoplay Speed in millisecond', 'js_composer' ),
			"dependency"     => Array('element' => "layout", 'value' => array('carousel'))
		),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Carousel Speed","js_composer"),
			"param_name"	=> "carousel_speed",
			'description'    => __( 'Carousel Speed in millisecond', 'js_composer' ),
			"value"			=> "300",
			"dependency" => Array('element' => "layout", 'value' => array('carousel'))
		),

		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Column', 'js_composer' ),
			'param_name'  => 'column',
			'description' => __( 'How many column will be display on a row?', 'js_composer' ),
			'default'	  => '3',
			'value'       => array(
				__("2 Columns", "js_composer") => "2",
				__("3 Columns", "js_composer") => "3",
				__("4 Columns", "js_composer") => "4",
				__("5 Columns", "js_composer") => "5"
			)
		),

		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Read More text","js_composer"),
			"param_name"	=> "readmore_text",
			"value"			=> "Read More",
			"description" 	=> "Custom your read more text, e.g. Read More, View Profile ...",
		),
		array(
			'type'        => 'textfield',
			'heading'     => __( 'Extra class name', 'js_composer' ),
			'param_name'  => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		)
	),
) );
function wpc_shortcode_childpage($atts, $content = null) {
	$atts = vc_map_get_attributes( 'wpc_childpage', $atts );
	extract( $atts );
	if ( $exclude ) {
		$exclude = array($exclude);
	} else {
		$exclude = '';
	}
	$output = null;
	$output .= '
	<div class="child-page-wrapper '. esc_attr($el_class) .'">';

		if ( $widget_title ) $output .= '
		<h3 class="builder-heading">'. esc_attr($widget_title) .'</h3>';

			$output .= wpcharming_list_child_pages( $parrent_page_id, $order, $orderby, $exclude, $layout, $column, $number, $readmore_text, $carousel_autoplay, $carousel_autoplay_speed, $carousel_speed );

	$output .= '
	</div>';

	return $output;
}
add_shortcode('wpc_childpage', 'wpc_shortcode_childpage');

/*------------------------------------------------------*/
/* RECENT NEWS
/*------------------------------------------------------*/
vc_map( array(
	"name"                      => __("Recent News", "js_composer"),
	"base"                      => 'wpc_recent_news',
	"category"                  => __('WPC Elements', 'js_composer'),
	"description"               => __('Recent Blog Posts', 'js_composer'),
	"save_always" 				=> true,
	"params"                    => array(
		array(
			'type'        => 'textarea',
			'holder'      => 'h2',
			'heading'     => __( 'Widget Title', 'js_composer' ),
			'param_name'  => 'widget_title',
			'value'       => '',
			'description' => __('What text use as widget title. Leave blank if no title is needed.', 'js_composer')
		),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Number of posts to show","js_composer"),
			"param_name"	=> "number",
			"value"			=> "3",
			"description" 	=> "How many post to show?",
		),

		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Display Mode', 'js_composer' ),
			'param_name'  => 'layout',
			'description' => __( 'The layout your page children being display', 'js_composer' ),
			'value'       => array(
				__("Grid", "js_composer")     => "grid",
				__("Carousel", "js_composer") => "carousel"
			)
		),

		array(
			"type"        => "checkbox",
			"heading"     => __("Carousel Autoplay","js_composer"),
			"value"       => array( __("Yes.","js_composer") => "yes" ),
			"param_name"  => "carousel_autoplay",
			"dependency" => Array('element' => "layout", 'value' => array('carousel'))
		),

		array(
			"type"			 => "textfield",
			"class"			 => "",
			"heading"		 => __("Carousel Autoplay Speed","js_composer"),
			"param_name"	 => "carousel_autoplay_speed",
			"value"			 => "3000",
			'description'    => __( 'Carousel Autoplay Speed in millisecond', 'js_composer' ),
			"dependency"     => Array('element' => "layout", 'value' => array('carousel'))
		),
		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Carousel Speed","js_composer"),
			"param_name"	=> "carousel_speed",
			'description'    => __( 'Carousel Speed in millisecond', 'js_composer' ),
			"value"			=> "300",
			"dependency" => Array('element' => "layout", 'value' => array('carousel'))
		),

		array(
			'type'        => 'dropdown',
			'heading'     => __( 'Column', 'js_composer' ),
			'param_name'  => 'column',
			'description' => __( 'How many column will be display on a row?', 'js_composer' ),
			'default'	  => '3',
			'value'       => array(
				__("2 Columns", "js_composer") => "2",
				__("3 Columns", "js_composer") => "3",
				__("4 Columns", "js_composer") => "4",
				__("5 Columns", "js_composer") => "5"
			)
		),

		array(
			"type"			=> "textfield",
			"class"			=> "",
			"heading"		=> __("Read More text","js_composer"),
			"param_name"	=> "readmore_text",
			"value"			=> "Read More",
			"description" 	=> "Custom your read more text, e.g. Read More, View Profile ...",
		),
		array(
			'type'        => 'textfield',
			'heading'     => __( 'Extra class name', 'js_composer' ),
			'param_name'  => 'el_class',
			'description' => __( 'If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.', 'js_composer' )
		)
	),
) );
function wpc_shortcode_recent_news($atts, $content = null) {
	$atts = vc_map_get_attributes( 'wpc_recent_news', $atts );
	extract( $atts );

	if ( $readmore_text == '' ) {
		$readmore_text = __('Read More', 'wpcharming');
	}

	$col_class = $thumbnail = '';
	if ( $column == 2 ) {
		$col_class = "grid-sm-6";
	} elseif ( $column == 3 ){
		$col_class = "grid-sm-6 grid-md-4";
	} elseif ( $column == 4 ) {
		$col_class = "grid-sm-6 grid-md-3";
	} else {
		$col_class = "grid-sm-6 grid-md-4";
	}

	$slick_rtl = 'false';
	if ( is_rtl() ){
		$slick_rtl = 'true';
	}

	if ( $carousel_autoplay == 'yes' ) {
		$carousel_autoplay = 'true';
	} else {
		$carousel_autoplay = 'false';
	}

	if ( $carousel_autoplay_speed == '' ) {
		$carousel_autoplay_speed = '3000';
	}

	if ( $carousel_speed == '' ) {
		$carousel_speed = '300';
	}

	$count  = 0;
	$args = array(
		'posts_per_page' => $number,
		'post_type'      => 'post',
		'post_status'    => 'publish'
		//'nopaging' => true
	);
	$recent_posts = new WP_Query( $args );

	$output = null;
	$output .= '
	<div class="child-page-wrapper recent-news-wrapper '. esc_attr($el_class) .'">';

		if ( $widget_title ) $output .= '
		<h3 class="builder-heading">'. esc_attr($widget_title) .'</h3>';

			$carousel_class = '';
			if ( $layout == 'carousel' ) {
				$carousel_class = 'recent-news-carousel-'.uniqid();
					$output .= '
					<script type="text/javascript">
						jQuery(document).ready(function(){
							"use strict";
							jQuery(".'. $carousel_class .'").slick({
								rtl: '. $slick_rtl .',
								slidesToShow: '. $column .',
								autoplay: '. $carousel_autoplay .' ,
		                        autoplaySpeed: '. $carousel_autoplay_speed .' ,
		                        speed: '. $carousel_speed .' ,
								slidesToScroll: 1,
								draggable: false,
								prevArrow: "<span class=\'carousel-prev\'><i class=\'fa fa-angle-left\'></i></span>",
		        				nextArrow: "<span class=\'carousel-next\'><i class=\'fa fa-angle-right\'></i></span>",
		        				responsive: [{
								    breakpoint: 1024,
								    settings: {
								    slidesToShow: '. $column .'
								    }
								},
								{
								    breakpoint: 600,
								    settings: {
								    slidesToShow: 2
								    }
								},
								{
								    breakpoint: 480,
								    settings: {
								    slidesToShow: 1
								    }
								}]
							});
						});
					</script>';
			}

			if ( $recent_posts->have_posts() ) :

				$output .= '
				<div class="grid-wrapper grid-'.$column.'-columns grid-row '. $carousel_class .'">';

				while ( $recent_posts->have_posts() ) : $recent_posts->the_post(); $count++;

					$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
					$time_string = sprintf( $time_string,
						esc_attr( get_the_date( 'c' ) ),
						esc_html( get_the_date() ),
						esc_attr( get_the_modified_date( 'c' ) ),
						esc_html( get_the_modified_date() )
					);

					$num_comments = get_comments_number(); // get_comments_number returns only a numeric value

					if ( comments_open() ) {
						if ( $num_comments == 0 ) {
							$comments = __('No Comments', 'wpcharming');
						} elseif ( $num_comments > 1 ) {
							$comments = $num_comments . __(' Comments', 'wpcharming');
						} else {
							$comments = __('1 Comment', 'wpcharming');
						}
						$write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
					} else {
						$write_comments =  __('Comments off.', 'wpcharming');
					}

					$output .= '
					<div class="grid-item '. $col_class .'">';

						if( has_post_thumbnail() ) {
						$output .= '
						<div class="grid-thumbnail">
							<a href="'. get_the_permalink() .'" title="'. get_the_title() .'">'. get_the_post_thumbnail( get_the_ID(), 'medium-thumb') .'</a>
						</div>';
						}

						$output .= '
						<h4 class="grid-title"><a href="'. get_the_permalink() .'" rel="bookmark">'. get_the_title() .'</a></h4>

						<div class="recent-news-meta">
							<span class="post-date"><i class="fa fa-file-text-o"></i> '. $time_string .'</span>
							<span class="comments-link"><i class="fa fa-comments-o"></i> '. $write_comments .'</span>
						</div>

						<p>'. get_the_excerpt() .'</p>

						<a class="btn btn-light btn-small" href="'. get_the_permalink() .'" title="'. get_the_title() .'">'. esc_attr($readmore_text) .'</a>

					</div>
					';
					if ( $layout == 'grid' ) {
						if ( $count % $column == 0 ) $output .= '
						<div class="clear"></div>';
					}

				endwhile;

				$output .= '
				</div>';

				else:
					$output .= __( 'Sorry, there is no child pages under your selected page.', 'wpcharming' );
			endif;

			wp_reset_postdata();

	$output .= '
	</div>';

	return $output;
}
add_shortcode('wpc_recent_news', 'wpc_shortcode_recent_news');
