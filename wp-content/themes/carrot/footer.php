
        <footer class="footer">
            <nav class="bottom-nav">
                <div class="logo"><img src="<?= get_template_directory_uri(); ?>/html/dist/img/logos/logo.png" alt="logo"></div>
                <div class="copyright"><a href="http://www.reclamare.ua/" target="_blank">Разработка сайта: Студия Reclamare</a></div>
            </nav>
        </footer>
        <div id="basicModal" data-easein="bounceUpIn" aria-labelledby="costumModalLabel" aria-hidden="true" tabindex="-1" class="modal fade">
            <div class="modal-dialog modal-form"><span class="h4"></span>
                <button type="button" data-dismiss="modal" class="close-modal"><span></span><span></span></button>

                    <?= do_shortcode('[contact-form-7 id="4" title="Форма обратной связи"]'); ?>

            </div>
        </div>

        <?php $i=1; ?>

        <?php if (have_rows('sliding_block')) : ?>

            <?php while (have_rows('sliding_block')) : the_row(); ?>

                <div class="more-window-<?= $i; ?>">
                    <div class="close-wrap">
                        <div class="close-<?= $i; ?>"></div>
                    </div>
                    <div class="wrapper">
                        <div class="left-block">
                            <div class="image-block"><img src="<?= get_sub_field('left_side_image'); ?>"></div>
                            <div class="inform-block">
                                <div class="h2"><?= get_sub_field('left_side_title'); ?></div>
                                <?= get_sub_field('left_side_text'); ?>
                            </div>
                        </div>
                        <div class="right-block">
                            <?php if(get_sub_field('right_side_image')) : ?>
                                <div class="graph-block"><img src="<?= get_sub_field('right_side_image'); ?>"></div>
                            <?php endif; ?>
                            <div class="inform-block-bottom">
                                <?= get_sub_field('right_side_text'); ?>
                            </div>
                        </div>
                        <div class="btn-wrap">
                            <a class="buttons" href="<?= get_sub_field('link'); ?>">Полная документация</a>
                        </div>
                    </div>
                </div>

                <?php $i++; ?>

            <?php endwhile; ?>

        <?php endif; ?>

        <script>
            var scr = {"scripts":[
                {"src" : "wp-content/themes/carrot/html/dist/libs/jquery/jquery-1.12.3.min.js", "async" : false},
                {"src" : "wp-content/themes/carrot/html/dist/libs/modal_boo/bootstrap.min.js", "async" : false},
                {"src" : "wp-content/themes/carrot/html/dist/js/common.js", "async" : false}
            ]};!function(t,n,r){"use strict";var c=function(t){if("[object Array]"!==Object.prototype.toString.call(t))return!1;for(var r=0;r<t.length;r++){var c=n.createElement("script"),e=t[r];c.src=e.src,c.async=e.async,n.body.appendChild(c)}return!0};t.addEventListener?t.addEventListener("load",function(){c(r.scripts);},!1):t.attachEvent?t.attachEvent("onload",function(){c(r.scripts)}):t.onload=function(){c(r.scripts)}}(window,document,scr);
        </script>

    </body>

    <?php wp_footer(); ?>

</html>

