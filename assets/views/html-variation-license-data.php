<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<tr class="show_if_is_api_product_license">
	<td>
		<div>
			<?php woocommerce_wp_text_input( array(
				'id'                => '_variation_license_activation_limit_' . $loop,
				'name'              => '_variation_license_activation_limit[' . $loop . ']',
				'label'             => __( 'License activation limit', 'wp-plugin-licencing' ) . ':',
				'placeholder'       => __( 'Inherit from parent', 'wp-plugin-licencing' ),
				'value'             => get_post_meta( $variation->ID, '_license_activation_limit', true ),
				'type'              => 'number',
				'class'             => '',
				'custom_attributes' => array(
					'min'  => '',
					'step' => '1'
				)
			) ); ?>
		</div>
	</td>
	<td>
		<div>
			<?php woocommerce_wp_text_input( array(
				'id'                => '_variation_license_expiry_days_' . $loop,
				'name'              => '_variation_license_expiry_days[' . $loop . ']',
				'label'             => __( 'License expiry days', 'wp-plugin-licencing' ) . ':',
				'placeholder'       => __( 'Inherit from parent', 'wp-plugin-licencing' ),
				'value'             => get_post_meta( $variation->ID, '_license_expiry_days', true ),
				'type'              => 'number',
				'class'             => '',
				'custom_attributes' => array(
					'min'  => '',
					'step' => '1'
				)
			) ); ?>
		</div>
	</td>
</tr>
