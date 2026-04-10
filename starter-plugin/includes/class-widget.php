<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Custom Elementor Pricing Widget
 */
class Dwl_Vibe_Pricing_Widget extends \Elementor\Widget_Base {

	public function get_name() {
		return 'dwl_vibe_pricing';
	}

	public function get_title() {
		return esc_html__( 'DWL Dynamic Pricing', 'dwl-vibe-test' );
	}

	public function get_icon() {
		return 'eicon-price-table';
	}

	public function get_categories() {
		return [ 'general' ];
	}

	/**
	 * Register widget controls (Content & Style).
	 * Candidate: Add controls here.
	 */
	protected function register_controls() {
		$this->start_controls_section(
			'section_content',
			[
				'label' => esc_html__( 'Content', 'dwl-vibe-test' ),
				'tab'   => \Elementor\Controls_Manager::TAB_CONTENT,
			]
		);

		// TODO: Candidate - Add controls (title, currency, API URL, popular index, cache TTL, etc.)
		// Example: $this->add_control( 'title', [...] );

		$this->end_controls_section();
	}

	/**
	 * Render widget output on the frontend.
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();

		// TODO: Candidate - Fetch JSON, apply caching, render HTML safely
		// Remember: sanitize inputs, escape outputs, handle API failures gracefully
		
		echo '<div class="dwl-pricing-table-wrapper">';
		echo '<p>' . esc_html__( 'Widget ready for implementation. Fetch & render pricing data here.', 'dwl-vibe-test' ) . '</p>';
		echo '</div>';
	}

	/**
	 * Render live preview in Elementor editor.
	 */
	protected function content_template() {
		// TODO: Candidate - Use Underscore.js template syntax <# #> for live preview
		?>
		<div class="dwl-pricing-table-wrapper">
			<h3>{{{ settings.title }}}</h3>
		</div>
		<?php
	}
}