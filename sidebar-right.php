<?php

echo '<div class="sidebar-area sidebar-custom-width-right">';

if ( ! dynamic_sidebar( 'sidebar-right' ) ) {

	return ;

}

echo '</div>';
