<?php
/*
Plugin Name: Nicer HTML Font
Plugin URI: http://uncommoncontent.com/wordpress/plugins/nicer-html-font
Description: Override HTML Editor textarea monospace font with sans-serif. 
Version: 0.1
Author: Jennifer M. Dodd
Author URI: http://bajada.net
*/ 

/*
    Copyright 2011 Jennifer M. Dodd (email: jmdodd@gmail.com)

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


function ucc_nhf_init() {
  add_action( 'admin_print_styles-post.php', 'ucc_nhf_admin_print_styles' );
  add_action( 'admin_print_styles-post-new.php', 'ucc_nhf_admin_print_styles' );
}
add_action('init', 'ucc_nhf_init');


function ucc_nhf_admin_print_styles() {
  wp_enqueue_style( 'nicer-html-font', plugins_url('nicer-html-font.css', __FILE__), '', '1.0' );
}

?>
