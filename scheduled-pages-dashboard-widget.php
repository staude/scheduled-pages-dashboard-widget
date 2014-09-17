<?php
/*
Plugin Name: Scheduled Pages Dashboard Widget
Plugin URI: http://staude.net/wordpress/plugins/ScheduledPagesDashboardWidget
Description: Implements a Widget to show the Wordpress scheduled pages in the Dashboard
Text Domain: scheduled-pages-dashboard-widget
Domain Path: languages
Author: Frank Staude
Version: 0.1
Author URI: http://www.staude.net/
Compatibility: WordPress 4.0
License: GPLv2
*/

if ( !class_exists( 'scheduled_pages_dashboard_widget' ) ) {

    include_once dirname( __FILE__ ) .'/class-scheduled-pages-dashboard-widget.php';

    $scheduled_pages_dashboard_widget = new scheduled_pages_dashboard_widget();

}