<?php
/**
 * zerif Theme Customizer
 *
 * @package zerif
 */
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function zerif_customize_register($wp_customize)
{
    class Zerif_Customize_Textarea_Control extends WP_Customize_Control
    {
        public $type = 'textarea';

        public function render_content()
        {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <textarea rows="5"
                          style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>
            </label>
        <?php
        }
    }

    class Zerif_Customizer_Number_Control extends WP_Customize_Control
    {
        public $type = 'number';

        public function render_content()
        {
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
                <input type="number" <?php $this->link(); ?> value="<?php echo intval($this->value()); ?>"/>
            </label>
        <?php
        }
    }

    class Zerif_Theme_Support extends WP_Customize_Control
    {
        public function render_content()
        {
            echo __('Check out the <a href="http://themeisle.com/themes/zerif-pro-one-page-wordpress-theme/">PRO version</a> for full control over the frontpage SECTIONS ORDER and the COLOR SCHEME!', 'zerif-lite');
        }
    }

    class Zerif_Theme_Support_Videobackground extends WP_Customize_Control
    {
        public function render_content()
        {
            echo __('Implemente me Tom with jQuery', 'zerif-lite');
        }
    }

    class Zerif_Theme_Support_Googlemap extends WP_Customize_Control
    {
        public function render_content()
        {
        }
    }

    class Zerif_Theme_Support_Pricing extends WP_Customize_Control
    {
        public function render_content()
        {
        }
    }

    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';
    $wp_customize->remove_section('colors');

    /***********************************************/
    /************** GENERAL OPTIONS  ***************/
    /***********************************************/
    $wp_customize->add_panel('panel_general', array(
        'priority' => 30,
        'capability' => 'edit_theme_options',
        'title' => __('General options', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_general_section', array(
        'title' => __('General', 'zerif-lite'),
        'priority' => 30,
        'panel' => 'panel_general'
    ));

    $wp_customize->add_setting('zerif_use_safe_font', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_use_safe_font', array(
        'type' => 'checkbox',
        'label' => 'Use safe font?',
        'section' => 'zerif_general_section',
        'priority' => 1
    ));

    /* LOGO	*/
    $wp_customize->add_setting('zerif_logo', array(
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_logo', array(
        'label' => __('Logo', 'zerif-lite'),
        'section' => 'title_tagline',
        'settings' => 'zerif_logo',
        'priority' => 1,
    )));

    /* Disable preloader */
    $wp_customize->add_setting('zerif_disable_preloader', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_disable_preloader', array(
        'type' => 'checkbox',
        'label' => __('Disable preloader?', 'zerif-lite'),
        'section' => 'zerif_general_section',
        'priority' => 2,
    ));

    /* Disable smooth scroll */
    $wp_customize->add_setting('zerif_disable_smooth_scroll', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_disable_smooth_scroll', array(
        'type' => 'checkbox',
        'label' => __('Disable smooth scroll?', 'zerif-lite'),
        'section' => 'zerif_general_section',
        'priority' => 3,
    ));

    /* Enable accessibility */
    $wp_customize->add_setting('zerif_accessibility', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_accessibility', array(
        'type' => 'checkbox',
        'label' => __('Enable accessibility?', 'zerif-lite'),
        'section' => 'zerif_general_section',
        'priority' => 4,
    ));

    /* COPYRIGHT */
    $wp_customize->add_setting('zerif_copyright', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_copyright', array(
        'label' => __('Footer Copyright', 'zerif-lite'),
        'section' => 'zerif_general_section',
        'priority' => 5,
    ));

    /* Change the template to full width for page.php */
    $wp_customize->add_setting('zerif_change_to_full_width', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_change_to_full_width', array(
        'type' => 'checkbox',
        'label' => 'Change the template to Full width for all the pages?',
        'section' => 'zerif_general_section',
        'priority' => 6
    ));

    /* social */
    $wp_customize->add_section('zerif_general_socials_section', array(
        'title' => __('Footer Social Icons', 'zerif-lite'),
        'priority' => 31,
        'panel' => 'panel_general'
    ));

    /* facebook */
    $wp_customize->add_setting('zerif_socials_facebook', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));

    $wp_customize->add_control('zerif_socials_facebook', array(
        'label' => __('Facebook link', 'zerif-lite'),
        'section' => 'zerif_general_socials_section',
        'priority' => 4,
    ));

    /* twitter */
    $wp_customize->add_setting('zerif_socials_twitter', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));

    $wp_customize->add_control('zerif_socials_twitter', array(
        'label' => __('Twitter link', 'zerif-lite'),
        'section' => 'zerif_general_socials_section',
        'priority' => 5,
    ));

    /* linkedin */
    $wp_customize->add_setting('zerif_socials_linkedin', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));
    $wp_customize->add_control('zerif_socials_linkedin', array(
        'label' => __('Linkedin link', 'zerif-lite'),
        'section' => 'zerif_general_socials_section',
        'priority' => 6,
    ));

    /* behance */
    $wp_customize->add_setting('zerif_socials_behance', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));

    $wp_customize->add_control('zerif_socials_behance', array(
        'label' => __('Behance link', 'zerif-lite'),
        'section' => 'zerif_general_socials_section',
        'priority' => 7,
    ));

    /* dribbble */
    $wp_customize->add_setting('zerif_socials_dribbble', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => '#'
    ));

    $wp_customize->add_control('zerif_socials_dribbble', array(
        'label' => __('Dribbble link', 'zerif-lite'),
        'section' => 'zerif_general_socials_section',
        'priority' => 8,
    ));

    /* instagram */
    $wp_customize->add_setting('zerif_socials_instagram', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('zerif_socials_instagram', array(
        'label' => __('Instagram link', 'zerif-lite'),
        'section' => 'zerif_general_socials_section',
        'priority' => 9,
    ));

    $wp_customize->add_section('zerif_general_footer_section', array(
        'title' => __('Footer Content', 'zerif-lite'),
        'priority' => 32,
        'panel' => 'panel_general'
    ));

    /* address - ICON */
    $wp_customize->add_setting('zerif_business_footer_icon', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'zerif_business_footer_icon', array(
        'label' => __('Business Footer logo', 'zerif-lite'),
        'section' => 'zerif_general_footer_section',
        'priority' => 9,
    )));

    /* address */
    $wp_customize->add_setting('zerif_subscribe', array(
        'sanitize_callback' => 'zerif_sanitize_input',
    ));

    $wp_customize->add_control(new Zerif_Customize_Textarea_Control($wp_customize, 'zerif_subscribe', array(
        'label' => __('Subscribe text', 'zerif-lite'),
        'section' => 'zerif_general_footer_section',
        'priority' => 10
    )));

    /* address */
    $wp_customize->add_setting('zerif_address', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Company address', 'zerif-lite'),
    ));

    $wp_customize->add_control(new Zerif_Customize_Textarea_Control($wp_customize, 'zerif_address', array(
        'label' => __('Address', 'zerif-lite'),
        'section' => 'zerif_general_footer_section',
        'priority' => 10
    )));

    /* email */
    $wp_customize->add_setting('zerif_email', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => '<a href="mailto:contact@site.com">contact@site.com</a>',
    ));

    $wp_customize->add_control(new Zerif_Customize_Textarea_Control($wp_customize, 'zerif_email', array(
        'label' => __('Email', 'zerif-lite'),
        'section' => 'zerif_general_footer_section',
        'priority' => 12
    )));

    /* phone number */
    $wp_customize->add_setting('zerif_phone', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => '<a href="tel:0 332 548 954">0 332 548 954</a>',
    ));

    $wp_customize->add_control(new Zerif_Customize_Textarea_Control($wp_customize, 'zerif_phone', array(
        'label' => __('Phone number', 'zerif-lite'),
        'section' => 'zerif_general_footer_section',
        'priority' => 14
    )));

    /*****************************************************/
    /**************    BIG TITLE SECTION *******************/
    /****************************************************/


    $wp_customize->add_panel('panel_big_title', array(
        'priority' => 31,
        'capability' => 'edit_theme_options',
        'title' => __('Introduction Section', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_bigtitle_section', array(
        'title' => __('Main content', 'zerif-lite'),
        'priority' => 1,
        'panel' => 'panel_big_title'
    ));

    /* show/hide */
    $wp_customize->add_setting('zerif_bigtitle_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bigtitle_show', array(
        'type' => 'checkbox',
        'label' => __('Hide big title section?', 'zerif-lite'),
        'section' => 'zerif_bigtitle_section',
        'priority' => 1,
    ));

    /* title */
    $wp_customize->add_setting('zerif_bigtitle_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('ONE OF THE TOP 10 MOST POPULAR THEMES ON WORDPRESS.ORG', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bigtitle_title', array(
        'label' => __('Title', 'zerif-lite'),
        'section' => 'zerif_bigtitle_section',
        'priority' => 2,
    ));

    /* title */
    $wp_customize->add_setting('zerif_bigtitle_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bigtitle_subtitle', array(
        'label' => __('Title', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_bigtitle_section',
        'priority' => 2,
    ));

    /* red button */
    $wp_customize->add_setting('zerif_bigtitle_redbutton_label', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Features', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bigtitle_redbutton_label', array(
        'label' => __('Red button label', 'zerif-lite'),
        'section' => 'zerif_bigtitle_section',
        'priority' => 3,
    ));

    $wp_customize->add_setting('zerif_bigtitle_redbutton_url', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => esc_url(home_url('/')) . '#focus',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bigtitle_redbutton_url', array(
        'label' => __('Red button link', 'zerif-lite'),
        'section' => 'zerif_bigtitle_section',
        'priority' => 4,
    ));

    $wp_customize->add_setting('ml_bigtitle_icon', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_bigtitle_icon', array(
        'label' => __('Icon', 'zerif-lite'),
        'section' => 'zerif_bigtitle_section',
        'settings' => 'ml_bigtitle_icon',
        'priority' => 1,
    )));

    /*************************************************************/
    /************* Video background(available in pro) ************/
    /*************************************************************/

    $wp_customize->add_section('zerif_videobackground_in_pro_section', array(
        'title' => __('Video background', 'zerif-lite'),
        'priority' => 3,
        'panel' => 'panel_big_title'
    ));

    $wp_customize->add_setting('ml_videobackground_youtube_url', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control('ml_videobackground_youtube_url', array(
        'label' => __('Youtube Video Background URL', 'zerif-lite'),
        'priority' => 3,
        'section' => 'zerif_videobackground_in_pro_section',
        'type' => 'url'
    ));

    $wp_customize->add_setting('ml_videobackground_mp4_file', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Upload_Control(
            $wp_customize,
            'ml_videobackground_mp4_file',
            array(
                'label' => __('MP4 video background file', 'zerif-lite'),
                'section' => 'zerif_videobackground_in_pro_section',
            )
        )
    );

    $wp_customize->add_setting('ml_videobackground_webm_file', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Upload_Control(
            $wp_customize,
            'ml_videobackground_webm_file',
            array(
                'label' => __('WEBM video background file', 'zerif-lite'),
                'section' => 'zerif_videobackground_in_pro_section',
            )
        )
    );

    $wp_customize->add_setting('ml_videobackground_ogv_file', array(
        'sanitize_callback' => 'esc_url_raw'
    ));

    $wp_customize->add_control(new WP_Customize_Upload_Control(
            $wp_customize,
            'ml_videobackground_ogv_file',
            array(
                'label' => __('OGG video background file', 'zerif-lite'),
                'section' => 'zerif_videobackground_in_pro_section',
            )
        )
    );

    $wp_customize->add_setting('ml_videobackground_poster_file', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_videobackground_poster_file', array(
        'label' => __('Poster File', 'zerif-lite'),
        'section' => 'zerif_videobackground_in_pro_section',
        'settings' => 'ml_videobackground_poster_file',
        'priority' => 1,
    )));

    /* testimonials show/hide */
    $wp_customize->add_setting('ml_video_overlay_color', array(
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ml_video_overlay_color',
        array(
            'label' => __('Overlay Color', 'mytheme'),
            'section' => 'zerif_videobackground_in_pro_section',
            'settings' => 'ml_video_overlay_color',
        )));


    /********************************************************************/
    /*************  Mentor in your pocket SECTION **********************************/
    /********************************************************************/

    $wp_customize->add_panel('panel_ourfocus', array(
        'priority' => 32,
        'capability' => 'edit_theme_options',
        'title' => __('Mentor in your pocket', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_ourfocus_section', array(
        'title' => __('Content', 'zerif-lite'),
        'priority' => 1,
        'panel' => 'panel_ourfocus'
    ));

    /* show/hide */
    $wp_customize->add_setting('zerif_ourfocus_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ourfocus_show', array(
        'type' => 'checkbox',
        'label' => __('Hide our focus section?', 'zerif-lite'),
        'section' => 'zerif_ourfocus_section',
        'priority' => 1,
    ));

    /* our focus title */
    $wp_customize->add_setting('zerif_ourfocus_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('FEATURES', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ourfocus_title', array(
        'label' => __('Title', 'zerif-lite'),
        'section' => 'zerif_ourfocus_section',
        'priority' => 2,
    ));

    /* our focus subtitle */
    $wp_customize->add_setting('zerif_ourfocus_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('What makes this single-page WordPress theme unique.', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ourfocus_subtitle', array(
        'label' => __('Our focus subtitle', 'zerif-lite'),
        'section' => 'zerif_ourfocus_section',
        'priority' => 3,
    ));
    /****************************************************/
    /************    PARALLAX IMAGES *********************/
    /****************************************************/

    $wp_customize->add_section('zerif_parallax_section', array(
        'title' => __('Parallax effect', 'zerif-lite'),
        'priority' => 2,
        'panel' => 'panel_ourfocus'
    ));

    /* show/hide */
    $wp_customize->add_setting('zerif_parallax_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_parallax_show', array(
        'type' => 'checkbox',
        'label' => __('Use parallax effect?', 'zerif-lite'),
        'section' => 'zerif_parallax_section',
        'priority' => 1,
    ));

    /* IMAGE 1*/
    $wp_customize->add_setting('zerif_parallax_img1', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => get_template_directory_uri() . '/images/background1.jpg'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_parallax_img1', array(
        'label' => __('Image 1', 'zerif-lite'),
        'section' => 'zerif_parallax_section',
        'settings' => 'zerif_parallax_img1',
        'priority' => 1,
    )));

    /* IMAGE 2 */
    $wp_customize->add_setting('zerif_parallax_img2', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => get_template_directory_uri() . '/images/background2.png'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'themeslug_parallax_img2', array(
        'label' => __('Image 2', 'zerif-lite'),
        'section' => 'zerif_parallax_section',
        'settings' => 'zerif_parallax_img2',
        'priority' => 2,
    )));
    /************************************/
    /******* ABOUT US SECTION ***********/
    /************************************/

    $wp_customize->add_panel('panel_about', array(
        'priority' => 34,
        'capability' => 'edit_theme_options',
        'title' => __('Features & Benefits section', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_aboutus_settings_section', array(
        'title' => __('Settings', 'zerif-lite'),
        'priority' => 1,
        'panel' => 'panel_about'
    ));

    /* about us show/hide */
    $wp_customize->add_setting('zerif_aboutus_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_show', array(
        'type' => 'checkbox',
        'label' => __('Hide about us section?', 'zerif-lite'),
        'section' => 'zerif_aboutus_settings_section',
        'priority' => 1,
    ));

    $wp_customize->add_section('zerif_aboutus_main_section', array(
        'title' => __('Main content', 'zerif-lite'),
        'priority' => 2,
        'panel' => 'panel_about'
    ));

    /* title */
    $wp_customize->add_setting('zerif_aboutus_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('About', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_title', array(
        'label' => __('Title', 'zerif-lite'),
        'section' => 'zerif_aboutus_main_section',
        'priority' => 2,
    ));

    /* subtitle */
    $wp_customize->add_setting('zerif_aboutus_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Use this section to showcase important details about your business.', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_subtitle', array(
        'label' => __('Subtitle', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_aboutus_main_section',
        'priority' => 3,
    ));


    /* text */
    $wp_customize->add_setting('zerif_aboutus_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.', 'zerif-lite'),
    ));

    $wp_customize->add_control('zerif_aboutus_text', array(
        'type' => 'textarea',
        'label' => __('Text', 'zerif-lite'),
        'section' => 'zerif_aboutus_main_section',
        'priority' => 5,
    ));

    $wp_customize->add_section('zerif_aboutus_feat1_section', array(
        'title' => __('Feature no#1', 'zerif-lite'),
        'priority' => 3,
        'panel' => 'panel_about'
    ));

    /* feature no#1 */
    $wp_customize->add_setting('zerif_aboutus_feature1_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #1', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature1_title', array(
        'label' => __('Feature no1 title', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat1_section',
        'priority' => 6,
    ));

    $wp_customize->add_setting('zerif_aboutus_feature1_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature1_text', array(
        'label' => __('Feature no1 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_aboutus_feat1_section',
        'priority' => 7,
    ));

    $wp_customize->add_setting('ml_aboutus_feature1_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_aboutus_feature1_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat1_section',
        'settings' => 'ml_aboutus_feature1_img',
        'priority' => 10,
    )));

    $wp_customize->add_section('zerif_aboutus_feat2_section', array(
        'title' => __('Feature no#2', 'zerif-lite'),
        'priority' => 4,
        'panel' => 'panel_about'
    ));



    $wp_customize->add_control('zerif_bigtitle_redbutton_url', array(
        'label' => __('Red button link', 'zerif-lite'),
        'section' => 'zerif_bigtitle_section',
        'priority' => 4,
    ));


    /* feature no#2 */
    $wp_customize->add_setting('zerif_aboutus_feature2_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #2', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature2_title', array(
        'label' => __('Feature no2 title', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat2_section',
        'priority' => 9,
    ));

    $wp_customize->add_setting('zerif_aboutus_feature2_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature2_text', array(
        'label' => __('Feature no2 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_aboutus_feat2_section',
        'priority' => 10,
    ));

    $wp_customize->add_setting('ml_aboutus_feature2_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_aboutus_feature2_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat2_section',
        'settings' => 'ml_aboutus_feature2_img',
        'priority' => 11,
    )));

    $wp_customize->add_section('zerif_aboutus_feat3_section', array(
        'title' => __('Feature no#3', 'zerif-lite'),
        'priority' => 5,
        'panel' => 'panel_about'
    ));

    /* feature no#3 */
    $wp_customize->add_setting('zerif_aboutus_feature3_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #3', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature3_title', array(
        'label' => __('Feature no3 title', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat3_section',
        'priority' => 12,
    ));

    $wp_customize->add_setting('zerif_aboutus_feature3_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature3_text', array(
        'label' => __('Feature no3 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_aboutus_feat3_section',
        'priority' => 13,
    ));

    $wp_customize->add_setting('ml_aboutus_feature3_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_aboutus_feature3_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat3_section',
        'settings' => 'ml_aboutus_feature3_img',
        'priority' => 14,
    )));

    /* feature no#4 */
    $wp_customize->add_section('zerif_aboutus_feat4_section', array(
        'title' => __('Feature no#4', 'zerif-lite'),
        'priority' => 5,
        'panel' => 'panel_about'
    ));
    $wp_customize->add_setting('zerif_aboutus_feature4_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #4', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature4_title', array(
        'label' => __('Feature no4 title', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat4_section',
        'priority' => 15,
    ));

    $wp_customize->add_setting('zerif_aboutus_feature4_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_feature4_text', array(
        'label' => __('Feature no4 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_aboutus_feat4_section',
        'priority' => 16,
    ));

    $wp_customize->add_setting('ml_aboutus_feature4_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_aboutus_feature4_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_aboutus_feat4_section',
        'settings' => 'ml_aboutus_feature4_img',
        'priority' => 22,
    )));

    /* red button */
    $wp_customize->add_section('zerif_aboutus_button_callout_section', array(
        'title' => __('Call to Action button', 'zerif-lite'),
        'priority' => 5,
        'panel' => 'panel_about'
    ));


    $wp_customize->add_setting('zerif_aboutus_redbutton_label', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Features', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_redbutton_label', array(
        'label' => __('Red button label', 'zerif-lite'),
        'section' => 'zerif_aboutus_button_callout_section',
        'priority' => 3,
    ));

    $wp_customize->add_setting('zerif_aboutus_redbutton_url', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => esc_url(home_url('/')) . '#focus',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_redbutton_url', array(
        'label' => __('Red button link', 'zerif-lite'),
        'section' => 'zerif_aboutus_button_callout_section',
        'priority' => 4,
    ));

    /* title */
    $wp_customize->add_setting('zerif_aboutus_buttonlabel', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_aboutus_buttonlabel', array(
        'label' => __('Title', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_aboutus_button_callout_section',
        'priority' => 2,
    ));


    /************************************/
    /******* HELP YOU SECTION ***********/
    /************************************/

    $wp_customize->add_panel('panel_helpyou', array(
        'priority' => 34,
        'capability' => 'edit_theme_options',
        'title' => __('Help You section', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_helpyou_settings_section', array(
        'title' => __('Settings', 'zerif-lite'),
        'priority' => 1,
        'panel' => 'panel_helpyou'
    ));

    /* about us show/hide */
    $wp_customize->add_setting('zerif_helpyou_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_show', array(
        'type' => 'checkbox',
        'label' => __('Hide about us section?', 'zerif-lite'),
        'section' => 'zerif_helpyou_settings_section',
        'priority' => 1,
    ));

    $wp_customize->add_section('zerif_helpyou_main_section', array(
        'title' => __('Main content', 'zerif-lite'),
        'priority' => 2,
        'panel' => 'panel_helpyou'
    ));

    /* title */
    $wp_customize->add_setting('zerif_helpyou_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('About', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_title', array(
        'label' => __('Title', 'zerif-lite'),
        'section' => 'zerif_helpyou_main_section',
        'priority' => 2,
    ));

    /* subtitle */
    $wp_customize->add_setting('zerif_helpyou_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Use this section to showcase important details about your business.', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_subtitle', array(
        'label' => __('Subtitle', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_helpyou_main_section',
        'priority' => 3,
    ));


    /* text */
    $wp_customize->add_setting('zerif_helpyou_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros.<br><br> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla nec massa enim. Aliquam viverra at est ullamcorper sollicitudin. Proin a leo sit amet nunc malesuada imperdiet pharetra ut eros. <br><br>Mauris vel nunc at ipsum fermentum pellentesque quis ut massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas non adipiscing massa. Sed ut fringilla sapien. Cras sollicitudin, lectus sed tincidunt cursus, magna lectus vehicula augue, a lobortis dui orci et est.', 'zerif-lite'),
    ));

    $wp_customize->add_control('zerif_helpyou_text', array(
        'type' => 'textarea',
        'label' => __('Text', 'zerif-lite'),
        'section' => 'zerif_helpyou_main_section',
        'priority' => 5,
    ));

    $wp_customize->add_section('zerif_helpyou_feat1_section', array(
        'title' => __('Feature no#1', 'zerif-lite'),
        'priority' => 3,
        'panel' => 'panel_helpyou'
    ));

    /* feature no#1 */
    $wp_customize->add_setting('zerif_helpyou_feature1_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #1', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature1_title', array(
        'label' => __('Feature no1 title', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat1_section',
        'priority' => 6,
    ));

    $wp_customize->add_setting('zerif_helpyou_feature1_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature1_text', array(
        'label' => __('Feature no1 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_helpyou_feat1_section',
        'priority' => 7,
    ));

    $wp_customize->add_setting('ml_helpyou_feature1_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_helpyou_feature1_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat1_section',
        'settings' => 'ml_helpyou_feature1_img',
        'priority' => 10,
    )));

    $wp_customize->add_section('zerif_helpyou_feat2_section', array(
        'title' => __('Feature no#2', 'zerif-lite'),
        'priority' => 4,
        'panel' => 'panel_helpyou'
    ));

    /* feature no#2 */
    $wp_customize->add_setting('zerif_helpyou_feature2_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #2', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature2_title', array(
        'label' => __('Feature no2 title', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat2_section',
        'priority' => 9,
    ));

    $wp_customize->add_setting('zerif_helpyou_feature2_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature2_text', array(
        'label' => __('Feature no2 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_helpyou_feat2_section',
        'priority' => 10,
    ));

    $wp_customize->add_setting('ml_helpyou_feature2_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_helpyou_feature2_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat2_section',
        'settings' => 'ml_helpyou_feature2_img',
        'priority' => 11,
    )));

    $wp_customize->add_section('zerif_helpyou_feat3_section', array(
        'title' => __('Feature no#3', 'zerif-lite'),
        'priority' => 5,
        'panel' => 'panel_helpyou'
    ));

    /* feature no#3 */
    $wp_customize->add_setting('zerif_helpyou_feature3_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #3', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature3_title', array(
        'label' => __('Feature no3 title', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat3_section',
        'priority' => 12,
    ));

    $wp_customize->add_setting('zerif_helpyou_feature3_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature3_text', array(
        'label' => __('Feature no3 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_helpyou_feat3_section',
        'priority' => 13,
    ));

    $wp_customize->add_setting('ml_helpyou_feature3_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_helpyou_feature3_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat3_section',
        'settings' => 'ml_helpyou_feature3_img',
        'priority' => 14,
    )));

    /* feature no#4 */
    $wp_customize->add_section('zerif_helpyou_feat4_section', array(
        'title' => __('Feature no#4', 'zerif-lite'),
        'priority' => 5,
        'panel' => 'panel_helpyou'
    ));
    $wp_customize->add_setting('zerif_helpyou_feature4_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR SKILL #4', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature4_title', array(
        'label' => __('Feature no4 title', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat4_section',
        'priority' => 15,
    ));

    $wp_customize->add_setting('zerif_helpyou_feature4_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_feature4_text', array(
        'label' => __('Feature no4 text', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_helpyou_feat4_section',
        'priority' => 16,
    ));

    $wp_customize->add_setting('ml_helpyou_feature4_img', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_helpyou_feature4_img', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_helpyou_feat4_section',
        'settings' => 'ml_helpyou_feature4_img',
        'priority' => 22,
    )));

    /* red button */
    $wp_customize->add_section('zerif_helpyou_button_callout_section', array(
        'title' => __('Call to Action button', 'zerif-lite'),
        'priority' => 9,
        'panel' => 'panel_helpyou'
    ));


    $wp_customize->add_setting('zerif_helpyou_redbutton_label', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Features', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_redbutton_label', array(
        'label' => __('Red button label', 'zerif-lite'),
        'section' => 'zerif_helpyou_button_callout_section',
        'priority' => 3,
    ));

    $wp_customize->add_setting('zerif_helpyou_redbutton_url', array(
        'sanitize_callback' => 'esc_url_raw',
        'default' => esc_url(home_url('/')) . '#focus',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_redbutton_url', array(
        'label' => __('Red button link', 'zerif-lite'),
        'section' => 'zerif_helpyou_button_callout_section',
        'priority' => 4,
    ));

    /* title */
    $wp_customize->add_setting('zerif_helpyou_buttonlabel', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_helpyou_buttonlabel', array(
        'label' => __('Title', 'zerif-lite'),
        'type' => 'textarea',
        'section' => 'zerif_helpyou_button_callout_section',
        'priority' => 2,
    ));
    /******************************************/
    /**********    OUR CLIENTS SECTION **************/
    /******************************************/


    $wp_customize->add_panel('panel_ourteam', array(
        'priority' => 35,
        'capability' => 'edit_theme_options',
        'title' => __('Our Clients section', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_ourteam_section', array(
        'title' => __('Content', 'zerif-lite'),
        'priority' => 1,
        'panel' => 'panel_ourteam'
    ));

    /* our team show/hide */
    $wp_customize->add_setting('zerif_ourteam_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ourteam_show', array(
        'type' => 'checkbox',
        'label' => __('Hide our team section?', 'zerif-lite'),
        'section' => 'zerif_ourteam_section',
        'priority' => 1,
    ));

    /* our team title */
    $wp_customize->add_setting('zerif_ourteam_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('YOUR TEAM', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ourteam_title', array(
        'label' => __('Title', 'zerif-lite'),
        'section' => 'zerif_ourteam_section',
        'priority' => 2,
    ));

    /* our team subtitle */
    $wp_customize->add_setting('zerif_ourteam_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Prove that you have real people working for you, with some nice looking profile pictures and links to social media.', 'zerif-lite'), 'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ourteam_subtitle', array(
        'label' => __('Our team subtitle', 'zerif-lite'),
        'section' => 'zerif_ourteam_section',
        'priority' => 3,
    ));

    /* our team subtitle */
    $wp_customize->add_setting('ml_ourteam_client_logos', array(
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ml_ourteam_client_logos', array(
        'label' => __('Client Logos', 'zerif-lite'),
        'section' => 'zerif_ourteam_section',
        'settings' => 'ml_ourteam_client_logos',
        'priority' => 1,
    )));

    /* testimonials show/hide */
    $wp_customize->add_setting('ml_ourteam_bg_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'ml_ourteam_bg_color',
        array(
            'label' => __('Background Color', 'mytheme'),
            'section' => 'zerif_ourteam_section',
            'settings' => 'ml_ourteam_bg_color',
        )));

    /**********************************************/
    /**********    TESTIMONIALS SECTION **************/
    /**********************************************/

    $wp_customize->add_panel('panel_testimonials', array(
        'priority' => 36,
        'capability' => 'edit_theme_options',
        'title' => __('Testimonials section', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_testimonials_section', array(
        'title' => __('Testimonials section', 'zerif-lite'),
        'priority' => 1,
        'panel' => 'panel_testimonials'
    ));

    /* testimonials show/hide */
    $wp_customize->add_setting('zerif_testimonials_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_testimonials_show', array(
        'type' => 'checkbox',
        'label' => __('Hide testimonials section?', 'zerif-lite'),
        'section' => 'zerif_testimonials_section',
        'priority' => 1,
    ));

    /* testimonials show/hide */
    $wp_customize->add_setting('zerif_testimonials_bg_color', array(
        'default' => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(new WP_Customize_Color_Control(
        $wp_customize,
        'zerif_testimonials_bg_color',
        array(
            'label' => __('Background Color', 'mytheme'),
            'section' => 'zerif_testimonials_section',
            'settings' => 'zerif_testimonials_bg_color',
        )));

    /* testimonial pinterest layout */
    $wp_customize->add_setting('zerif_testimonials_pinterest_style', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_testimonials_pinterest_style', array(
        'type' => 'checkbox',
        'label' => __('Use pinterest layout?', 'zerif-lite'),
        'section' => 'zerif_testimonials_section',
        'priority' => 2,
    ));

    /* testimonials title */
    $wp_customize->add_setting('zerif_testimonials_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Testimonials', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_testimonials_title', array(
        'label' => __('Title', 'zerif-lite'),
        'section' => 'zerif_testimonials_section',
        'priority' => 2,
    ));

    /* testimonials subtitle */
    $wp_customize->add_setting('zerif_testimonials_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_testimonials_subtitle', array(
        'label' => __('Testimonials subtitle', 'zerif-lite'),
        'section' => 'zerif_testimonials_section',
        'priority' => 3,
    ));

    /**********************************************/
    /**********    LATEST NEWS SECTION ***************/
    /**********************************************/
    $wp_customize->add_section('zerif_latestnews_section', array(
        'title' => __('Latest News section', 'zerif-lite'),
        'priority' => 37
    ));

    /* latest news show/hide */
    $wp_customize->add_setting('zerif_latestnews_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_latestnews_show', array(
        'type' => 'checkbox',
        'label' => __('Hide latest news section?', 'zerif-lite'),
        'section' => 'zerif_latestnews_section',
        'priority' => 1,
    ));

    /* latest news title */
    $wp_customize->add_setting('zerif_latestnews_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_latestnews_title', array(
        'label' => __('Latest News title', 'zerif-lite'),
        'section' => 'zerif_latestnews_section',
        'priority' => 2,
    ));

    /* latest news subtitle */
    $wp_customize->add_setting('zerif_latestnews_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_latestnews_subtitle', array(
        'label' => __('Latest News subtitle', 'zerif-lite'),
        'section' => 'zerif_latestnews_section',
        'priority' => 3,
    ));

    /***********************************************************/
    /********* RIBBONS ****************************************/
    /**********************************************************/


    $wp_customize->add_panel('panel_ribbons', array(
        'priority' => 37,
        'capability' => 'edit_theme_options',
        'title' => __('Calls to Action', 'zerif-lite')
    ));

    $wp_customize->add_section('zerif_bottomribbon_section', array(
        'title' => __('Top CTA', 'zerif-lite'),
        'priority' => 1,
        'panel' => 'panel_ribbons'
    ));

    /* RIBBON SECTION WITH BOTTOM BUTTON */

    /* text */
    $wp_customize->add_setting('zerif_bottomribbon_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bottomribbon_text', array(
        'type' => 'textarea',
        'label' => __('Text', 'zerif-lite'),
        'section' => 'zerif_bottomribbon_section',
        'priority' => 1,
    ));

    /* text */
    $wp_customize->add_setting('zerif_bottomribbon_subtext', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bottomribbon_subtext', array(
        'type' => 'textarea',
        'label' => __('Sub Text', 'zerif-lite'),
        'section' => 'zerif_bottomribbon_section',
        'priority' => 2,
    ));

    /* button label */
    $wp_customize->add_setting('zerif_bottomribbon_buttonlabel', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bottomribbon_buttonlabel', array(
        'label' => __('Button label', 'zerif-lite'),
        'section' => 'zerif_bottomribbon_section',
        'priority' => 2,
    ));

    /* button link */
    $wp_customize->add_setting('zerif_bottomribbon_buttonlink', array(
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_bottomribbon_buttonlink', array(
        'label' => __('Button link', 'zerif-lite'),
        'section' => 'zerif_bottomribbon_section',
        'priority' => 3,
    ));

    $wp_customize->add_section('zerif_rightribbon_section', array(
        'title' => __('Bottom CTA', 'zerif-lite'),
        'priority' => 2,
        'panel' => 'panel_ribbons'
    ));

    /* RIBBON SECTION WITH BUTTON IN THE RIGHT SIDE */

    /* text */
    $wp_customize->add_setting('zerif_ribbonright_text', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ribbonright_text', array(
        'type' => 'textarea',
        'label' => __('Text', 'zerif-lite'),
        'section' => 'zerif_rightribbon_section',
        'priority' => 4,
    ));

    /* button label */
    $wp_customize->add_setting('zerif_ribbonright_buttonlabel', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ribbonright_buttonlabel', array(
        'label' => __('Button label', 'zerif-lite'),
        'section' => 'zerif_rightribbon_section',
        'priority' => 5,
    ));

    /* button link */
    $wp_customize->add_setting('zerif_ribbonright_buttonlink', array(
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_ribbonright_buttonlink', array(
        'label' => __('Button link', 'zerif-lite'),
        'section' => 'zerif_rightribbon_section',
        'priority' => 6,
    ));

    /*******************************************************/
    /************    CONTACT US SECTION *********************/
    /*******************************************************/

    $zerif_contact_us_section_description = '';

    /* if Pirate Forms is installed */
    if (defined("PIRATE_FORMS_VERSION")):
        $zerif_contact_us_section_description = __('For more advanced settings please go to Settings -> Pirate Forms', 'zerif-lite');
    endif;

    $wp_customize->add_section('zerif_contactus_section', array(
        'title' => __('Contact us section', 'zerif-lite'),
        'description' => $zerif_contact_us_section_description,
        'priority' => 38
    ));

    /* contact us show/hide */
    $wp_customize->add_setting('zerif_contactus_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_contactus_show', array(
        'type' => 'checkbox',
        'label' => __('Hide contact us section?', 'zerif-lite'),
        'section' => 'zerif_contactus_section',
        'priority' => 1,
    ));

    /* contactus title */
    $wp_customize->add_setting('zerif_contactus_title', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Get in touch', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_contactus_title', array(
        'label' => __('Contact us section title', 'zerif-lite'),
        'section' => 'zerif_contactus_section',
        'priority' => 2,
    ));

    /* contactus subtitle */
    $wp_customize->add_setting('zerif_contactus_subtitle', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_contactus_subtitle', array(
        'label' => __('Contact us section subtitle', 'zerif-lite'),
        'section' => 'zerif_contactus_section',
        'priority' => 3,
    ));

    /* contactus email */
    $wp_customize->add_setting('zerif_contactus_email', array(
        'sanitize_callback' => 'sanitize_email'
    ));

    $wp_customize->add_control('zerif_contactus_email', array(
        'label' => __('Email address', 'zerif-lite'),
        'section' => 'zerif_contactus_section',
        'priority' => 4,
    ));

    /* contactus button label */
    $wp_customize->add_setting('zerif_contactus_button_label', array(
        'sanitize_callback' => 'zerif_sanitize_input',
        'default' => __('Send Message', 'zerif-lite'),
        'transport' => 'postMessage'
    ));

    $wp_customize->add_control('zerif_contactus_button_label', array(
        'label' => __('Button label', 'zerif-lite'),
        'section' => 'zerif_contactus_section',
        'priority' => 5,
    ));

    /* recaptcha */
    $wp_customize->add_setting('zerif_contactus_recaptcha_show', array(
        'sanitize_callback' => 'zerif_sanitize_checkbox'
    ));

    $wp_customize->add_control('zerif_contactus_recaptcha_show', array(
        'type' => 'checkbox',
        'label' => __('Hide reCaptcha?', 'zerif-lite'),
        'section' => 'zerif_contactus_section',
        'priority' => 6,
    ));

    /* site key */
    $attribut_new_tab = (isset($zerif_accessibility) && ($zerif_accessibility != 1) ? ' target="_blank"' : '');
    $wp_customize->add_setting('zerif_contactus_sitekey', array(
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('zerif_contactus_sitekey', array(
        'label' => __('Site key', 'zerif-lite'),
        'description' => '<a' . $attribut_new_tab . ' href="https://www.google.com/recaptcha/admin#list">' . __('Create an account here', 'zerif-lite') . '</a> to get the Site key and the Secret key for the reCaptcha.',
        'section' => 'zerif_contactus_section',
        'priority' => 7,
    ));

    /* secret key */
    $wp_customize->add_setting('zerif_contactus_secretkey', array(
        'sanitize_callback' => 'sanitize_text_field'
    ));

    $wp_customize->add_control('zerif_contactus_secretkey', array(
        'label' => __('Secret key', 'zerif-lite'),
        'section' => 'zerif_contactus_section',
        'priority' => 8,
    ));
}

add_action('customize_register', 'zerif_customize_register');

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function zerif_customize_preview_js()
{
    wp_enqueue_script('zerif_customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), '20130508', true);
}

add_action('customize_preview_init', 'zerif_customize_preview_js');

function zerif_sanitize_input($input)
{
    return wp_kses_post(force_balance_tags($input));
}

function zerif_sanitize_checkbox($input)
{
    return (isset($input) && true == $input ? true : false);
}


function zerif_registers()
{

    wp_enqueue_script('zerif_customizer_script', get_template_directory_uri() . '/js/zerif_customizer.js', array("jquery"), '20120206', true);

    wp_localize_script('zerif_customizer_script', 'zerifLiteCustomizerObject', array(

        'documentation' => __('View Documentation', 'zerif-lite'),
        'pro' => __('Mentorloop Theme', 'zerif-lite')

    ));
}

add_action('customize_controls_enqueue_scripts', 'zerif_registers');

/* ajax callback for dismissable Asking for reviews */
add_action('wp_ajax_zerif_lite_dismiss_asking_for_reviews', 'zerif_lite_dismiss_asking_for_reviews_callback');
add_action('wp_ajax_nopriv_zerif_lite_dismiss_asking_for_reviews', 'zerif_lite_dismiss_asking_for_reviews_callback');

/**
 * Dismiss asking for reviews
 */
function zerif_lite_dismiss_asking_for_reviews_callback()
{

    if (!empty($_POST['ask'])) {
        set_theme_mod('zerif_lite_ask_for_review', esc_attr($_POST['ask']));
    }

    die();
}

add_action('customize_controls_enqueue_scripts', 'zerif_lite_asking_for_reviews_script');

function zerif_lite_asking_for_reviews_script()
{

    $zerif_lite_review = 'yes';

    $zerif_lite_ask_for_review = get_theme_mod('zerif_lite_ask_for_review');
    if (!empty($zerif_lite_ask_for_review)) {
        $zerif_lite_review = $zerif_lite_ask_for_review;
    }

    wp_enqueue_script('zerif-lite-asking-for-reviews-js', get_template_directory_uri() . '/js/zerif_reviews.js', array('jquery'));

    wp_localize_script('zerif-lite-asking-for-reviews-js', 'zerifLiteAskingForReviewsObject', array(
        'ask' => esc_attr($zerif_lite_review),
        'ajaxurl' => admin_url('admin-ajax.php'),
    ));
}
