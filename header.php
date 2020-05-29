<!DOCTYPE html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>

    <header>

        <div class="top-nav">

            <a id="logo" href="<?php print home_url(); ?>"><img
                    src="<?php print get_template_directory_uri(); ?>/images/logo.svg" alt="Shangri-La logo"></a>
            <?php 
            wp_nav_menu(
                array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'navigation',
                    'container' => 'nav',
                    'container_id' => 'main-menu',
                )
            ); 
        ?>
        </div>

        <div class="hero-txt">

            <h1 class="main-heading"><?php bloginfo('name'); ?></h1>
            <h2 class="sub-heading"><?php bloginfo('description'); ?></h2>

        </div>

        <div class="bottom-bar">

            <div class="weather-container" id="conditions">

            </div>

            <div class="search-container">

                <?php get_search_form(); ?>

            </div>

        </div>

    </header>