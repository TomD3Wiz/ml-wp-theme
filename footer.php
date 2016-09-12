<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>

</div><!-- .site-content -->

<?php zerif_before_footer_trigger(); ?>
<footer id="footer" itemscope="itemscope" itemtype="http://schema.org/WPFooter">
    <?php $ml_subsribe = get_theme_mod('zerif_subscribe');?>
    <div class="subscribe-container">
        <form action="https://mentorloop.createsend.com/t/t/s/thujt/" method="post" id="subForm" class="subscribe">
            <span class="subscribe-text"><?php echo $ml_subsribe;?></span>
            <input class="subscribe-input" type="text" name="cm-thujt-thujt" id="thujt-thujt" placeholder="example@email.com">
            <input class="subscribe-submit " type="submit" value="Subscribe" onclick="ga('send', 'event', 'Subscribe', 'Subscribe')">
        </form>
    </div>
    <?php zerif_footer_widgets_trigger(); ?>

    <div class="container">

        <?php zerif_top_footer_trigger(); ?>

        <?php
        $ml_footer_logo = get_theme_mod('zerif_business_footer_icon');
        $zerif_address = get_theme_mod('zerif_address', __('Company address', 'zerif-lite'));

        $zerif_email = get_theme_mod('zerif_email', '<a href="mailto:contact@site.com">contact@site.com</a>');

        $zerif_phone = get_theme_mod('zerif_phone', '<a href="tel:0 332 548 954">0 332 548 954</a>');

        $zerif_socials_facebook = get_theme_mod('zerif_socials_facebook', '#');
        $zerif_socials_twitter = get_theme_mod('zerif_socials_twitter', '#');
        $zerif_socials_linkedin = get_theme_mod('zerif_socials_linkedin', '#');
        $zerif_socials_behance = get_theme_mod('zerif_socials_behance', '#');
        $zerif_socials_dribbble = get_theme_mod('zerif_socials_dribbble', '#');
        $zerif_socials_instagram = get_theme_mod('zerif_socials_instagram');

        $zerif_accessibility = get_theme_mod('zerif_accessibility');
        $zerif_copyright = get_theme_mod('zerif_copyright');

        $footer_class = 'col-md-4';

        $args = array(
            'sort_order' => 'asc',
            'sort_column' => 'post_title',
            'hierarchical' => 1,
            'exclude' => '',
            'include' => '',
            'meta_key' => '',
            'meta_value' => '',
            'authors' => '',
            'child_of' => 0,
            'parent' => -1,
            'exclude_tree' => '',
            'number' => '',
            'offset' => 0,
            'post_type' => 'page',
            'post_status' => 'publish'
        );

        $pages = get_pages($args);

        if (!empty($ml_footer_logo)) {
            echo '<img src="'.$ml_footer_logo.'" class="footer-business-logo" />';
        }

        /* More info */
        echo '<div class="' . $footer_class . ' company-details">';
        echo '<h3 class="footer-heading-more-info">More Info</h3>';
        echo '<div class="row">';
        foreach ($pages as $page) {


            ?>
                <div class="col-lg-6 footer-page-links"><a href="<?php get_page_link($page->ID);?>"><?php echo $page->post_title; ?></a></div>
            <?php

        }
        echo '</div>';
        echo '</div>';

        // open link in a new tab when checkbox "accessibility" is not ticked
        $attribut_new_tab = (isset($zerif_accessibility) && ($zerif_accessibility != 1) ? ' target="_blank"' : '');

        if (!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) ||
            !empty($zerif_copyright) || !empty($zerif_socials_instagram)
        ):

            echo '<div class="' . $footer_class . ' community">';
            echo '<h3 class="footer-heading">Community</h3>';
            if (!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble)):
                echo '<ul class="social">';

                /* facebook */
                if (!empty($zerif_socials_facebook)):
                    echo '<li><a' . $attribut_new_tab . ' class="clear" href="' . esc_url($zerif_socials_facebook) . '"><div class="col-lg-5 icon"><i class="fa fa-facebook"></i></div> <div class="col-lg-5 label">Facebook</div></a></li>';
                endif;
                /* twitter */
                if (!empty($zerif_socials_twitter)):
                    echo '<li><a' . $attribut_new_tab . ' class="clear" href="' . esc_url($zerif_socials_twitter) . '"><div class="col-lg-5 icon"><i class="fa fa-twitter"></i></div> <div class="col-lg-5 label">Twitter</div></a></li>';
                endif;
                /* linkedin */
                if (!empty($zerif_socials_linkedin)):
                    echo '<li><a' . $attribut_new_tab . ' class="clear" href="' . esc_url($zerif_socials_linkedin) . '"><div class="col-lg-5 icon"><i class="fa fa-linkedin"></i></div> <div class="col-lg-5 label">LinkedIn</div></a></li>';
                endif;
                /* behance */
                if (!empty($zerif_socials_behance)):
                    echo '<li><a' . $attribut_new_tab . ' class="clear" href="' . esc_url($zerif_socials_behance) . '"><div class="col-lg-5 icon"><i class="fa fa-behance"></i></div> <div class="col-lg-5 label">Behance</div></a></li>';
                endif;
                /* dribbble */
                if (!empty($zerif_socials_dribbble)):
                    echo '<li><a' . $attribut_new_tab . ' class="clear" href="' . esc_url($zerif_socials_dribbble) . '"><div class="col-lg-5 icon"><i class="fa fa-dribbble"></i></div> <div class="col-lg-5 label">Dribble</div></a></li>';
                endif;
                /* instagram */
                if (!empty($zerif_socials_instagram)):
                    echo '<li><a' . $attribut_new_tab . ' class="clear" href="' . esc_url($zerif_socials_instagram) . '"><div class="col-lg-5 icon"><i class="fa fa-instagram"></i></div> <div class="col-lg-5 label">Instagram</div></a></li>';
                endif;
                echo '</ul>';
            endif;
            echo '</div>';

        endif;

        /* Contact US */
        echo '<div class="' . $footer_class . ' company-details">';
        echo '<h3 class="footer-heading">Contact Us</h3>';
        if (!empty($zerif_email)) {
            echo '<div class="zerif-footer-email">';
            echo wp_kses_post($zerif_email);
            echo '</div>';
        } else if (is_customize_preview()) {
            echo '<div class="zerif-footer-email zerif_hidden_if_not_customizer"></div>';
        }
        if (!empty($zerif_address)) {
            echo '<div class="zerif-footer-address">';
            echo wp_kses_post($zerif_address);
            echo '</div>';
        } else if (is_customize_preview()) {
            echo '<div class="zerif-footer-address zerif_hidden_if_not_customizer"></div>';
        }
        if (!empty($zerif_phone)) {
            echo '<div class="zerif-footer-phone">';
            echo wp_kses_post($zerif_phone);
            echo '</div>';
        } else if (is_customize_preview()) {
            echo '<div class="zerif-footer-phone zerif_hidden_if_not_customizer"></div>';
        }
        echo '</div>';
        ?>
        <?php zerif_bottom_footer_trigger(); ?>
    </div>
    <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->

<?php zerif_after_footer_trigger(); ?>

</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->


<?php wp_footer(); ?>

<?php zerif_bottom_body_trigger(); ?>

</body>

</html>