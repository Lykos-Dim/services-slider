<?php

/**
 * Table Affiliates shortcode
 */

if (!function_exists('services_slider_sc')) {
	function services_slider_sc($atts, $content = null)
	{
		$default_atts = array(
			'num'                => '10',
		);

		// Filter default shortcode attributes
		$default_atts = apply_filters('motivar_services_slider_default_atts', $default_atts);
		$atts         = shortcode_atts($default_atts, $atts);

		$post_per_page = $atts['num'];
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

			$css_class_output = 'ss-wrapper';

			ob_start();
			echo '<div class="' . esc_attr($css_class_output) . '">';

			while ($aff_query->have_posts()) {
				$aff_query->the_post();

				$template_parts_args = array(
					'rid'                => get_the_ID(),
				);

				get_template_part('template-parts/shortcodes/services-slider-item', null, $template_parts_args);

			}

			echo '</div>';
			$html = ob_get_clean();

		}
		wp_reset_postdata();

		// Return HTML
		return apply_filters('motivar_services_slider_html_output', $html);
	}
}




// Register shortcode
add_shortcode('services_slider', 'services_slider_sc');
