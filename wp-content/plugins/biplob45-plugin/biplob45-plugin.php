<?php
/**
*  @package Biplob45Plugin
*/
/*
Plugin Name: Biplob45 Plugin
Plugin URI: https://github.com/Biplob45/WordPress-Plugin-Development
Description: This is my first attempt on writing a custom plugin.
Version: 1.0.0
Author: Md.Badiuzzaman "Biplob45" Biplob
Author URI: https://github.com/Biplob45/WordPress-Plugin-Development
License: GPLv2 or later
Text Domain: biplob45-plugin
*/ 

/*
This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is destributed in the hope that it will be useful, but WITHOUT ANY WARRENTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA 02110-1301, USA.

Copyright 2005-2015 Automatic, Inc.
*/

if ( ! defined('ABSPATH')) {
	die;
}

defined( 'ABSPATH' ) or die( 'Hey, you can\t access this file, you silly human!' );

if ( ! function_exists( 'add_action' ) ) {
	echo 'Hey, you can\t access this file, you silly human!';
	exit;
}