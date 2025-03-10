<?php 
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 */

get_header(); ?>


<section id="banner_main">
    <div class="container">
        <div class="row">
            <div class="b_m_heading t-upper fw-800">Connecting</div>
            <div class="b_m_s_heading t-upper fw-700">airlines to</div>
            <div class="b_m_img"><img src="<?php echo THEME_PATH; ?>/assets/images/banner_plan.png"></div>
            <div class="b_m_img_israel"><img src="<?php echo THEME_PATH; ?>/assets/images/banner_israel.png"></div>
        </div>
    </div>
</section>
<!-- banner_main -->

<section id="home_about-us">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="h-a-us-m-h fw-400 t-upper">About Us</div>
                <div class="h-a-us-h fw-300 t-upper">
                    <h1>We are your future <br class="line-break" />GSA in <span class="fw-600">ISRAEL</span></h1>
                </div>
                <div class="h-a-us-para">
                    <?php the_content(); ?>

                </div>
            </div>
            <div class="col-md-6">
                <?php
                    if (has_post_thumbnail()) {
                        $image_url = get_the_post_thumbnail_url();
                        echo '<img src="' . esc_url($image_url) . '" alt="Your Right Choose">';
                    }
                ?>
            </div>
        </div>
    </div>
</section>
<!-- home_about-us -->



<section id="home_industry-overview">
    <div class="container">
        <div class="row">
            <div class="col-md-5  offset-sm-7">
                <div class="blue_block blue-bg ">
                    <div class="h-i-o-h-m t-upper fw-400">
                        Industry Overview
                    </div>
                    <div class="h-i-o-h fw-300">
                        <h2 class="fw-300">
                            <?php echo esc_html( get_field('industry_overview_heading') ); ?> <span class="fw-600">ISRAEL</span></h2>
                    </div>
                    <div class="h-i-o-para">
                        <?php echo get_field('industry_overview_paragraph') ; ?>
                    </div>
                </div>
            </div>
        </div>




    </div>

</section>



<!-- home_industry-overview -->

<section id="home_marketing_strategy">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="h-m-s-h-m fw-400 t-upper t-center">Marketing Strategy</div>
                <div class="h-m-s-h t-center">
                    <h2 class="fw-300">OUR MARKETING <span class="fw-600">DEPARTMENT</span></h2>
                </div>
                <div class="h-m-s-para t-center fw-400">
                    <p>Our experienced staff is fully dedicated to promote the companies <br class="hide-md" /> we represent in a variety of areas:</p>
                </div>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-3">
                <div class="h-m-s-block t-center">
                    <div class="h-m-s-b-img">

                        <img src="<?php echo get_field('markeing_department_one_image') ; ?>" />
                    </div>
                    <div class="h-m-s-b-heading t-upper fw-500">
                        <?php echo get_field('markeing_department_one_heading') ; ?>
                    </div>
                    <div class="h-m-s-b-line"></div>
                    <div class="h-m-s-b-para">
                        <?php echo get_field('markeing_department_one_paragraph') ; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="h-m-s-block t-center">
                    <div class="h-m-s-b-img">

                        <img src="<?php echo get_field('markeing_department_two_image') ; ?>" />
                    </div>
                    <div class="h-m-s-b-heading t-upper fw-500">
                        <?php echo get_field('markeing_department_two_heading') ; ?>
                    </div>
                    <div class="h-m-s-b-line"></div>
                    <div class="h-m-s-b-para">
                        <?php echo get_field('markeing_department_two_paragraph') ; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="h-m-s-block t-center">
                    <div class="h-m-s-b-img">

                        <img src="<?php echo get_field('markeing_department_three_image') ; ?>" />
                    </div>
                    <div class="h-m-s-b-heading t-upper fw-500">
                        <?php echo get_field('markeing_department_three_heading') ; ?>
                    </div>
                    <div class="h-m-s-b-line"></div>
                    <div class="h-m-s-b-para">
                        <?php echo get_field('markeing_department_three_paragraph') ; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3">
                <div class="h-m-s-block t-center">
                    <div class="h-m-s-b-img">

                        <img src="<?php echo get_field('markeing_department_four_image') ; ?>" />
                    </div>
                    <div class="h-m-s-b-heading t-upper fw-500">
                        <?php echo get_field('markeing_department_four_heading') ; ?>
                    </div>
                    <div class="h-m-s-b-line"></div>
                    <div class="h-m-s-b-para">
                        <?php echo get_field('markeing_department_four_paragraph') ; ?>
                    </div>
                </div>
            </div>



        </div>
    </div>
</section>
<!-- home_marketing_strategy -->


<section id="home_by-director">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <img src="<?php echo get_field('by_director_image') ; ?>" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-d-h-m fw-400 t-upper">by Director</div>
                <div class="h-d-h t-upper fw-300">PERSONNEL AND <span class="fw-600">PREMISES</span></div>
                <div class="h-d-para">
                     <?php echo get_field('by_director_paragraph') ; ?>
                </div>
                <div class="h-d-line mtb-30">&nbsp;</div>
                <div class="h-d-sign mtb-10">
                    <img src="<?php echo THEME_PATH; ?>/assets/images/signature.png" alt="Signature" title="Signature" />
                </div>
                <div class="h-d-name">Fabian Savir</div>
                <div class="h-d-pos">Managing Director | GSA AIRLINES Israel</div>
            </div>
        </div>
    </div>
</section>
<!-- home_by-director -->


<section id="home_contact-us">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="h-c-heading t-center mtb-30">
                    <img src="<?php echo THEME_PATH; ?>/assets/images/contact_heading.png" alt="Contact US" title="Contact US" class="img-fluid" />
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="h-c-h-sub t-upper">
                    <h3>we will contact you as soon as possible.</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- home_contact-us -->

<section id="home_about-us">
    <div class="container">
        <div class="row">

        </div>
    </div>
</section>
<!-- home_about-us -->


<?php get_footer(); ?>
