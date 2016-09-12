<?php$zerif_bottomribbon_text = get_theme_mod('zerif_bottomribbon_text');if (!empty($zerif_bottomribbon_text)):    echo '<section class="separator-one" id="ribbon_bottom">';    echo '<div class="container">';    echo '<h3 class="text" data-scrollreveal="enter left after 0s over 1s">';    echo wp_kses_post($zerif_bottomribbon_text);    echo '</h3>';    $zerif_bottomribbon_buttonlabel = get_theme_mod('zerif_bottomribbon_buttonlabel');    $zerif_bottomribbon_buttonlink = get_theme_mod('zerif_bottomribbon_buttonlink');    $zerif_bottomribbon_subtext = get_theme_mod('zerif_bottomribbon_subtext');    ?>    <div class="row">        <div class="text-column col-lg-6">            <?php echo $zerif_bottomribbon_subtext ?>        </div>        <?php        if (!empty($zerif_bottomribbon_buttonlabel) && !empty($zerif_bottomribbon_buttonlink)):            echo '<div data-scrollreveal="enter right after 0s over 1s col-lg-6">';            echo '<a href="' . esc_url($zerif_bottomribbon_buttonlink) . '" class="btn btn-primary custom-button red-btn">' . wp_kses_post($zerif_bottomribbon_buttonlabel) . '</a>';            echo '</div>';        elseif (is_customize_preview()):            echo '<div data-scrollreveal="enter right after 0s over 1s col-lg-6">';            echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';            echo '</div>';        endif;        ?>    </div>    <?php    echo '</div>';    echo '</section>';elseif (is_customize_preview()):    echo '<section class="separator-one zerif_hidden_if_not_customizer" id="ribbon_bottom">';    echo '<div class="color-overlay">';    /* text */    echo '<h3 class="container text" data-scrollreveal="enter left after 0s over 1s"></h3>';    $zerif_bottomribbon_buttonlabel = get_theme_mod('zerif_bottomribbon_buttonlabel');    $zerif_bottomribbon_buttonlink = get_theme_mod('zerif_bottomribbon_buttonlink');    if (!empty($zerif_bottomribbon_buttonlabel) && !empty($zerif_bottomribbon_buttonlink)):        echo '<div data-scrollreveal="enter right after 0s over 1s">';        echo '<a href="' . esc_url($zerif_bottomribbon_buttonlink) . '" class="btn btn-primary custom-button green-btn">' . wp_kses_post($zerif_bottomribbon_buttonlabel) . '</a>';        echo '</div>';    elseif (is_customize_preview()):        echo '<div data-scrollreveal="enter right after 0s over 1s">';        echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';        echo '</div>';    endif;    echo '</div>';    echo '</section>';endif;?>