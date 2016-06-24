<?php get_header(); ?>

<section id="about-prod" class="section-about s-dark">
    <div class="wrapper">
        <div class="about-text">
            <?= get_field('home_text_block_1_text'); ?>
        </div>
    </div>
    <div class="about-title"><?= get_field('home_text_block_1_title'); ?></div>
</section>
<section id="firstSection" class="section-1 s-light">
    <div class="wrapper">
        <div class="img-block"><img src="<?= get_field('home_text_block_2_img'); ?>"></div>
        <div class="info-block">
            <div class="h2"><?= get_field('home_text_block_2_title'); ?></div>
            <p><?= get_field('home_text_block_2_text'); ?></p>
            <div class="btn-wrap">
                <button class="buttons btn-more-sect-1">Подробнее</button>
            </div>
        </div>
    </div>
</section>
<section id="secondSection" class="section-2 s-light">
    <div class="wrapper">
        <div class="img-block"><img src="<?= get_field('home_text_block_3_img'); ?>"></div>
        <div class="info-block">
            <div class="h2"><?= get_field('home_text_block_3_title'); ?></div>
            <p><?= get_field('home_text_block_3_text'); ?></p>
            <div class="btn-wrap">
                <button class="buttons btn-more-sect-2">Подробнее</button>
            </div>
        </div>
    </div>
</section>
<section id="thirdSection" class="section-3 s-light">
    <div class="wrapper">
        <div class="img-block"><img src="<?= get_field('home_text_block_4_img'); ?>"></div>
        <div class="info-block">
            <div class="h2"><?= get_field('home_text_block_4_title'); ?></div>
            <p><?= get_field('home_text_block_4_text'); ?></p>
            <div class="btn-wrap">
                <button class="buttons btn-more-sect-3">Подробнее</button>
            </div>
        </div>
    </div>
</section>
<section id="fourthSection" class="section-4 s-light">
    <div class="wrapper">
        <div class="img-block"><img src="<?= get_field('home_text_block_5_img'); ?>"></div>
        <div class="info-block">
            <div class="h2"><?= get_field('home_text_block_5_title'); ?></div>
            <p><?= get_field('home_text_block_5_text'); ?></p>
            <div class="btn-wrap">
                <button class="buttons btn-more-sect-4">Подробнее</button>
            </div>
        </div>
    </div>
</section>
<section class="section-5 s-carrot">
    <div class="wrapper">
        <div class="h2"><?= get_field('home_icon_block_title'); ?></div>
        <div class="items-icons-wrap">
            <div class="items-wrap">
                <?php if (have_rows('home_icon_block')) : ?>

                    <?php while (have_rows('home_icon_block')) : the_row(); ?>

                        <?php if(get_sub_field('visible') == true) : ?>
                            <div class="stat-itm">
                                <div class="stat-itm-icon"><img src="<?= get_sub_field('icon'); ?>"></div>
                                <div class="stat-itm-descr"><span><?= get_sub_field('text'); ?></span></div>
                            </div>
                        <?php endif; ?>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="about-title"><?= get_field('home_icon_block_text'); ?></div>
</section>

<section id="price" class="section-6 s-light">
    <div class="wrapper">
        <div id="counter">
            <div class="statistic-item">
                <div class="number"><span data-num="<?= get_field('home_num_block_1_num'); ?>" class="numb">0</span></div>
                <div class="numb-descr"><?= get_field('home_num_block_1_text'); ?></div>
            </div>
            <div class="statistic-item">
                <div class="number"><span data-num="<?= get_field('home_num_block_2_num'); ?>" class="numb">0</span><span class="num-tail">%</span></div>
                <div class="numb-descr"><?= get_field('home_num_block_2_text'); ?></div>
            </div>
            <div class="statistic-item">
                <div class="number"><span data-num="<?= substr(get_field('home_num_block_3_num'), 0, 2); ?>" class="numb">0</span><span data-num="<?= substr(get_field('home_num_block_3_num'), 2, 4); ?>" class="numb">0</span></div>
                <div class="numb-descr"><?= get_field('home_num_block_3_text'); ?></div>
            </div>
        </div>
    </div>
    <div class="about-title">Прайс</div>
</section>

<section class="section-7 s-light">
    <div class="wrapper">
        <?php if (have_rows('home_lowest_block')) : ?>

            <?php while (have_rows('home_lowest_block')) : the_row(); ?>

                <?php if(get_sub_field('visible') == true) : ?>

                    <div class="price-item">
                        <div class="subject"><span><?= get_sub_field('text_top'); ?></span>
                            <div class="cross-wrap">
                                <?php if(get_sub_field('bottom_text')) : ?>
                                    <div class="cross"></div>
                                <?php endif; ?>
                            </div><span><?= get_sub_field('bottom_text'); ?></span>
                            <div class="per">грн/мес</div>
                        </div>
                        <div class="quantity"><?= get_sub_field('quantity'); ?></div>
                    </div>

                <?php endif; ?>

            <?php endwhile; ?>

        <?php endif; ?>
    </div>
</section>


<section id="callback" class="section-8 s-dark">
    <div class="track-wrap"><img src="<?= get_template_directory_uri(); ?>/html/dist/img/form/img_truck.png"></div>
    <div class="wrapper">
        <div class="modal-wrap">

            <?= do_shortcode('[contact-form-7 id="4" title="Форма обратной связи"]'); ?>

        </div>
    </div>
</section>




<?php get_footer(); ?>



































