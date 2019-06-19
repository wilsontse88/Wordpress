<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
        </head>
<body <?php body_class(); ?>>

<header class="sticky-top">
    <div class="container">
        <div class="row">
            <?php wp_nav_menu(
    array(
                    'theme_location' => 'top-menu',
                    'menu_class' => 'navigation',
                )
            ); ?>
        </div>

    </div>
</header>
<div class="banner">
    <?php

    ?>
</div>
