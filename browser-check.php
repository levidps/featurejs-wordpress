<?php
/**
 * Plugin Name: FeatureJS Browser Check
 * Plugin URI:
 * Description: A plugin for checking that a browser is newer than IE 8 and has CSS Transform. This will add an overlay for directing the user to download a newer browser.
 * Version: 1.0
 * Author: LeviDPS
 * Author URI: https://levidps.com/
 * License: GPL2
 */

/*  Copyright 2017 LeviDPS

	This program is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License, version 2, as
	published by the Free Software Foundation.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program; if not, write to the Free Software
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	CREDITS
	Uses FEATURE.JS 1.0.1, A Fast, simple and lightweight browser feature
	http://featurejs.com 
	Author: @viljamis, https://viljamis.com
*/

if ( !defined( 'ABSPATH' ) ) exit;

require plugin_dir_path( __FILE__ ) . '/dist/init.php';
