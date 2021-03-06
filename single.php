<?php get_header() ?>

    <article class="blog-single">

    <?php while(have_posts()) {
        the_post(); 
        
        $url = get_the_post_thumbnail_url(get_the_ID(),'full');
    ?>

    <!-- page header/blog hero
    ================================================== -->
    <div class="page-header page-header--single page-hero" style="background-image:url(<?php echo $url ?>)">

        <div class="row page-header__content narrow">
            <article class="col-full">
                <div class="page-header__info">
                    <div class="page-header__cat">
                        <?php echo get_the_category_list(' '); ?>
                    </div>
                </div>
                <h1 class="page-header__title">
                    <?php the_title_attribute(); ?>
                </h1>
                <ul class="page-header__meta">
                    <li class="date"><?php the_time('M d, Y'); ?></li>
                    <li class="author">
                        By
                        <span><?php the_author_posts_link(); ?></span>
                    </li>
                </ul>
                
            </article>
        </div>

    </div> <!-- end page-header -->

    <div class="row blog-content">
        <div class="col-full blog-content__main">

            <?php the_content(); ?>

            <p class="blog-content__tags">
                <span>Post Tags</span>
                
                <?php
                    echo get_the_tag_list('<span class="blog-content__tag-list">','','</span>');
                ?>

            </p>

            <div class="blog-content__pagenav">
                <div class="blog-content__nav">
                    <div class="blog-content__prev">
                        <a href="#0" rel="prev">
                            <span>Previous Post</span>
                            <?php previous_post_link( '%link' ); ?>
                        </a>
                    </div>
                    <div class="blog-content__next">
                        <a href="#0" rel="next">
                            <span>Next Post</span>
                            <?php next_post_link( '%link' ); ?>
                        </a>
                    </div>
                </div>

                <div class="blog-content__all">
                    <a href="<?php echo site_url('/blog'); ?>" class="btn btn--primary">
                        View All Post
                    </a>
                </div>
            </div>

        </div><!-- end blog-content__main -->
    </div> <!-- end blog-content -->

    </article>


    <!-- comments
    ================================================== -->
    <div class="comments-wrap">

    <div id="comments" class="row">
        <div class="col-full">

        <h3>5 Comments</h3>

        <!-- commentlist -->
        <ol class="commentlist">

                <li class="depth-1 comment">

                    <div class="comment__avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-01.jpg" alt="">
                    </div>

                    <div class="comment__content">

                        <div class="comment__info">
                            <cite>Itachi Uchiha</cite>

                            <div class="comment__meta">
                                <time class="comment__time">Sep 16, 2017 @ 23:05</time>
                                <span class="sep">|</span><a class="reply" href="#">Reply</a>
                            </div>
                        </div>

                        <div class="comment__text">
                        <p>Adhuc quaerendum est ne, vis ut harum tantas noluisse, id suas iisque mei. Nec te inani ponderum vulputate,
                        facilisi expetenda has et. Iudico dictas scriptorem an vim, ei alia mentitum est, ne has voluptua praesent.</p>
                        </div>

                    </div>

                </li>

                <li class="thread-alt depth-1 comment">

                    <div class="comment__avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                    </div>

                    <div class="comment__content">

                        <div class="comment__info">
                        <cite>John Doe</cite>

                        <div class="comment__meta">
                            <time class="comment__time">Sep 16, 2017 @ 24:05</time>
                            <span class="sep">|</span><a class="reply" href="#">Reply</a>
                        </div>
                        </div>

                        <div class="comment__text">
                        <p>Sumo euismod dissentiunt ne sit, ad eos iudico qualisque adversarium, tota falli et mei. Esse euismod
                        urbanitas ut sed, et duo scaevola pericula splendide. Primis veritus contentiones nec ad, nec et
                        tantas semper delicatissimi.</p>
                        </div>

                    </div>

                    <ul class="children">

                        <li class="depth-2 comment">

                            <div class="comment__avatar">
                                <img width="50" height="50" class="avatar" src="images/avatars/user-03.jpg" alt="">
                            </div>

                            <div class="comment__content">

                                <div class="comment__info">
                                    <cite>Kakashi Hatake</cite>

                                    <div class="comment__meta">
                                        <time class="comment__time">Sep 16, 2017 @ 25:05</time>
                                        <span class="sep">|</span><a class="reply" href="#">Reply</a>
                                    </div>
                                </div>

                                <div class="comment__text">
                                    <p>Duis sed odio sit amet nibh vulputate
                                    cursus a sit amet mauris. Morbi accumsan ipsum velit. Duis sed odio sit amet nibh vulputate
                                    cursus a sit amet mauris</p>
                                </div>

                            </div>

                            <ul class="children">

                                <li class="depth-3 comment">

                                    <div class="comment__avatar">
                                        <img width="50" height="50" class="avatar" src="images/avatars/user-04.jpg" alt="">
                                    </div>

                                    <div class="comment__content">

                                        <div class="comment__info">
                                        <cite>John Doe</cite>

                                        <div class="comment__meta">
                                            <time class="comment__time">Sep 16, 2017 @ 25:15</time>
                                            <span class="sep">|</span><a class="reply" href="#">Reply</a>
                                        </div>
                                        </div>

                                        <div class="comment__text">
                                        <p>Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est
                                        etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>
                                        </div>

                                    </div>

                                </li>

                            </ul>

                        </li>

                    </ul>

                </li>

                <li class="depth-1 comment">

                    <div class="comment__avatar">
                        <img width="50" height="50" class="avatar" src="images/avatars/user-02.jpg" alt="">
                    </div>

                    <div class="comment__content">

                        <div class="comment__info">
                        <cite>Shikamaru Nara</cite>

                        <div class="comment__meta">
                            <time class="comment-time">Sep 16, 2017 @ 25:15</time>
                            <span class="sep">|</span><a class="reply" href="#">Reply</a>
                        </div>
                        </div>

                        <div class="comment__text">
                        <p>Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum claritatem.</p>
                        </div>

                    </div>

                </li>

            </ol> <!-- Commentlist End -->	

        <!-- respond -->
        <div class="respond">

                <h3>Leave a Comment</h3>

                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>

                    <div class="form-field">
                            <input name="cName" type="text" id="cName" class="full-width" placeholder="Your Name" value="">
                    </div>

                    <div class="form-field">
                            <input name="cEmail" type="text" id="cEmail" class="full-width" placeholder="Your Email" value="">
                    </div>

                    <div class="form-field">
                            <input name="cWebsite" type="text" id="cWebsite" class="full-width" placeholder="Website" value="">
                    </div>

                    <div class="message form-field">
                        <textarea name="cMessage" id="cMessage" class="full-width" placeholder="Your Message"></textarea>
                    </div>

                    <button type="submit" class="submit btn--primary">Submit</button>

                    </fieldset>
                </form> <!-- Form End -->

            </div> <!-- Respond End -->

        </div> <!-- end col-full -->
    </div> <!-- end row comments -->
    </div> <!-- end comments-wrap -->

    <?php } ?>

<?php get_footer() ?>