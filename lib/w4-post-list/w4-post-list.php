<?php
/*
 * Plugin Name: W4 Post List
 * Plugin URI: http://w4dev.com/w4-plugin/w4-post-list
 * Description: This plugin lets you create a list of Posts (including pages & custom post type), Terms (category, tag & custom taxonomy) or Terms + Posts Combo template. Outputs are completely customizable using Shortcode & raw HTML
 * Version: 1.7.9
 * Author: Shazzad Hossain Khan
 * Author URI: http://w4dev.com/about
**/

/*  Copyright 2011  Shazzad Hossain Khan  (email : sajib1223@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

# == Plugins Global Constant == #
define( 'W4PL_DIR', 			plugin_dir_path(__FILE__) );
define( 'W4PL_URL', 			plugin_dir_url(__FILE__) );
define( 'W4PL_BASENAME', 		plugin_basename( __FILE__ ));
define( 'W4PL_NAME', 			'W4 Post List' );
define( 'W4PL_SLUG', 			'w4pl' );
define( 'W4PL_VERSION', 		'1.7.9' );
define( 'W4PL_TXT_DOMAIN', 		'w4pl' );
define( 'W4PL_INC', 			W4PL_DIR . 'inc' );


/* must needed file */
include( W4PL_INC .'/core.php');
include( W4PL_INC .'/query.php');
include( W4PL_INC .'/postlist.php');
include( W4PL_INC .'/widget.php');

/* modules */
include( W4PL_INC .'/helper-posts.php');
include( W4PL_INC .'/helper-terms.php');
include( W4PL_INC .'/helper-tax_query.php');
include( W4PL_INC .'/helper-meta_query.php');
include( W4PL_INC .'/helper-style.php');

/* loads tinymce button */
include( W4PL_DIR .'/tinymice/tinymice.php');


/* admin required files */
#if( is_admin() ) :
	include( W4PL_INC .'/admin-forms.php');
	include( W4PL_INC .'/admin-lists.php');
	include( W4PL_INC .'/admin-docs.php');
#endif
?>