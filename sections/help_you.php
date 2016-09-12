<section class="help-you" id="helpyou">
    <div class="container">
        <!-- SECTION HEADER -->
        <div class="section-header">
            <?php
            /* Title */
            $zerif_helpyou_title = get_theme_mod('zerif_helpyou_title', __('About', 'zerif-lite'));

            if (!empty($zerif_helpyou_title)):
                echo '<h2 class="about-title">' . wp_kses_post($zerif_helpyou_title) . '</h2>';
            elseif (is_customize_preview()):
                echo '<h2 class="about-title zerif_hidden_if_not_customizer"></h2>';
            endif;

            /* Subtitle */
            $zerif_helpyou_subtitle = get_theme_mod('zerif_helpyou_subtitle', __('Use this section to showcase important details about your business.', 'zerif-lite'));

            if (!empty($zerif_helpyou_subtitle)):

                echo '<div class="about-subtitle section-legend">';

                echo wp_kses_post($zerif_helpyou_subtitle);

                echo '</div>';

            elseif (is_customize_preview()):

                echo '<div class="about-subtitle section-legend zerif_hidden_if_not_customizer">' . wp_kses_post($zerif_helpyou_subtitle) . '</div>';

            endif;

            ?>

        </div>
        <!-- / END SECTION HEADER -->
        <div class="row">


            <?php
            $zerif_helpyou_feature1_title = get_theme_mod('zerif_helpyou_feature1_title', __('YOUR SKILL #1', 'zerif-lite'));
            $zerif_helpyou_feature1_text = get_theme_mod('zerif_helpyou_feature1_text');
            $ml_about_feature1_img = get_theme_mod('ml_helpyou_feature1_img');

            $zerif_helpyou_feature2_title = get_theme_mod('zerif_helpyou_feature2_title', __('YOUR SKILL #2', 'zerif-lite'));
            $zerif_helpyou_feature2_text = get_theme_mod('zerif_helpyou_feature2_text');
            $ml_about_feature2_img = get_theme_mod('ml_helpyou_feature2_img');

            $zerif_helpyou_feature3_title = get_theme_mod('zerif_helpyou_feature3_title', __('YOUR SKILL #3', 'zerif-lite'));
            $zerif_helpyou_feature3_text = get_theme_mod('zerif_helpyou_feature3_text');
            $ml_about_feature3_img = get_theme_mod('ml_helpyou_feature3_img');

            $zerif_helpyou_feature4_title = get_theme_mod('zerif_helpyou_feature4_title', __('YOUR SKILL #4', 'zerif-lite'));
            $zerif_helpyou_feature4_text = get_theme_mod('zerif_helpyou_feature4_text');
            $ml_about_feature4_img = get_theme_mod('ml_helpyou_feature4_img');
            /* COLUMN 1 - SKILS */
            ?>
            <div class="col-lg-12 col-md-12 column zerif-rtl-skills ">

                <div class="skills" data-scrollreveal="enter right after 0s over 1s">

                    <!-- SKILL ONE -->

                    <?php if (!empty($zerif_helpyou_feature1_title) || !empty($zerif_helpyou_feature1_text)): ?>
                        <div class="col-lg-3">
                            <div class="feature-wrapper">
                                <?php
                                if (!empty($ml_about_feature1_img)):
                                    echo "<img src=\"{$ml_about_feature1_img}\" class=\"home-feature-img\" />";
                                endif;

                                if (!empty($zerif_helpyou_feature1_title)):
                                    echo '<div class="section-legend">' . wp_kses_post($zerif_helpyou_feature1_title) . '</div>';
                                elseif (is_customize_preview()):
                                    echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
                                endif;
                                echo '<div class="clear">';
                                if (!empty($zerif_helpyou_feature1_text)):
                                    echo '<p>' . wp_kses_post($zerif_helpyou_feature1_text) . '</p>';
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
                    if (!empty($zerif_helpyou_feature2_title) || !empty($zerif_helpyou_feature2_text)):
                        ?>

                        <div class="col-lg-3">
                            <div class="feature-wrapper">
                                <?php
                                if (!empty($ml_about_feature2_img)):
                                    echo "<img src=\"{$ml_about_feature2_img}\" class=\"home-feature-img\" />";
                                endif;
                                if (!empty($zerif_helpyou_feature2_title)):
                                    echo '<div class="section-legend">' . wp_kses_post($zerif_helpyou_feature2_title) . '</div>';
                                elseif (is_customize_preview()):
                                    echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
                                endif;
                                echo '<div class="clear">';
                                if (!empty($zerif_helpyou_feature2_text)):
                                    echo '<p>' . wp_kses_post($zerif_helpyou_feature2_text) . '</p>';
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
                    if (!empty($zerif_helpyou_feature3_title) || !empty($zerif_helpyou_feature3_text)):
                        ?>
                        <div class="col-lg-3">
                            <div class="feature-wrapper">
                                <?php
                                if (!empty($ml_about_feature3_img)):
                                    echo "<img src=\"{$ml_about_feature3_img}\" class=\"home-feature-img\" />";
                                endif;
                                if (!empty($zerif_helpyou_feature3_title)):
                                    echo '<div class="section-legend">' . wp_kses_post($zerif_helpyou_feature3_title) . '</div>';
                                elseif (is_customize_preview()):
                                    echo '<div class="section-legend zerif_hidden_if_not_customizer"></div>';
                                endif;
                                echo '<div class="clear">';
                                if (!empty($zerif_helpyou_feature3_text)):
                                    echo '<p>' . wp_kses_post($zerif_helpyou_feature3_text) . '</p>';
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
                    if (!empty($zerif_helpyou_feature4_title) || !empty($zerif_helpyou_feature4_text)):
                        ?>

                        <div class="col-lg-3">
                            <div class="feature-wrapper">
                                <?php
                                if (!empty($ml_about_feature4_img)):
                                    echo "<img src=\"{$ml_about_feature4_img}\" class=\"home-feature-img\" />";
                                endif;
                                if (!empty($zerif_helpyou_feature4_title)):
                                    echo '<div class="section-legend">' . wp_kses_post($zerif_helpyou_feature4_title) . '</div>';
                                elseif (is_customize_preview()):
                                    echo '<div class="section-legend zerif_hidden_if_not_customizer">';
                                endif;
                                echo '<div class="clear">';
                                if (!empty($zerif_helpyou_feature4_text)):
                                    echo '<p>' . wp_kses_post($zerif_helpyou_feature4_text) . '</p>';
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
        <div class="row">
            <?php
            $ml_button_text = get_theme_mod('zerif_helpyou_redbutton_label');
            $ml_button_url = get_theme_mod('zerif_helpyou_redbutton_url');
            $ml_button_label = get_theme_mod('zerif_helpyou_buttonlabel');

            echo '<div class="about-us-callout-container">';
            echo '<span class="callout-label">'.$ml_button_label.'</span>';
            echo '<a href="'.esc_url( $ml_button_url ).'" class="btn btn-primary custom-button red-btn intro-button">'.wp_kses_post( $ml_button_text ).'</a>';
            echo '</div>';
            ?>
        </div>
    </div>
</section> <!-- END ABOUT US SECTION -->

