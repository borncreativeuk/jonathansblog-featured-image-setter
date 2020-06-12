<?php
  /*
  Plugin name: jonathansblog featured image setter
  Plugin URI: https://github.com/localhost8080/jonathansblog-featured-image-setter
  Description: plugin to set all posts without featured image to have an image
  Author: Jonathan Mitchell
  Author URI: https://jonathansblog.co.uk/
  Version: 0.1
  License: GPL v3 or later
  License URI: https://www.gnu.org/licenses/gpl-3.0.html

  jonathansblog featured image setter is free software: you can redistribute it and/or modify
  it under the terms of the GNU General Public License as published by
  the Free Software Foundation, either version 3 of the License, or
  any later version.
 
  jonathansblog featured image setter is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
  GNU General Public License for more details.
 
  You should have received a copy of the GNU General Public License
  along with jonathansblog featured image setter. If not, see https://www.gnu.org/licenses/gpl-3.0.html.
  */

// include admin page if present
if (file_exists(plugin_dir_path(__FILE__) . 'includes/jonathansblog-featured-image-setter-admin.php')) {
	require_once plugin_dir_path(__FILE__) . 'includes/jonathansblog-featured-image-setter-admin.php';
}

// helper functions
if (file_exists(plugin_dir_path(__FILE__) . 'includes/helper.php')) {
	require_once plugin_dir_path(__FILE__) . 'includes/helper.php';
}

