<div id="home-header-wrap" class="home-header-wrap"><?php    $ml_youtube_background = get_theme_mod('ml_videobackground_youtube_url');    ?>    <?php//    $zerif_parallax_img1 = get_theme_mod('zerif_parallax_img1',get_template_directory_uri() . '/images/background1.jpg');//    $zerif_parallax_img2 = get_theme_mod('zerif_parallax_img2',get_template_directory_uri() . '/images/background2.png');//    $zerif_parallax_use = get_theme_mod('zerif_parallax_show');////    if ( $zerif_parallax_use == 1 && (!empty($zerif_parallax_img1) || !empty($zerif_parallax_img2)) ) {//        echo '<ul id="parallax_move">';//        if( !empty($zerif_parallax_img1) ) {//            echo '<li class="layer layer1" data-depth="0.10" style="background-image: url(' . esc_url( $zerif_parallax_img1 ) . ');"></li>';//        }//        if( !empty($zerif_parallax_img2) ) {//            echo '<li class="layer layer2" data-depth="0.20" style="background-image: url(' . esc_url( $zerif_parallax_img2 ) . ');"></li>';//        }//        echo '</ul>';//    }    $ml_webm_url = get_theme_mod('ml_videobackground_webm_file');    $ml_ogv_url = get_theme_mod('ml_videobackground_ogv_file');    $ml_mp4_url = get_theme_mod('ml_videobackground_mp4_file');    $ml_poster_url = get_theme_mod('ml_videobackground_poster_file');    $ml_overlay_color = get_theme_mod('ml_video_overlay_color');	echo '<div id="header-content-wrap-big-title" class="header-content-wrap">';    ?>    <div class="hero-video-container">        <div class="hero-video-overlay" style="background-color: <?php echo $ml_overlay_color ?>"></div>        <video id="heroVideo" class="hero-video" preload="auto" autoplay="true" loop="true" muted="muted" volume="0" poster="<?php echo $ml_poster_url ?>">            <source src="<?php echo $ml_webm_url ?>" type="video/webm">            <source src="<?php echo $ml_mp4_url ?>" type="video/mp4">            <source src="<?php $ml_ogv_url ?>" type="video/ogg">            <p>This browser does not support the video element.</p>        </video>    </div>    <?php		echo '<div class="container big-title-container">';		zerif_big_title_text_trigger();		$zerif_bigtitle_redbutton_label = get_theme_mod('zerif_bigtitle_redbutton_label',__('Features','zerif-lite'));		$zerif_bigtitle_redbutton_url = get_theme_mod('zerif_bigtitle_redbutton_url', esc_url( home_url( '/' ) ).'#focus');		$zerif_bigtitle_greenbutton_label = get_theme_mod('zerif_bigtitle_greenbutton_label',__("What's inside",'zerif-lite'));		$zerif_bigtitle_greenbutton_url = get_theme_mod('zerif_bigtitle_greenbutton_url',esc_url( home_url( '/' ) ).'#focus');		if( (!empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url)) || (!empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url))):			echo '<div class="buttons">';				zerif_big_title_buttons_top_trigger();				if ( !empty($zerif_bigtitle_redbutton_label) && !empty($zerif_bigtitle_redbutton_url) ):					echo '<a href="'.esc_url( $zerif_bigtitle_redbutton_url ).'" class="btn btn-primary custom-button red-btn">'.wp_kses_post( $zerif_bigtitle_redbutton_label ).'</a>';				elseif ( is_customize_preview() ):					echo '<a href="" class="btn btn-primary custom-button red-btn zerif_hidden_if_not_customizer"></a>';				endif;				if ( !empty($zerif_bigtitle_greenbutton_label) && !empty($zerif_bigtitle_greenbutton_url) ):					echo '<a href="'.esc_url( $zerif_bigtitle_greenbutton_url ).'" class="btn btn-primary custom-button green-btn">'.wp_kses_post( $zerif_bigtitle_greenbutton_label ).'</a>';				elseif ( is_customize_preview() ):					echo '<a href="" class="btn btn-primary custom-button green-btn zerif_hidden_if_not_customizer"></a>';				endif;				zerif_big_title_buttons_bottom_trigger();			echo '</div>';		endif;		echo '</div>';	echo '</div><!-- .header-content-wrap -->';		echo '<div class="clear"></div>';?></div>