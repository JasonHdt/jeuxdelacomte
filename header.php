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
        <div class="bg-secondary shadow-lg relative z-10 lg:">
                <div class="title text-4xl text-center py-2 flex items-center justify-center lg:text-8xl">
                    <img class="w-1/6 h-1/6 animated
                    " src="<?php echo get_template_directory_uri() . '/assets/logo.webp'; ?>" alt="">
                    <h1 class="text-stone-100">Jeux de la Comté</h1>
                </div>
        </div>
                    <!-- Mobile Buttons START -->
        <div class="header__navbar z-1 flex px-2 gap-4 lg:hidden">
            <button class="navbar-btn" id="menu-toggle"><img class="header__logo" src="<?php echo get_template_directory_uri() . '/assets/burgermenu.svg'; ?>" alt=""></button>
            <button class="navbar-btn"><img class="header__logo" src="<?php echo get_template_directory_uri() . '/assets/basket.svg'; ?>" alt=""></button>
            <button class="navbar-btn"><img class="header__logo" src="<?php echo get_template_directory_uri() . '/assets/magnifier.svg'; ?>" alt=""></button>
        </div>
                    <!-- Mobile Buttons END -->
                     <!-- DESKTOP BUTTON -->
                     <div id="menu-toggle"  class="navbar-btn rounded-none w-screen z-1 sm:hidden lg:block">
                    <button class=" menu-toggle flex mx-[10%]"><img src="<?php echo get_template_directory_uri() . '/assets/burgermenu.svg'; ?>" class="px-2" alt="">
                    <p class="self-center justify-self-center text-stone-100 uppercase">Menu</p>
                    </button>
                    </div>
                    <!-- DESKTOP BUTTON END -->
    </header>
    <!-- Off canvas menu START -->
    <div class="menu__container bg-menu z-1000 h-screen fixed top-0 left-0 lg:w-1/3">
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
