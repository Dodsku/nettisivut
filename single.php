<?php

get_header();

if ( x_wdes()->wdes_is_buider_edit_mode( get_the_ID() ) && !class_exists('Elementor') ) :

	the_post(); the_content();

else :

	$template_name = wdes_header()->sdiebar_layout_show();
	x_wdes()->wdes_get_tp( 'posts/layout', $template_name . '-sidebar' );

endif;

get_footer();

