<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
            <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php endif; ?>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header class="main-header">
            <div class="container main-header__container">
                <div class="pull-left">
                    <?php ot_the_custom_logo(); ?>
                </div>

                <?php wp_nav_menu( array (
                    'menu_class' => 'top-menu',
                    'container' => 'nav',
                    'container_class' => 'pull-right',
                    'theme_location' => 'primary',
                    'depth' => 1
                ) ); ?>
            </div>
        </header>