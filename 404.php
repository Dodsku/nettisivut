<?php get_header(); ?>

    <?php

        $bg_image = wdes_opts_get('page404-background-img');
        if(!empty($bg_image)) {
            $img_background_error = 'error-p-img';
        } else {
            $img_background_error = '';
        }

    ?>
    <div class="error-p <?php echo esc_attr ($img_background_error) ; ?>">
        <div class="title-error">
            <h2 ><?php echo (!empty(wdes_opts_get('page404-main-text'))) ? wdes_opts_get('page404-main-text') :esc_html__('404', 'phox'); ?></h2>
            <p><?php echo (!empty(wdes_opts_get('page404-main-text'))) ? wdes_opts_get('page404-desc-text') :esc_html__('OOPS! PAGE NOT FOUND', 'phox'); ?></p>
        </div>
        <?php get_search_form(); ?>
    </div>

<?php get_footer(); ?>

