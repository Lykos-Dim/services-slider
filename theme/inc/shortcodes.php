<?php

/**
 * Table Affiliates shortcode
 */

if (!function_exists('services_slider_sc')) {
	function services_slider_sc($atts, $content = null)
	{
		$default_atts = array(
			'num'                => '10',
			'title'                => 'Explore our contemporary rooms',
			'subtitle'                => 'The Rooms',
		);

		// Filter default shortcode attributes
		$default_atts = apply_filters('motivar_services_slider_default_atts', $default_atts);
		$atts         = shortcode_atts($default_atts, $atts);

		$post_per_page = $atts['num'];
		$title = $atts['title'];
		$subtitle = $atts['subtitle'];
		$html = '';

		// Setup query args
		$aff_query_args = array(
			'post_type'      => 'post',
			'posts_per_page' => $post_per_page,
			'post_status'    => 'publish',
		);

		$aff_query_args = apply_filters('motivar_services_slider_query_args', $aff_query_args, $atts);

		$aff_query = new WP_Query($aff_query_args);
		
		if ($aff_query->have_posts()) {
		
			$css_class_output = 'services-slider--wrapper';
		
			ob_start();
			echo '<section class="' . esc_attr($css_class_output) . '">';
			echo '    <div class="services-slider__container">';
			echo '        <div class="services-slider__top">';
			if ( !empty( $subtitle ) || !empty( $title ) ) :
				echo '<div class="services-slider--title">';
				if ( !empty( $subtitle )  ) :
					echo '<h3>' . esc_html( $subtitle ) . '</h3>';
				endif;
				if ( !empty( $title ) ) :
				echo '<h2>' . esc_html( $title ) . '</h2>';
				endif;
				echo '</div>';
			endif;
			echo '            <div class="services-slider--arrows services-slider--arrows__big js-services-slider__arrows"><button class="arrow arrow--prev js-arrow-prev"><i class="fa fa-arrow-left"></i></button><button class="arrow js-arrow-next"><i class="fa fa-arrow-right"></i></button></div>';
			echo '        </div>';
			echo '    <div class="js-servises-slider">';
		
			while ($aff_query->have_posts()) {
				$aff_query->the_post();
		
				$template_parts_args = array(
					'rid'                => get_the_ID(),
				);
		
				get_template_part('template-parts/shortcodes/services-slider-item', null, $template_parts_args);
		
			}
		
			echo '    </div>';
			echo '	<div class="services-slider--arrows services-slider--arrows__small js-services-slider__arrows"><button class="arrow arrow--prev js-arrow-prev"><i class="fa fa-arrow-left"></i></button><button class="arrow js-arrow-next"><i class="fa fa-arrow-right"></i></button></div>';
			echo '</section>';
			$html = ob_get_clean();
		
		}
		wp_reset_postdata();

		// Return HTML
		return apply_filters('motivar_services_slider_html_output', $html);
	}
}




// Register shortcode
add_shortcode('services_slider', 'services_slider_sc');
