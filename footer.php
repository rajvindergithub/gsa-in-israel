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
                <div class="footer_logo"></div>
            </div>
        </div>
        <div class="row">
            <div class="footer_nav"></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading">
                       <span><img src="<?php echo THEME_PATH ; ?>/assets/images/footer_icon/location.svg" /></span> Office LOCATION
                    </div>
                    <div class="f_b_details">
                        <p>21 HaMelahot Blvd, Modiin.
                            (Ayala 360 Complex) 7179590</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading">
                      <span><img src="<?php echo THEME_PATH ; ?>/assets/images/footer_icon/location.svg" /></span>  Call Now
                    </div>
                    <div class="f_b_details">
                        <p>+972-52-2506726</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading">
                      <span><img src="<?php echo THEME_PATH ; ?>/assets/images/footer_icon/location.svg" /></span>  Email Address
                    </div>
                    <div class="f_b_details">
                        <p>info@gsa-airlines.co.il</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="f_block">
                    <div class="f_b_heading">
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
                <div class="f-c-w-list">
                    <ul>
                        <li>&copy; 2025 GSA Airlines</li>
                        <li>|</li>
                        <li>Website design and development:</li>
                        <li><img src="<?php echo THEME_PATH; ?>/assets/images/final_logo_crea.png" /></li>
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
