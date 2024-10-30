<?php
/**
 * Created by PhpStorm.
 * User: Marius
 * Date: 08.10.2016
 * Time: 17:57
 */

if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

// Remove all our options
delete_option( 'slack_attendance_token' );
delete_option( 'slack_attendance_id' );
delete_option( 'slack_attendance_secret' );

// Make sure no transients are left
delete_transient( 'slack_attendance_users' );
delete_transient( 'slack_attendance_channels' );

// Run a custom query to remove any post meta
global $wpdb;
$wpdb->query( "
	DELETE FROM
		" . $wpdb->postmeta . "
	WHERE
		meta_key LIKE 'slack_attendance_%'
" );