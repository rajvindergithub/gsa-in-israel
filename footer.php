<?php
/**
 * The template for displaying the footer. 
 *
 * Comtains closing divs for header.php.
 *
 * For more info: https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */			
 ?>

<footer class="footer" role="contentinfo">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer_logo"><img src="<?php echo THEME_PATH; ?>/assets/images/footer_logo.png" alt="GSA Airlines" title="GSA Airlines" class="img-fluid"></div>
            </div>
        </div>
        <div class="row">
            <div class="footer_nav">
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-menu',
                        'container'      => 'nav',
                        'container_class'=> 'footer-menu',
                        'menu_class'     => 'footer-nav-menu'
                    ));
                    ?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading t-upper">
                       <span><img src="<?php echo THEME_PATH ; ?>/assets/images/footer_icon/location.svg" /></span> Office LOCATION
                    </div>
                    <div class="f_b_details">
                        <p>21 HaMelahot Blvd, Modiin. <br class="hide-m" />
                            (Ayala 360 Complex) 7179590</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading t-upper">
                      <span><img src="<?php echo THEME_PATH ; ?>/assets/images/footer_icon/location.svg" /></span>  Call Now
                    </div>
                    <div class="f_b_details">
                        <p>+972-52-2506726</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading t-upper">
                      <span><img src="<?php echo THEME_PATH ; ?>/assets/images/footer_icon/location.svg" /></span>  Email Address
                    </div>
                    <div class="f_b_details">
                        <p>info@gsa-airlines.co.il</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading t-upper">
                       <span><img src="<?php echo THEME_PATH ; ?>/assets/images/footer_icon/location.svg" /></span> Share
                    </div>
                    <div class="f_b_details f_b_social_m">
                        <ul>
                            <li><a href="#" target="_blank"><img src="<?php echo THEME_PATH ;?>/assets/images/social-media/facebook.svg" /></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo THEME_PATH ;?>/assets/images/social-media/instagram.svg" /></a></li>
                            <li><a href="#" target="_blank"><img src="<?php echo THEME_PATH ;?>/assets/images/social-media/linkedin.svg" /></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



</footer> <!-- end .footer -->

<section id="footer_copy_write">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="f-c-w-list t-upper">
                    <ul>
                        <li>&copy; 2025 &nbsp; GSA Airlines</li>
                        <li>|</li>
                        <li>Website design and development: <img src="<?php echo THEME_PATH; ?>/assets/images/final_logo_crea.png" /></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

</div> <!-- end .off-canvas-content -->

</div> <!-- end .off-canvas-wrapper -->

<?php wp_footer(); ?>

</body>

</html> <!-- end page -->
