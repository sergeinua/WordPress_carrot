<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="<?= get_template_directory_uri(); ?>/html/dist/favicon.png" sizes="16x16" type="image/png">
    <title>Carrot</title>
</head>
<body>
    <header style="background-image: url(<?= get_template_directory_uri(); ?>/html/dist/img/bg/bg--header.jpg);" class="header">
        <nav class="top-nav">
            <div class="logo"><img src="<?= get_template_directory_uri(); ?>/html/dist/img/logos/CarrotLogo.png" alt="logo"></div>

            <div class="toggle-menu">
                <div class="sandwich">
                    <div class="sw-topper"></div>
                    <div class="sw-bottom"></div>
                    <div class="sw-footer"></div>
                </div>
            </div>
            <div class="nav-menu navigation">
                <ul class="main-menu">
                    <?= wp_nav_menu([
                        'menu' => 'main-nav',
                        'menu_class' => 'nav',
                        'items_wrap' => my_nav_wrap(),
                        'container' => false,
                    ]); ?>
                </ul>
                <ul class="second-menu">
                    <?= wp_nav_menu([
                        'menu' => 'Secondary menu',
                        'menu_class' => 'second-menu',
                        'container' => false,
                    ]); ?>
                </ul>
                <ul class="contacts">
                    <?php if(wp_is_mobile()) : ?>
                        <li><a href="tel:<?= get_field('tel_num_1', 'options'); ?>"><?= get_field('tel_num_1', 'options'); ?></a></li>
                        <li><a href="tel:<?= get_field('tel_num_2', 'options'); ?>"><?= get_field('tel_num_2', 'options'); ?></a></li>
                    <?php else : ?>
                        <li><a href="skype:<?= get_field('tel_num_1', 'options'); ?>"><?= get_field('tel_num_1', 'options'); ?></a></li>
                        <li><a href="skype:<?= get_field('tel_num_2', 'options'); ?>"><?= get_field('tel_num_2', 'options'); ?></a></li>
                    <?php endif; ?>
                    <li><a href="mailto:<?= get_field('email', 'options'); ?>"><?= get_field('email', 'options'); ?></a></li>
                    <li><?= get_field('address', 'options'); ?></li>
                </ul>
            </div>
        </nav>
        <div class="header-left-wrap">
            <div class="header-left">
                <div class="h1">
                    <?php if ('home_upper_block_text') : ?>

                        <?= get_field('home_upper_block_text'); ?>

                    <?php endif; ?>
                </div>
                <div class="h2">
                    <?php if ('home_upper_block_text_bottom') : ?>

                        <?= get_field('home_upper_block_text_bottom'); ?>

                    <?php endif; ?>
                </div>
                <div class="btn-wrap">
                    <button href="#callback" data-toggle="modal" data-target="#basicModal" class="buttons">Заказать сейчас</button>
                </div>
            </div>
        </div>
    </header>

<?php wp_head(); ?>