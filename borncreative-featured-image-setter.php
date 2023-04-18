<?php
/*
	Plugin name: Born Creative Featured Image Setter
	Plugin URI: https://github.com/borncreativeuk/jonathansblog-featured-image-setter
	Description: plugin to set a featured imageon all posts without
	Author: Born Creative
	Author URI: https://www.born-creative.co.uk/
	Version: 0.3
	License: GPL v3 or later
	License URI: https://www.gnu.org/licenses/gpl-3.0.html

	Born Creative Featured Image Setter is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	any later version.

	Born Creative Featured Image Setter is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with Born Creative Featured Image Setter. If not, see https://www.gnu.org/licenses/gpl-3.0.html.
 */

// include admin page if present
if ( file_exists( plugin_dir_path(__FILE__) . 'includes/borncreative-featured-image-setter-admin.php' ) ) {
	require_once plugin_dir_path(__FILE__) . 'includes/borncreative-featured-image-setter-admin.php';
}

// helper functions
if ( file_exists( plugin_dir_path(__FILE__) . 'includes/helper.php' ) ) {
	require_once plugin_dir_path(__FILE__) . 'includes/helper.php';
}
