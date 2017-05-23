<?php

 $databases['default']['default'] = array (
   'database' => 'd8_example',
   'username' => 'admin',
   'password' => $_ENV['D8_PASS'],
   'host' => 'localhost',
   'port' => '3306',
   'driver' => 'mysql',
   'prefix' => '',
   'collation' => 'utf8mb4_general_ci',
 );
$settings['hash_salt'] = '';
$settings['update_free_access'] = FALSE;
$settings['file_chmod_directory'] = 0775;
$settings['file_chmod_file'] = 0664;
$settings['file_public_path'] = 'sites/default/files';

/**
 * Private file path:
 *
 * A local file system path where private files will be stored. This directory
 * must be absolute, outside of the Drupal installation directory and not
 * accessible over the web.
 *
 * Note: Caches need to be cleared when this value is changed to make the
 * private:// stream wrapper available to the system.
 *
 * See https://www.drupal.org/documentation/modules/file for more information
 * about securing private files.
 */
# $settings['file_private_path'] = '';
$config['system.site']['name'] = 'HI DevNet';
$config['user.settings']['anonymous'] = 'Visitor';
$settings['install_profile'] = 'standard';


$config['system.performance']['fast_404']['exclude_paths'] = '/\/(?:styles)|(?:system\/files)\//';
$config['system.performance']['fast_404']['paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$config['system.performance']['fast_404']['html'] = '<!DOCTYPE html><html><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

/**
 * Load services definition file.
 */
$settings['container_yamls'][] = $app_root . '/' . $site_path . '/services.yml';

/**
 * The default list of directories that will be ignored by Drupal's file API.
 *
 * By default ignore node_modules and bower_components folders to avoid issues
 * with common frontend tools and recursive scanning of directories looking for
 * extensions.
 *
 * @see file_scan_directory()
 * @see \Drupal\Core\Extension\ExtensionDiscovery::scanDirectory()
 */
$settings['file_scan_ignore_directories'] = [
  'node_modules',
  'bower_components',
];
