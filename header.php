<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cLUB DE VOYAGE</title>
    <!-- link rel="stylesheet" href="normalize.css" -->
    <!-- link rel="stylesheet" href="style.css" -->
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <img
                    src="<?php echo get_template_directory_uri() . '/images/logo_tuto.png' ?>"
                    alt="logo">
            </figure>
            <label for="chk-burger" class="entete__burger">
                <img

                    src="https://s2.svgbox.net/hero-solid.svg?ic=menu-alt-1&color=000" width="32" height="32">
            </label>
            <input type="checkbox" name="" id="chk-burger" class="chk-burger">
            <div class="entete__navigation">
<<<<<<< HEAD
                getmypid <nav class="entete__menu">
=======

                <?php wp_nav_menu(
                    array(
                        'menu' => 'principal',
                        'container' => 'nav',
                        'container_class' => '',
                        'container_id' => '',
                        'container_aria_label' => '',
                        'menu_class' => 'menu'
                    )
                );
                ?>
                <nav class="entete__menu">
>>>>>>> etape-2
                    <ul class="menu">
                        <li class="menu__item"><a href="" class="menu__item__a">Aventure</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Zen</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Culturel</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Sport</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Accueil</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Aventure</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Zen</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Culturel</a></li>
                        <li class="menu__item"><a href="" class="menu__item__a">Sport</a></li>
                    </ul>
                </nav>
                <form class="recherche">
                    <input type="text" placeholder="Rechercher" class="recherche__input">
                    <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search&color=000" width="16" height="16">
                </form>
            </div>
        </div>
    </header>