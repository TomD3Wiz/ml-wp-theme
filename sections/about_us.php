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

            <!-- 3 COLUMNS OF ABOUT US-->

            <div class="row">


                <?php

                $zerif_aboutus_biglefttitle = get_theme_mod('zerif_aboutus_biglefttitle', __('Everything you see here is responsive and mobile-friendly.', 'zerif-lite'));
                $zerif_aboutus_text = get_theme_mod('zerif_aboutus_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.');

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

        </div>
        <!-- / END 3 COLUMNS OF ABOUT US-->

        </div> <!-- / END CONTAINER -->

        <?php zerif_bottom_about_us_trigger(); ?>

    </section> <!-- END ABOUT US SECTION -->

<?php zerif_after_about_us_trigger(); ?>