<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-inner">
        <div class="logo">
            <a href="/">
                <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.svg"
                        alt="Fineschliff Design Logo"
                >
            </a>
        </div>

        <button class="hamburger" aria-label="Menü öffnen">
            <img
                    class="hamburger-icon"
                    src="<?php echo get_template_directory_uri(); ?>/assets/icons/hamburger.svg"
                    alt="Menü öffnen"
            >
        </button>
        <?php wp_nav_menu([
                'theme_location' => 'header',
        ]);
        ?>
    </div>
</header>

<main>








