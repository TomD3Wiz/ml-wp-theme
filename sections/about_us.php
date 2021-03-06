<?php zerif_before_about_us_trigger(); ?>

    <section class="about-us" id="aboutus">

        <?php zerif_top_about_us_trigger(); ?>

        <div class="container">

            <!-- SECTION HEADER -->

            <div class="section-header">

                <?php

                /* Title */
                zerif_about_us_header_title_trigger();

                /* Subtitle */
                zerif_about_us_header_subtitle_trigger();

                ?>

            </div>
            <!-- / END SECTION HEADER -->

            <div class="row">
                <?php
                $zerif_aboutus_feature1_title = get_theme_mod('zerif_aboutus_feature1_title', __('YOUR SKILL #1', 'zerif-lite'));
                $zerif_aboutus_feature1_text = get_theme_mod('zerif_aboutus_feature1_text');
                $ml_about_feature1_img = get_theme_mod('ml_aboutus_feature1_img');

                $zerif_aboutus_feature2_title = get_theme_mod('zerif_aboutus_feature2_title', __('YOUR SKILL #2', 'zerif-lite'));
                $zerif_aboutus_feature2_text = get_theme_mod('zerif_aboutus_feature2_text');
                $ml_about_feature2_img = get_theme_mod('ml_aboutus_feature2_img');

                $zerif_aboutus_feature3_title = get_theme_mod('zerif_aboutus_feature3_title', __('YOUR SKILL #3', 'zerif-lite'));
                $zerif_aboutus_feature3_text = get_theme_mod('zerif_aboutus_feature3_text');
                $ml_about_feature3_img = get_theme_mod('ml_aboutus_feature3_img');

                $zerif_aboutus_feature4_title = get_theme_mod('zerif_aboutus_feature4_title', __('YOUR SKILL #4', 'zerif-lite'));
                $zerif_aboutus_feature4_text = get_theme_mod('zerif_aboutus_feature4_text');
                $ml_about_feature4_img = get_theme_mod('ml_aboutus_feature4_img');
                /* COLUMN 1 - SKILS */
                ?>
                <div class="col-lg-12 col-md-12 column zerif-rtl-skills ">

                    <div class="skills" data-scrollreveal="enter right after 0s over 1s">

                        <!-- SKILL ONE -->

                        <?php if (!empty($zerif_aboutus_feature1_title) || !empty($zerif_aboutus_feature1_text)): ?>
                            <div class="col-lg-6">
                                <div class="feature-wrapper">
                                    <?php
                                    if (!empty($ml_about_feature1_img)):
                                        echo '<div class="col-lg-6">';
                                        echo "<img src=\"{$ml_about_feature1_img}\" class=\"home-feature-img\" />";
                                        echo "</div>";
                                    endif;

                                    if (!empty($zerif_aboutus_feature1_title)):
                                        echo '<div class="section-legend col-lg-6">' . wp_kses_post($zerif_aboutus_feature1_title) . '</div>';
                                    elseif (is_customize_preview()):
                                        echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
                                    endif;
                                    echo '<div class="clear">';
                                    if (!empty($zerif_aboutus_feature1_text)):
                                        echo '<p>' . wp_kses_post($zerif_aboutus_feature1_text) . '</p>';
                                    elseif (is_customize_preview()):
                                        echo '<p class="zerif_hidden_if_not_customizer"></p>';
                                    endif;
                                    echo '</div>';
                                    ?>
                                </div>
                            </div>

                        <?php endif; ?>

                        <!-- SKILL TWO -->

                        <?php
                        if (!empty($zerif_aboutus_feature2_title) || !empty($zerif_aboutus_feature2_text)):
                            ?>

                            <div class="col-lg-6">
                                <div class="feature-wrapper">
                                    <?php
                                    if (!empty($ml_about_feature2_img)):
                                        echo '<div class="col-lg-6">';
                                        echo "<img src=\"{$ml_about_feature2_img}\" class=\"home-feature-img\" />";
                                        echo '</div>';
                                    endif;
                                    if (!empty($zerif_aboutus_feature2_title)):
                                        echo '<div class="section-legend col-lg-6">' . wp_kses_post($zerif_aboutus_feature2_title) . '</div>';
                                    elseif (is_customize_preview()):
                                        echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
                                    endif;
                                    echo '<div class="clear">';
                                    if (!empty($zerif_aboutus_feature2_text)):
                                        echo '<p>' . wp_kses_post($zerif_aboutus_feature2_text) . '</p>';
                                    elseif (is_customize_preview()):
                                        echo '<p class="zerif_hidden_if_not_customizer"></p>';
                                    endif;
                                    echo '</div>';
                                    ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <!-- SKILL THREE -->
                        <?php
                        if (!empty($zerif_aboutus_feature3_title) || !empty($zerif_aboutus_feature3_text)):
                            ?>
                            <div class="col-lg-6">
                                <div class="feature-wrapper">
                                    <?php
                                    if (!empty($ml_about_feature3_img)):
                                        echo '<div class="col-lg-6">';
                                        echo "<img src=\"{$ml_about_feature3_img}\" class=\"home-feature-img\" />";
                                        echo '</div>';
                                    endif;
                                    if (!empty($zerif_aboutus_feature3_title)):
                                        echo '<div class="section-legend col-lg-6">' . wp_kses_post($zerif_aboutus_feature3_title) . '</div>';
                                    elseif (is_customize_preview()):
                                        echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
                                    endif;
                                    echo '<div class="clear">';
                                    if (!empty($zerif_aboutus_feature3_text)):
                                        echo '<p>' . wp_kses_post($zerif_aboutus_feature3_text) . '</p>';
                                    elseif (is_customize_preview()):
                                        echo '<p class="zerif_hidden_if_not_customizer"></p>';
                                    endif;
                                    echo '</div>';
                                    ?>
                                </div>
                            </div>

                        <?php endif; ?>

                        <!-- SKILL FOUR -->
                        <?php
                        if (!empty($zerif_aboutus_feature4_title) || !empty($zerif_aboutus_feature4_text)):
                            ?>

                            <div class="col-lg-6">
                                <div class="feature-wrapper">
                                    <?php
                                    if (!empty($ml_about_feature4_img)):
                                        echo '<div class="col-lg-6">';
                                        echo "<img src=\"{$ml_about_feature4_img}\" class=\"home-feature-img\" />";
                                        echo '</div>';
                                    endif;
                                    if (!empty($zerif_aboutus_feature4_title)):
                                        echo '<div class="section-legend col-lg-6">' . wp_kses_post($zerif_aboutus_feature4_title) . '</div>';
                                    elseif (is_customize_preview()):
                                        echo '<div class="section-legend zerif_hidden_if_not_customizer">';
                                    endif;
                                    echo '<div class="clear">';
                                    if (!empty($zerif_aboutus_feature4_text)):
                                        echo '<p>' . wp_kses_post($zerif_aboutus_feature4_text) . '</p>';
                                    elseif (is_customize_preview()):
                                        echo '<p class="zerif_hidden_if_not_customizer"></p>';
                                    endif;
                                    echo '</div>';
                                    ?>
                                </div>
                            </div>

                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <!-- / END SKILLS COLUMN-->

            <div class="row">
                <?php
                    $ml_button_text = get_theme_mod('zerif_aboutus_redbutton_label');
                    $ml_button_url = get_theme_mod('zerif_aboutus_redbutton_url');
                    $ml_button_label = get_theme_mod('zerif_aboutus_buttonlabel');

                    echo '<div class="about-us-callout-container">';
                    echo '<span class="callout-label">'.$ml_button_label.'</span>';
                    echo '<a href="'.esc_url( $ml_button_url ).'" class="btn btn-primary custom-button red-btn intro-button">'.wp_kses_post( $ml_button_text ).'</a>';
                    echo '</div>';
                ?>
            </div>
        </div> <!-- / END CONTAINER -->

        <?php zerif_bottom_about_us_trigger(); ?>

    </section> <!-- END ABOUT US SECTION -->

<?php zerif_after_about_us_trigger(); ?>