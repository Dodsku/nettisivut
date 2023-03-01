<?php

echo '<div class="sidebar-area sidebar-custom-width-left">';

	if ( ! dynamic_sidebar( 'sidebar-left' ) ) {

		return ;

	}

echo '</div>';
