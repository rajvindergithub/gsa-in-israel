<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
    <div class="theme-logo">

            <img src="<?php echo THEME_PATH ?>/assets/images/logo.png" alt="Logo" title="Logo" />

        </div>

    <nav class="navbar navbar-expand-lg ">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'top-menu',
                'container' => false,
                'menu_class' => 'navbar-nav ms-auto',
                'fallback_cb' => '__return_false',
                'depth' => 2,
                'walker' => new WP_Bootstrap_Navwalker()
            ));
            ?>
        </div>
    </nav>
    
    <div class="top_bar_cta">
        <a href="#">Contact Us</a>
    </div>


 
</div>
