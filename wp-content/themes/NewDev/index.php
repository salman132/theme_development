<?php get_header(); ?>
    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="section header-stick bottommargin-lg clearfix" style="padding: 20px 0;">
                <div>
                    <div class="container clearfix">
                        <span class="label label-danger bnews-title">Breaking News:</span>

                        <div class="fslider bnews-slider nobottommargin" data-speed="800" data-pause="6000" data-arrows="false" data-pagi="false">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                                    <div class="slide"><a href="#"><strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. </strong></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container clearfix">

                <!-- Post Content
                ============================================= -->
                <?php if ( have_posts() ) : ?>
                <div class="postcontent nobottommargin clearfix">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts">
                        <?php

                            while( have_posts() ){
                                the_post();
                                ?>
                                <div class="entry clearfix">
                                    <div class="entry-image">

                                        <a href="<?php the_permalink(); ?>" data-lightbox="image">
                                           <?php
                                           if(has_post_thumbnail()) {

                                               the_post_thumbnail('full', array('class' => 'image_fade'));
                                           }
                                           ?>
                                        </a>

                                    </div>
                                    <div class="entry-title">
                                        <h2><a href="<?php the_permalink(); ?>"><?php the_title();  ?></a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i><?php  echo get_the_date(); ?></li>
                                        <li><a href="<?php get_author_posts_url(get_the_author_meta('ID'))  ?>"><i class="icon-user"></i> <?php the_author(); ?></a></li>
                                        <li><i class="icon-folder-open"></i> <?php the_category(' '); ?></li>
                                        <li><a href="<?php  the_permalink(); ?>#comments"><i class="icon-comments"></i><?php comments_number('0'); ?></a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <?php  the_excerpt(); ?>
                                        <a href="<?php  the_permalink(); ?>" class="more-link">Read More</a>
                                    </div>
                                </div>
                            <?php

                            }


                        ?>



                    </div><!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->
                    <ul class="pager nomargin">
                        <li class="previous"><?php next_posts_link('Previous'); ?>a</li>

                        <li class="next"><?php previous_posts_link('Next'); ?></li>
                    </ul><!-- .pager end -->

                </div><!-- .postcontent end -->
                <?php endif; ?>

                <?php get_sidebar();  ?>

            </div>

        </div>

    </section><!-- #content end -->


<?php get_footer(); ?>


