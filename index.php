<?php get_header(); ?>

    <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 1
            );
            $query = new WP_query ( $args );
            $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
    ?>

    <!-- page header
    ================================================== -->
    <?php while ( $query->have_posts() ) : $query->the_post(); ?>
    <section class="page-header page-hero" style="background-image:url('<?php echo $url ?>')">'

        <div class="row page-header__content">
            <article class="col-full">

                <div class="page-header__info">
                    <div class="page-header__cat">
                        <?php echo get_the_category_list(' '); ?>
                    </div>
                    <div class="page-header__date">
                        <?php the_time('M d, Y'); ?>
                    </div>
                </div>
                
                <h1 class="page-header__title">
                    <a href="<?php the_permalink(); ?>" title="">
                        <?php the_title(); ?>
                    </a>
                </h1>
                <?php the_excerpt(); ?>
                <p>
                    <a href="<?php the_permalink(); ?>" class="btn btn--stroke page-header__btn">Read More</a>
                </p>
            </article>
        </div>

    </section> <!-- end page-header -->
    <?php endwhile; ?>

    <!-- blog
    ================================================== -->
    <section class="blog-content-wrap">

        <div class="row blog-content">
            <div class="col-full">

                <div class="blog-list block-1-2 block-tab-full">

                                <?php
                    $current_page = get_query_var('paged');
                    $current_page = max( 1, $current_page );

                    $per_page = 4;
                    $offset_start = 1;
                    $offset = ( $current_page - 1 ) * $per_page + $offset_start;                   

                    $post_list = new WP_Query(array(
                        'posts_per_page' => $per_page,
                        'paged'          => $current_page,
                        'offset'         => $offset, // Starts with the second most recent post.
                        'orderby'        => 'date',  // Makes sure the posts are sorted by date.
                        'order'          => 'DESC',  // And that the most recent ones come first.
                    ));

                    // Manually count the number of pages, because we used a custom OFFSET (i.e.
                    // other than 0), so we can't simply use $post_list->max_num_pages or even
                    // $post_list->found_posts without extra work/calculation.
                    $total_rows = max( 0, $post_list->found_posts - $offset_start );
                    $total_pages = ceil( $total_rows / $per_page );

                    if ( $post_list->have_posts() ):
                        while ( $post_list->have_posts() ): 
                            $post_list->the_post(); ?>

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

                    <?php 
                        endwhile; 
                        wp_reset_postdata();
                    ?>

                </div> <!-- end blog-list -->


            </div> <!-- end col-full -->
        </div> <!-- end blog-content -->

        <?php if ($post_list->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
            <div class="row blog-entries-nav">
                <div class="col-full">
                    <a href="<?php echo get_previous_posts_page_link() ?>" class="btn btn--stroke">
                        <i class="im im-arrow-left"></i>
                        Prev
                    </a>
                    <a href="<?php echo get_next_posts_page_link($post_list->max_num_pages) ?>" class="btn btn--stroke">
                        Next
                        <i class="im im-arrow-right"></i>
                    </a>
                </div>
            </div>
        <?php 
        }
            endif; 
        ?>  

    </section> <!-- end blog-content-wrap -->

<? get_footer(); ?>