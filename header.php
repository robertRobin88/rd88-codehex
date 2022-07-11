<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >
    <header>
        <div class="container default">
            <div class="row">
                <div class="col-5 col-lg-3">
                    <a class="logo" href="<?php bloginfo('url'); ?>">
                        <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                                    $image = wp_get_attachment_image_src( $custom_logo_id , 'custome-logo' );
                                    ?>
                        <img src="<?php echo $image[0];?>" class="img-fluid" alt="Logo">
                    </a>
                </div>
                <div class="col-9 d-none d-lg-flex">
                    <div class="desktop-menu">
                        <ul>
                            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
                        </ul>
                    </div>
                </div>
                <div class="col-7 text-end d-block d-lg-none justify-content-center align-self-center">
                    <a href="#mobile-menu"><mm-burger
                        menu="mobile-menu"
                    ></mm-burger></a>
                    <nav id="mobile-menu" class="default" >
                        <ul>
                            <?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'false', 'items_wrap' => '%3$s')); ?>
                            <li class="mobile-search"><?php get_search_form(); ?> </li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>

    </header>

    <main id="content">