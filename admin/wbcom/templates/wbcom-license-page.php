<div class="wrap">
	<div class="wbcom-bb-plugins-offer-wrapper">
		<div id="wb_admin_logo">
			<a href="https://wbcomdesigns.com/downloads/buddypress-community-bundle/?utm_source=pluginoffernotice&utm_medium=community_banner" target="_blank">
				<img src="<?php echo esc_url( BUDDYPRESS_ADS_ROTATOR_URL ) . 'admin/wbcom/assets/imgs/wbcom-offer-notice.png'; ?>">
			</a>
		</div>
	</div>
	<div class="wbcom-wrap wbcom-plugin-wrapper">
		<div class="wbcom_admin_header-wrapper">
			<div id="wb_admin_plugin_name">
				<?php esc_html_e( 'BuddyPress Ads', 'buddypress-ads-rotator' ); ?>
				<span>
				<?php
				/* translators: %s: */
				printf( __( 'Version %s', 'buddypress-ads-rotator' ), BUDDYPRESS_ADS_ROTATOR_VERSION ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				?>
				</span>
			</div>
			<?php echo do_shortcode( '[wbcom_admin_setting_header]' ); ?>
		</div>
		<div class="wbcom-all-addons-plugins-wrap">
		<h4 class="wbcom-support-section"><?php esc_html_e( 'Plugin License', 'buddypress-ads-rotator' ); ?></h4>
		<div class="wb-plugins-license-tables-wrap">
			<div class="wbcom-license-support-wrapp">
			<table class="form-table wb-license-form-table desktop-license-headings">
				<thead>
					<tr>
						<th class="wb-product-th"><?php esc_html_e( 'Product', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-version-th"><?php esc_html_e( 'Version', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-key-th"><?php esc_html_e( 'Key', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-status-th"><?php esc_html_e( 'Status', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-action-th"><?php esc_html_e( 'Action', 'buddypress-ads-rotator' ); ?></th>
					</tr>
				</thead>
			</table>
			<?php do_action( 'wbcom_add_plugin_license_code' ); ?>
			<table class="form-table wb-license-form-table">
				<tfoot>
					<tr>
						<th class="wb-product-th"><?php esc_html_e( 'Product', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-version-th"><?php esc_html_e( 'Version', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-key-th"><?php esc_html_e( 'Key', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-status-th"><?php esc_html_e( 'Status', 'buddypress-ads-rotator' ); ?></th>
						<th class="wb-action-th"><?php esc_html_e( 'Action', 'buddypress-ads-rotator' ); ?></th>
					</tr>
				</tfoot>
			</table>
		</div>
	</div>
	</div>
	</div><!-- .wbcom-wrap -->
</div><!-- .wrap -->
