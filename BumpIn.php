<?php
/*
	Plugin Name: BumpIn
	Plugin URI: http://www.bumpin.com
	Description: Install BumpIn widgets for your wordpress and give an interaction mechanism to people visiting your website and draw more traffic to your website using bumpin Hotspots(see www.bumpin.com)
	Author: BumpIn Team (team@bumpin.com)
	Version: 6.0
	Author URI: http://www.bumpin.com/
*/

/*  Copyright 2008-Today  BumpIn  (email : info@bumpin.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



function bumpin_render() {
    echo '<script src="http://www.bumpin.com/bar"></script>';
}


//add_action('wp_footer', 'aib_render');
add_action('pre_get_comments', 'bumpin_render');


/* We don't need admin panel yet

function aib_admin_actions() {  
    add_options_page("Additback", "Additback", 1, "Additback", "aib_admin");  
}  
  
add_action('admin_menu', 'aib_admin_actions');
*/
  
?>
