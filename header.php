<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head()?>
</head>
    <body>
        <header>
            <a class="home-name" href="#"><?php bloginfo('name')?></a>
            <?php wp_nav_menu(['theme_location' => 'primary',
                'menu_class' => 'menu-principal',
            ])?>
        </header>