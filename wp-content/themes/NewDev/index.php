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
                <div class="postcontent nobottommargin clearfix">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts">
                        <?php
                        if( have_posts() ){
                            while( have_posts() ){
                                the_post();
                                ?>
                                <div class="entry clearfix">
                                    <div class="entry-image">

                                           <?php the_post_thumbnail( 'full',array('class'=> 'image_fade') );  ?>

                                    </div>
                                    <div class="entry-title">
                                        <h2><a href="single.html">This is a Standard post with a Preview Image</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> 10th February 2014</li>
                                        <li><a href="#"><i class="icon-user"></i> admin</a></li>
                                        <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                                        <li><a href="single.html#comments"><i class="icon-comments"></i> 13 Comments</a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate, asperiores quod est tenetur in. Eligendi, deserunt, blanditiis est quisquam doloribus voluptate id aperiam ea ipsum magni aut perspiciatis rem voluptatibus officia eos rerum deleniti quae nihil facilis repellat atque vitae voluptatem libero at eveniet veritatis ab facere.</p>
                                        <a href="single.html" class="more-link">Read More</a>
                                    </div>
                                </div>
                            <?php

                            }
                        }

                        ?>



                    </div><!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->
                    <ul class="pager nomargin">
                        <li class="previous"><a href="#">&larr; Older</a></li>
                        <li class="next"><a href="#">Newer &rarr;</a></li>
                    </ul><!-- .pager end -->

                </div><!-- .postcontent end -->

                <?php get_sidebar();  ?>

            </div>

        </div>

    </section><!-- #content end -->


<?php get_footer(); ?>


