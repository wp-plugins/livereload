<?php
/*
Plugin Name: LiveReload Snippet
Plugin URI: http://wordpress.org/extend/plugins/livereload
Description: Add the LiveReload javascript snippet to the footer of your theme.
Version: 1.0
Author: Barry Ceelen
Author URI: http://functionsfile.com

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
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/








add_action( 'wp_footer', 'fufi_livereload_snippet' );

fufi_livereload_snippet() { ?>
	<script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
<?php } ?>