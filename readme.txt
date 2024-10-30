=== Meeting Attendance for Slack ===
Contributors: Clorith
Tags: slack
Donate link: https://www.paypal.me/clorith
Tested up to: 4.6
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Get attendances for meetings held on Slack

== Description ==
Simplify the task of keeping attendance lists of your Slack meetings.

This plugin introduces a shortcode for displaying attendance lists from a Slack archive based on the start and end times you specify.

Once enabled and authorized as a Slack App, there will also be a TinyMCE button for adding attendance, it expects the archive link to the start and end of the meeting times, and also provides a dropdown of available channels.

You can also define if reactions are counted as legitimate attendance (you may be interested in those who contribute to the discussion more than anyone that just showed up).

If the plugin is network enabled, the Network Administrator needs to authorize the Slack App, and the plugin becomes available to all sites.

You are requires to create a Slack App at https://api.slack.com/apps for this plugin to be used as per the installation instructions.

The plugin is not created by, affiliated with, or supported by Slack Technologies, Inc.

== Installation ==
1. Upload the `meeting-attendance-for-slack` folder to the `/wp-content/plugins/` directory
2. Activate the plugin through the 'Plugins' menu in WordPress
3. Find the `Slack Attendance` options under the `Settings` menu
4. Sign up for a Slack App at https://api.slack.com/apps (Remember to add your own site to the "OAuth & Permissions" page of Slack)
5. Supply the Client ID and Client Secret to authorize the plugin
6. The Slack Attendance button is now available in the post editor

== Screenshots ==
1. Create your slack app and pick the appropriate team
2. Add your website to the oAuth permission list
3. The Client ID and Client Secret needed for the plugin authorization

== Changelog ==
= 1.0.1 =
* Extend the `slack_attendance_user_real_name` filter to include the user object for more posibilities