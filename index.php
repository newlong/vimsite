<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);
//var_dump($_SERVER['SERVER_NAME']);

if(strpos($_SERVER['SERVER_NAME'], 'ty168cc.com') !== false){
    exit( file_get_contents('ty_index.htm'));
}
/** Loads the WordPress Environment and Template */
require('./wp-blog-header.php');
