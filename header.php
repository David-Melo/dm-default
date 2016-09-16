<!doctype html>
<html <?php language_attributes(); ?>

    <head>
        <meta charset="<?php bloginfo('charset'); ?>">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

        <?php if ( ! function_exists( '_wp_render_title_tag' ) ) :
            function theme_slug_render_title() {
        ?>
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <?php
            }
            add_action( 'wp_head', 'theme_slug_render_title' );
        endif;
        ?>

        <meta description="<?php bloginfo('description'); ?>">

        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?> >

<!--<?php
                        wp_nav_menu(array(
                            'theme_location' => 'header',
'container' => false,
'menu_class' => 'nav navbar-nav navbar-right',
'walker' => new Walker_Nav_Primary()
));
?>-->

