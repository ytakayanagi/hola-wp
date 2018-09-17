<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" <?php language_attributes(); ?>>
<!--<![endif]-->

<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head(); ?>

    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top" <?php body_class(); ?>>

    <!-- header
    ================================================== -->
    <header class="s-header">

        <div class="header-logo">
            <a class="site-logo" href="<?php echo site_url() ?>"><img src=<?php echo get_theme_file_uri('/images/logo.png') ?> alt="Homepage"></a>
        </div>

        <nav class="header-nav-wrap">
            <?php
                if(is_front_page()) {
                    wp_nav_menu(array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'header-nav'
                    ));
                } else { ?>
                    <ul class="header-nav">
                        <li><a href="<?php echo get_home_url(); ?>">Return to Home</a></li>
                    </ul>
            <?php    
                }
            ?>
        </nav>

        <a class="header-menu-toggle" href="#0"><span>Menu</span></a>

    </header> <!-- end s-header -->