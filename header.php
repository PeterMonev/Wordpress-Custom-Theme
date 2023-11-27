<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="header">
<div class="logo">
        <?php
        $custom_logo_id = get_theme_mod('custom_logo');
        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
        if (has_custom_logo()) {
            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
        } else {
            echo '<h1>' . get_bloginfo('name') . '</h1>';
        }
        ?>
    </div>

    <nav class="nav">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'primary',
        'menu_id'        => 'primary-menu',
    ));
    ?>
</nav>

</header>
