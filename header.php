<!doctype html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
    <!-- Header  -->
    <header class="relative">
        <div class="header__menubar_container">
                <div class="header__menubar_title ">
                    <img class="w-1/6 h-1/6 animated
                    " src="<?php echo get_template_directory_uri() . '/assets/logo.webp'; ?>" alt="">
                    <h1 class="text-stone-100">Jeux de la Comté</h1>
                </div>
        </div>
                    <!-- Mobile Buttons START -->
        <div class="header__menubar_navbar">
            <button class="navbar-btn menu-toggle"><img src="<?php echo get_template_directory_uri() . '/assets/burgermenu.svg'; ?>" alt=""></button>
            <button class="navbar-btn"><img src="<?php echo get_template_directory_uri() . '/assets/basket.svg'; ?>" alt=""></button>
            <button class="navbar-btn"><img src="<?php echo get_template_directory_uri() . '/assets/magnifier.svg'; ?>" alt=""></button>
        </div>
                    <!-- Mobile Buttons END -->
                     <!-- DESKTOP BUTTON -->
                     <div class="navbar-btn rounded-none w-screen z-1 hidden lg:block">
                    <button class="menu-toggle flex mx-[10%]"><img src="<?php echo get_template_directory_uri() . '/assets/burgermenu.svg'; ?>" class="px-2" alt="">
                    <p class="self-center justify-self-center text-stone-100 uppercase">Menu</p>
                    </button>
                    </div>
                    <!-- DESKTOP BUTTON END -->
    </header>
    <!-- Off canvas menu START -->
    <div class="menu__container">
        <!-- CLOSING BANNER -->
        <div class="bg-secondary relative z-10 size-14 flex shadow-lg w-full align-center justify-center" id="cross">
            <img style="size-14 m-auto" src="<?php echo get_template_directory_uri() . '/assets/cross.svg'; ?>" alt="">
        </div>
        <!-- END CLOSING BANNER -->
        <!-- Les boutons du menu sont ici -->
        <p class="p-4 title text-2xl self-center justify-self-center text-stone-100">Bienvenue, $user !</p>
        <div class="flex flex-wrap gap-4 p-4 justify-center text-center">
            <div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/assets/horn_blk.svg'; ?>" alt="">
                <p>Contact</p>
            </div>
            <div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/assets/basket_blk.svg'; ?>" alt="">
                <p>Boutique</p>
            </div>
            <div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/assets/award_blk.svg'; ?>" alt="">
                <p>Awards</p>
            </div>
            <div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/assets/calendar_blk.svg'; ?>" alt="">
                <p>Evènements</p>
            </div>
            <div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/assets/table_blk.svg'; ?>" alt="">
                <p>Réserver une table</p>
            </div>
            <div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/assets/feather_blk.svg'; ?>" alt="">
                <p>S'inscrire</p>
            </div>
            <div class="btn-icon"><img src="<?php echo get_template_directory_uri() . '/assets/door_blk.svg'; ?>" alt="">
                <p>Se connecter</p>
            </div>
        </div>
    </div>
    <div class="menu-overlay"></div>

    <!-- Off canvas menu END -->

    <main class="page-content"></main>
<main id="main" class="site-main">
