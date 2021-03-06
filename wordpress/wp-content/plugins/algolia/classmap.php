<?php

if ( ! defined( 'ALGOLIA_PATH' ) ) {
	exit();
}

require_once ALGOLIA_PATH . 'vendor/autoload.php';

require_once ALGOLIA_PATH . 'includes/class-algolia-activator.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-deactivator.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-api.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-autocomplete-config.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-logger.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-plugin.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-search.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-settings.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-task.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-task-dispatcher.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-task-queue.php';
require_once ALGOLIA_PATH . 'includes/class-algolia-task-queue-loopback-async.php';

require_once ALGOLIA_PATH . 'includes/indices/class-algolia-index.php';
require_once ALGOLIA_PATH . 'includes/indices/class-algolia-searchable-posts-index.php';
require_once ALGOLIA_PATH . 'includes/indices/class-algolia-posts-index.php';
require_once ALGOLIA_PATH . 'includes/indices/class-algolia-terms-index.php';
require_once ALGOLIA_PATH . 'includes/indices/class-algolia-users-index.php';

require_once ALGOLIA_PATH . 'includes/watchers/class-algolia-changes-watcher.php';
require_once ALGOLIA_PATH . 'includes/watchers/class-algolia-post-changes-watcher.php';
require_once ALGOLIA_PATH . 'includes/watchers/class-algolia-term-changes-watcher.php';
require_once ALGOLIA_PATH . 'includes/watchers/class-algolia-user-changes-watcher.php';

require_once ALGOLIA_PATH . 'public/class-algolia-public.php';

if ( is_admin() ) {
	require_once ALGOLIA_PATH . 'admin/class-algolia-admin.php';
	require_once ALGOLIA_PATH . 'admin/class-algolia-admin-page-autocomplete.php';
	require_once ALGOLIA_PATH . 'admin/class-algolia-admin-page-indexing.php';
	require_once ALGOLIA_PATH . 'admin/class-algolia-admin-page-logs.php';
	require_once ALGOLIA_PATH . 'admin/class-algolia-admin-page-native-search.php';
	require_once ALGOLIA_PATH . 'admin/class-algolia-admin-page-settings.php';
}
