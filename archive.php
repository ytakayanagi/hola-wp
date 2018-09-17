<?php get_header(); ?>


    <!-- page header
    ================================================== -->
    <?php echo '<section class="page-header page-hero">' ?>

        <div class="row page-header__content">
            <article class="col-full">
                
                <h1 class="page-header__title">
                    <?php the_archive_title() ?>
                </h1>
                <p>
                    <?php the_archive_description(); ?>
                </p>
            </article>
        </div>

    </section> <!-- end page-header -->

    <!-- blog
    ================================================== -->
    <section class="blog-content-wrap">

        <div class="row blog-content">
            <div class="col-full">

                <div class="blog-list block-1-2 block-tab-full">

                <?
                    while(have_posts()) {
                        the_post(); ?>

                    <article class="col-block">
                        
                        <div class="blog-date">
                            <a href="blog-single.html"><?php the_time('M d, Y'); ?></a>
                        </div>  
                        
                        <h2 class="h01"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <?php the_excerpt(); ?>

                        <div class="blog-cat">
                            <?php echo get_the_category_list(' '); ?>
                        </div>

                    </article>

                    <?php } ?>

                </div> <!-- end blog-list -->


            </div> <!-- end col-full -->
        </div> <!-- end blog-content -->

            <div class="row blog-entries-nav">
                <div class="col-full">
                    <a href="<?php echo get_previous_posts_page_link() ?>" class="btn btn--stroke">
                        <i class="im im-arrow-left"></i>
                        Prev
                    </a>
                    <a href="<?php echo get_next_posts_page_link() ?>" class="btn btn--stroke">
                        Next
                        <i class="im im-arrow-right"></i>
                    </a>
                </div>
            </div>

    </section> <!-- end blog-content-wrap -->

<? get_footer(); ?>