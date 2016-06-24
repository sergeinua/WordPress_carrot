
        <footer class="footer">
            <nav class="bottom-nav">
                <div class="logo"><img src="<?= get_template_directory_uri(); ?>/html/dist/img/logos/CarrotLogo.png" alt="logo"></div>

                <address class="requisites">
                    <div class="phones">
                        <?php if(wp_is_mobile()) : ?>
                        <a href="tel:">+38(044)369-30-90</a>
                        <a href="tel:">+38(044)369-30-95</a>
                        <?php else : ?>
                            <a href="skype:">+38(044)369-30-90</a>
                            <a href="skype:">+38(044)369-30-95</a>
                        <?php endif; ?>
                    </div>
                    <div class="email"><a href="mailto:info@carrotholding.com">info@carrotholding.com</a></div>
                    <div class="address">
                        <p>г. Киев, ул. Михаила Гришка, 9</p>
                    </div>
                </address>

                <div class="copyright"><a href="http://www.reclamare.ua/" target="_blank"><span class="reclamare"></span><span>Разработка сайта: Студия Reclamare</span></a></div>
            </nav>
        </footer>

<!--        <a href="carrot_presentation_fin.pptx" download style="display: none" id="download"></a>-->



        <div id="basicModal" data-easein="bounceUpIn" aria-labelledby="costumModalLabel" aria-hidden="true" tabindex="-1" class="modal fade">
            <div class="modal-dialog modal-form"><span class="h4"></span>
                <button type="button" data-dismiss="modal" class="close-modal"><span></span><span></span></button>

                    <?= do_shortcode('[contact-form-7 id="4" title="Форма обратной связи"]'); ?>

            </div>
        </div>
        <div class="more-window-1">
            <div class="more-window-inner">
                <div class="close-wrap">
                    <div class="close-1"></div>
                </div>
                <div class="wrapper">
                    <div class="h2"><?= get_field('home_text_block_2_title'); ?></div>
                    <div class="blocks-wrapper">
                        <div class="inform-block-left">
                            <div class="image-block"><img src="<?= get_field('home_text_block_2_img'); ?>"></div>
                            <?= get_field('slide_block_1_left_text'); ?>
                            <div class="clear"></div>
                            <?php if(get_field('slide_block_1_left_icons')) : ?>
                                    <div class="icons-block">
                                        <ul>
                                            <?php while (have_rows('slide_block_1_left_icons')) : the_row(); ?>
                                                <li>
                                                    <div class="icon-inner"><img src="<?= get_sub_field('icon'); ?>" class="icon"><span class="descr"><?= get_sub_field('label'); ?></span></div>
                                                </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                            <?php endif; ?>
                        </div>
                        <div class="inform-block-right">
                            <?= get_field('slide_block_1_right_text'); ?>
                            <?php if(get_field('slide_block_1_right_img')) : ?>
                                <div class="graph-block"><img src="<?= get_field('slide_block_1_right_img'); ?>"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-window-2">
            <div class="more-window-inner">
                <div class="close-wrap">
                    <div class="close-2"></div>
                </div>
                <div class="wrapper">
                    <div class="h2"><?= get_field('home_text_block_3_title'); ?></div>
                    <div class="blocks-wrapper">
                        <div class="inform-block-left">
                            <div class="image-block"><img src="<?= get_field('home_text_block_3_img'); ?>"></div>
                            <?= get_field('slide_block_2_left_text'); ?>
                            <div class="clear"></div>
                            <?php if(get_field('slide_block_2_left_icons')) : ?>
                                <div class="icons-block">
                                    <ul>
                                        <?php while (have_rows('slide_block_2_left_icons')) : the_row(); ?>
                                            <li>
                                                <div class="icon-inner"><img src="<?= get_sub_field('icon'); ?>" class="icon"><span class="descr"><?= get_sub_field('label'); ?></span></div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="inform-block-right">
                            <?= get_field('slide_block_2_right_text'); ?>
                            <?php if(get_field('slide_block_2_right_img')) : ?>
                                <div class="graph-block"><img src="<?= get_field('slide_block_2_right_img'); ?>"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-window-3">
            <div class="more-window-inner">
                <div class="close-wrap">
                    <div class="close-3"></div>
                </div>
                <div class="wrapper">
                    <div class="h2"><?= get_field('home_text_block_4_title'); ?></div>
                    <div class="blocks-wrapper">
                        <div class="inform-block-left">
                            <div class="image-block"><img src="<?= get_field('home_text_block_4_img'); ?>"></div>
                            <?= get_field('slide_block_3_left_text'); ?>
                            <div class="clear"></div>
                            <?php if(get_field('slide_block_3_left_icons')) : ?>
                                <div class="icons-block">
                                    <ul>
                                        <?php while (have_rows('slide_block_3_left_icons')) : the_row(); ?>
                                            <li>
                                                <div class="icon-inner"><img src="<?= get_sub_field('icon'); ?>" class="icon"><span class="descr"><?= get_sub_field('label'); ?></span></div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="inform-block-right">
                            <?= get_field('slide_block_3_right_text'); ?>
                            <?php if(get_field('slide_block_3_right_img')) : ?>
                                <div class="graph-block"><img src="<?= get_field('slide_block_3_right_img'); ?>"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="more-window-4">
            <div class="more-window-inner">
                <div class="close-wrap">
                    <div class="close-4"></div>
                </div>
                <div class="wrapper">
                    <div class="h2"><?= get_field('home_text_block_5_title'); ?></div>
                    <div class="blocks-wrapper">
                        <div class="inform-block-left">
                            <div class="image-block"><img src="<?= get_field('home_text_block_5_img'); ?>"></div>
                            <?= get_field('slide_block_4_left_text'); ?>
                            <div class="clear"></div>
                            <?php if(get_field('slide_block_4_left_icons')) : ?>
                                <div class="icons-block">
                                    <ul>
                                        <?php while (have_rows('slide_block_4_left_icons')) : the_row(); ?>
                                            <li>
                                                <div class="icon-inner"><img src="<?= get_sub_field('icon'); ?>" class="icon"><span class="descr"><?= get_sub_field('label'); ?></span></div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ul>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="inform-block-right">
                            <?= get_field('slide_block_4_right_text'); ?>
                            <?php if(get_field('slide_block_4_right_img')) : ?>
                                <div class="graph-block"><img src="<?= get_field('slide_block_4_right_img'); ?>"></div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            var scr = {"scripts":[
                {"src" : "wp-content/themes/carrot/html/dist/libs/jquery/jquery-1.12.3.min.js", "async" : false},
                {"src" : "wp-content/themes/carrot/html/dist/libs/modal_boo/bootstrap.min.js", "async" : false},
                {"src" : "wp-content/themes/carrot/html/dist/libs/animate/animate-css.js", "async" : false},
                {"src" : "wp-content/themes/carrot/html/dist/libs/waypoints/jquery.waypoints.min.js", "async" : false},
                {"src" : "wp-content/themes/carrot/html/dist/js/common.js", "async" : false}
            ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
        </script>
    </body>

    <?php wp_footer(); ?>

</html>