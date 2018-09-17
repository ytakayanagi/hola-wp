<?php get_header(); ?>

   <!-- home
   ================================================== -->
   <section id="home" class="s-home page-hero target-section" data-parallax="scroll" data-image-src="<?php echo the_field('frontpage_background_image') ?>" data-natural-width=3000 data-natural-height=2000 data-position-y=center>

        <div class="overlay"></div>
        <div class="shadow-overlay"></div>

        <div class="home-content">

            <div class="row home-content__main">

                <h3><?php the_field('frontpage_subtitle') ?></h3>

                <h1>
                    <?php the_field('frontpage_title') ?>
                </h1>

                <div class="home-content__buttons">
                    <a href="#works" class="smoothscroll btn btn--stroke">
                        Latest Projects
                    </a>
                    <a href="#about" class="smoothscroll btn btn--stroke">
                        More About Me
                    </a>
                </div>

                <div class="home-content__scroll">
                    <a href="#about" class="scroll-link smoothscroll">
                        <span>Scroll Down</span>
                    </a>
                </div>

            </div>

        </div> <!-- end home-content -->

        <ul class="home-social">
            <li>
                <a href="#"><i class="im im-facebook" aria-hidden="true"></i><span>Facebook</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-twitter" aria-hidden="true"></i><span>Twiiter</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-instagram" aria-hidden="true"></i><span>Instagram</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-behance" aria-hidden="true"></i><span>Behance</span></a>
            </li>
            <li>
                <a href="#"><i class="im im-pinterest" aria-hidden="true"></i><span>Pinterest</span></a>
            </li>
        </ul> 
        <!-- end home-social -->

    </section> <!-- end s-home -->


    <!-- about
    ================================================== -->
    <section id="about" class="s-about target-section">
        
        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full text-center">
                <h3>About</h3>
                <h1>More About Me</h1>
                <p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>

        <div class="row about-content">

            <div class="col-six tab-full left">
                <h3>Howdy!</h3>

                <p>Lorem ipsum Ut eiusmod ex magna sit dolor esse adipisicing minim ad cupidatat eu veniam nostrud mollit laboris sunt magna velit culpa consectetur nostrud consectetur labore sed do.</p>

                <p>
                Lorem ipsum Nisi officia Duis irure voluptate dolor commodo pariatur occaecat aliquip adipisicing voluptate Ut in qui ea sint occaecat in commodo in in in incididunt ut sunt in Ut Duis in ut ex qui anim cupidatat cupidatat ex in non dolore labore ea amet cillum ea qui dolor nisi sed velit mollit exercitation ex fugiat labore in deserunt culpa laborum culpa anim dolore laboris amet irure mollit proident velit fugiat aute ea elit magna consequat qui officia quis elit Duis dolor esse cupidatat tempor proident voluptate aliqua ex cupidatat do eiusmod veniam irure laborum ut magna nostrud dolore ullamco commodo elit sit magna aliqua laborum veniam officia dolor.	
                </p>
            </div>

            <div class="col-six tab-full right">
                <h3>I've Got Some skills.</h3>

                <ul class="skill-bars">
                    <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>HTML5</strong>
                    </li>
                    <li>
                    <div class="progress percent85"><span>85%</span></div>
                    <strong>CSS3</strong>
                    </li>
                    <li>
                    <div class="progress percent70"><span>70%</span></div>
                    <strong>JQuery</strong>
                    </li>
                    <li>
                    <div class="progress percent95"><span>95%</span></div>
                    <strong>PHP</strong>
                    </li>
                    <li>
                    <div class="progress percent75"><span>75%</span></div>
                    <strong>Wordpress</strong>
                    </li>   
                    <li>
                    <div class="progress percent90"><span>90%</span></div>
                    <strong>Angular JS</strong>
                    </li>   
                </ul>
            </div>

        </div> <!-- end about-content -->

        <div class="row about-content about-content--buttons">

            <div class="col-six tab-full left">
                <a href="#0" class="btn btn--primary full-width">Download My CV</a>
            </div>
            <div class="col-six tab-full right">
                <a href="#0" class="btn full-width">Hire Me Now</a>
            </div>

        </div> <!-- end about-content buttons -->

        <div class="row about-content about-content--timeline">

            <div class="col-full text-center">
                <h3>My Work Experience.</h3>
            </div>

            <div class="col-six tab-full left">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">July 2015 - Present</p>
                            <h3>Awesome Studio</h3>
                            <h5>Lead Designer</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">July 2014 - June 2015</p>
                            <h3>Super Cool Agency</h3>
                            <h5>Front-end Developer</h5>
                        </div>
                        <div class="timeline__desc">	
                            <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div> <!-- end left -->

            <div class="col-six tab-full right">
                <div class="timeline">

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">July 2012 - June 2014</p>
                            <h3>Great Design Studio</h3>
                            <h5>Web Designer</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                    <div class="timeline__block">
                        <div class="timeline__bullet"></div>
                        <div class="timeline__header">
                            <p class="timeline__timeframe">July 2011 - June 2012</p>
                            <h3>Epic Design Agency</h3>
                            <h5>Web Designer</h5>
                        </div>
                        <div class="timeline__desc">
                            <p>Lorem ipsum Occaecat do esse ex et dolor culpa nisi ex in magna consectetur nisi cupidatat laboris esse eiusmod deserunt aute do quis velit esse sed Ut proident cupidatat nulla esse cillum laborum occaecat nostrud sit dolor incididunt amet est occaecat nisi incididunt.</p>
                        </div>
                    </div> <!-- end timeline__block -->

                </div> <!-- end timeline -->
            </div> <!-- end right -->

        </div> <!-- end about-content timeline -->

    </section> <!-- end about -->
    

    <!-- works
    ================================================== -->
    <section id="works" class="s-works target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full">
                <h3>Portfolio</h3>
                <h1>See My Latest Projects.</h1>
                
                <p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>

        <div class="row masonry-wrap">
            <div class="masonry">

                <?php
                    $homepagePortfolios = new WP_Query(array(
                        'post_type' => 'portfolio',
                        'posts_per_page' => 8
                    ));

                    while($homepagePortfolios->have_posts()) {
                        $homepagePortfolios->the_post();

                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                ?>

                    <div class="masonry__brick">
                        <div class="item-folio">

                            <div class="item-folio__thumb">
                                <a href="<?php echo $url ?>" class="thumb-link" title="The Beetle Car" data-size="1050x700">
                                    <img src="<?php echo $url ?>" 
                                        srcset="<?php echo $url ?>" alt="">
                                    <span class="shadow-overlay"></span>
                                </a>
                            </div>

                            <div class="item-folio__text">
                                <h3 class="item-folio__title">
                                    <?php the_title_attribute(); ?>
                                </h3>
                                <p class="item-folio__cat">
                                    <?php echo wp_strip_all_tags(get_the_category_list(' ')); ?>
                                </p>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="item-folio__project-link" title="<?php the_title_attribute(); ?>">
                                <i class="im im-link"></i>
                            </a>

                            <div class="item-folio__caption">
                                <?php the_content(); ?>
                            </div>

                        </div> <!-- end item-folio -->
                    </div> <!-- end masonry__brick -->

                <?php
                    }
                ?>


            </div>
        </div> <!-- end masonry -->

    </section> <!-- end works -->



    <!-- testimonials
    ================================================== -->
    <div class="s-testimonials">

        <div class="overlay"></div>

        <div class="row testimonials-header">
            <div class="col-full">
                <h1 class="h02">What People Say.</h1>
            </div>
        </div>

        <div class="row testimonials">

            <div class="col-full testimonials__slider">

            <?php
                $homepageTestimonials = new WP_Query(array(
                    'posts_per_page' => -1,
                    'post_type' => 'testimonial',
                    'orderby' => 'rand'
                ));

                while($homepageTestimonials->have_posts()) {
                    $homepageTestimonials->the_post();

                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
            ?>

                <div class="testimonials__slide">
                    <img src="<?php echo $url ?>" alt="Author image" class="testimonials__avatar">
                    <?php the_content(); ?>
                    <div class="testimonials__author h06">
                        <?php the_field('author_name'); ?>
                        <span><?php the_field('author_position'); ?></span>
                    </div>
                </div>
            
            <?php
                }
            ?>
                
            </div> <!-- end testimonials__slider -->

        </div> <!-- end testimonials -->

    </div> <!-- end s-testimonials -->


    <!-- blog
    ================================================== -->
    <section id="blog" class="s-blog target-section">

        <div class="row narrow section-intro has-bottom-sep">
            <div class="col-full">
                <h3>Journal</h3>
                <h1>Latest From The Blog.</h1>
                <p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute. 
                Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum 
                ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>

        <div class="row blog-content">
            <div class="col-full">

                <div class="blog-list block-1-2 block-tab-full">
                    <?php
                        $homepagePosts = new WP_Query(array(
                            'posts_per_page' => 4
                        ));
                        while($homepagePosts->have_posts()) :
                            $homepagePosts->the_post(); ?>

                            <article class="col-block">
                                
                                <div class="blog-date">
                                    <?php the_time('M d, Y'); ?>
                                </div>  
                                
                                <h2 class="h01"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
                                <p><?php if(has_excerpt()) {
                                    echo get_the_excerpt();
                                } else {
                                    echo wp_trim_words(get_the_content(), 30);
                                } ?></p>
        
                                <div class="blog-cat">
                                    <?php echo get_the_category_list(' '); ?>
                                </div>
        
                            </article>
                    <?php
                        endwhile;
                    ?>
                </div> <!-- end blog-list -->

            </div> <!-- end col-full -->
        </div> <!-- end blog-content -->

    </section> <!-- end s-blog -->


    <!-- s-cta
    ================================================== -->
    <section class="s-cta">
        
        <div class="row narrow cta">

            <div class="col-full cta__content">

                <h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Styleshout Recommends Dreamhost.</a></h2>

                <p class="lead">
                Looking for an awesome and reliable webhosting? Try <a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">DreamHost</a>.
                Get <span>$50 off</span> when you sign up with the promocode <span>styleshout</span>.
                </p>

                <div class="cta__action">
                    <a class="btn btn--primary btn--large" href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Sign Up Now</a>
                </div>	

            </div>

        </div> <!-- end cta -->
        
    </section>


    <!-- s-stats
    ================================================== -->
    <section id="stats" class="s-stats">
        <div class="row block-1-4 block-tab-1-2 block-mob-full stats">

            <div class="col-block stats__col ">
                <div class="stats__count">
                    128
                </div>
                <h4>Awards Received</h4>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">
                    1500
                </div>
                <h4>Cups of Coffee</h4>
            </div>
            <div class="col-block stats__col stats__col--highlight">
                <div class="stats__upsign">
                    <a href="#"><i class="im im-arrow-up" aria-hidden="true"></i></a>
                </div>
                <div class="stats__count">
                    110
                </div>
                <h4>Projects Completed</h4>
            </div>
            <div class="col-block stats__col">
                <div class="stats__count">
                    101
                </div>
                <h4>Happy Clients</h4> 
            </div>

        </div>
    </section> <!-- end s-stats -->


    <!-- s-stats
    ================================================== -->
    <section id="contact" class="s-contact target-section">

        <div class="overlay"></div>

        <div class="row narrow section-intro">
            <div class="col-full">
                <h3>Contact</h3>
                <h1>Say Hello.</h1>
                
                <p class="lead">Lorem ipsum Dolor adipisicing nostrud et aute Excepteur amet commodo ea dolore irure esse Duis nulla sint fugiat cillum ullamco proident aliquip quis qui voluptate dolore veniam Ut laborum non est in officia.</p>
            </div>
        </div>

        <div class="row contact__main">
            <div class="col-eight tab-full contact__form">
                <form name="contactForm" id="contactForm" method="post" action="">
                    <fieldset>
    
                    <div class="form-field">
                        <input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="" aria-required="true" class="full-width">
                    </div>
                    <div class="form-field">
                        <input name="contactSubject" type="text" id="contactSubject" placeholder="Subject" value="" class="full-width">
                    </div>
                    <div class="form-field">
                        <textarea name="contactMessage" id="contactMessage" placeholder="message" rows="10" cols="50" required="" aria-required="true" class="full-width"></textarea>
                    </div>
                    <div class="form-field">
                        <button class="full-width btn--primary">Submit</button>
                        <div class="submit-loader">
                            <div class="text-loader">Sending...</div>
                            <div class="s-loader">
                                <div class="bounce1"></div>
                                <div class="bounce2"></div>
                                <div class="bounce3"></div>
                            </div>
                        </div>
                    </div>
    
                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div> 
            
                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>
                        
            </div>
            <div class="col-four tab-full contact__infos">
                <h4 class="h06">Phone</h4>
                <p>Phone: (+63) 555 1212<br>
                Mobile: (+63) 555 0100<br>
                Fax: (+63) 555 0101
                </p>

                <h4 class="h06">Email</h4>
                <p>someone@holawebsite.com<br>
                info@holawebsite.com
                </p>

                <h4 class="h06">Address</h4>
                <p>
                1600 Amphitheatre Parkway<br>
                Mountain View, CA<br>
                94043 US
                </p>
            </div>

        </div>

    </section> <!-- end s-contact -->
    
<?php get_footer(); ?>