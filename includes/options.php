<div class="wrap">
	<h1>
		<?php esc_html_e( 'Meeting Attendance for Slack &mdash; Options', 'meeting-attendance-for-slack' ); ?>
	</h1>

	<h2>
		<?php esc_html_e( 'Slack API keys', 'meeting-attendance-for-slack' ); ?>
	</h2>

	<p>
		<?php
		printf(
			__( 'The values below can only be obtained by <a href="%s">creating a Slack App</a>.', 'meeting-attendance-for-slack' ),
			esc_url( 'https://api.slack.com/apps' )
		);
		?>
	</p>

	<form action="" method="post">
		<table class="form-table">
			<tbody>
				<tr>
					<th scope="row">
						<label for="slack-attendance-id"><?php esc_html_e( 'Client ID', 'meeting-attendance-for-slack' ); ?></label>
					</th>
					<td>
						<input type="text" id="slack-attendance-id" name="slack-attendance-id" value="" >
					</td>
				</tr>

				<tr>
					<th scope="row">
						<label for="slack-attendance-secret"><?php esc_html_e( 'Client Secret', 'meeting-attendance-for-slack' ); ?></label>
					</th>
					<td>
						<input type="text" id="slack-attendance-secret" name="slack-attendance-secret" value="" >
					</td>
				</tr>
			</tbody>
		</table>

		<?php submit_button( esc_html__( 'Authorize this site with Slack', 'meeting-attendance-for-slack' ) ); ?>
	</form>

	<?php if ( false !== ( $token = get_option( 'slack_attendance_token', false ) ) ) { ?>

		<h2>
			<?php esc_html_e( 'Plugin actions', 'meeting-attendance-for-slack' ); ?>
		</h2>

		<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'options-general.php?page=slack-attendance&slack-action=slack-attendance-update-channels' ), 'fetch-slack-channel-list', '_update_slack_channel_list' ) ); ?>" class="button">
			<?php esc_html_e( 'Update the list of channels', 'meeting-attendance-for-slack' ); ?>
		</a>

		<a href="<?php echo esc_url( wp_nonce_url( admin_url( 'options-general.php?page=slack-attendance&slack-action=slack-attendance-auth-revoke' ), 'revoke-slack-auth', '_revoke_slack_auth_nonce' ) ); ?>" class="button">
			<?php esc_html_e( 'Disconnect the plugin from Slack', 'meeting-attendance-for-slack' ); ?>
		</a>

	<?php }?>
</div>