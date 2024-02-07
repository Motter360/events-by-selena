<?php
/**
 * Graceful Feminine functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Graceful Feminine
 */

// ----------------------------------------------------------------------------------
//	Register Front-End Styles And Scripts
// ----------------------------------------------------------------------------------

function graceful_feminine_enqueue_child_styles() {
 
    wp_enqueue_style( 'graceful-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'graceful-feminine-style', get_stylesheet_directory_uri() . '/style.css', array( 'graceful-style' ), wp_get_theme()->get('Version') );
}
add_action( 'wp_enqueue_scripts', 'graceful_feminine_enqueue_child_styles' );


// ----------------------------------------------------------------------------------
//  Customize Register for Top Navigation
// ----------------------------------------------------------------------------------
function graceful_feminine_customize_register( $wp_customize ) {

    $wp_customize->add_panel(
        'layout_settings',
        array(
            'priority'   => 20,
            'capability' => 'edit_theme_options',
            'title'      => __( 'Top Navigaion', 'graceful-feminine' ),
        )
    );

    /** Top Navigation */
    // add Top Navigation section
    $wp_customize->add_section( 'graceful_top_navigation' , array(
        'title'      => esc_html__( 'Top Navigation', 'graceful-feminine' ),
        'priority'   => 23,
        'capability' => 'edit_theme_options'
    ) );

    // Top Navigation
    $wp_customize->add_setting( 'graceful_feminine_options[top_navigation_show]', array(
        'default'    => graceful_feminine_options('top_navigation_show'),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'graceful_sanitize_checkboxes'
    ) );
    $wp_customize->add_control( 'graceful_feminine_options[top_navigation_show]', array(
        'label'     => esc_html__( 'Enable Top Navigation', 'graceful-feminine' ),
        'section'   => 'graceful_top_navigation',
        'type'      => 'checkbox',
        'priority'  => 1
    ) );

    // Top Navigation Background Color
    $wp_customize->add_setting( 'graceful_feminine_options[top_navigation_bg]', array(
        'default'    => graceful_feminine_options('top_navigation_bg'),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'graceful_feminine_options[top_navigation_bg]', array(
        'label'     => esc_html__( 'Top Navigation Background Color', 'graceful-feminine' ),
        'section'   => 'graceful_top_navigation',
        'priority'  => 3
    ) ) );

    // Top Navigation Text Color
    $wp_customize->add_setting( 'graceful_feminine_options[top_navigation_text_color]', array(
        'default'    => graceful_feminine_options('top_navigation_text_color'),
        'type'       => 'option',
        'transport'  => 'refresh',
        'capability' => 'edit_theme_options',
        'sanitize_callback' => 'sanitize_hex_color'
    ) );
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'graceful_feminine_options[top_navigation_text_color]', array(
        'label'     => esc_html__( 'Top Navigation Text Color', 'graceful-feminine' ),
        'section'   => 'graceful_top_navigation',
        'priority'  => 5
    ) ) );

}
add_action( 'customize_register', 'graceful_feminine_customize_register', 99 );


register_nav_menus(
    array(
        'top'  => esc_html__( 'Top Menu', 'graceful-feminine' ),
    )
);

function graceful_top_menu_fallback() {
    if ( current_user_can( 'edit_theme_options' ) ) {
        ?>
        <ul id="top-menu">
            <li>
                <a href="<?php echo esc_url( home_url( '/wp-admin/nav-menus.php') ) ?>">
                    <?php esc_html_e( 'Set-up Top Menu', 'graceful-feminine' ) ?>
                </a>
            </li>
        </ul>
        <?php
    }
}

function graceful_feminine_options( $controls ) {

    $graceful_feminine_defaults = array(
        'top_navigation_show' => true,
        'top_navigation_bg' => '#e1b7b2',
        'top_navigation_text_color' => '#ffffff',
        'feminine_grid_excerpt_length' => '50',
    );

    // merge defaults and options
    $graceful_feminine_defaults = wp_parse_args( get_option( 'graceful_feminine_options' ), $graceful_feminine_defaults );

    // return control
    return $graceful_feminine_defaults[ $controls ];

}

// ----------------------------------------------------------------------------------
//  New Fonts
// ----------------------------------------------------------------------------------
function graceful_feminine_enqueue_assets()
{
    // Include the file.
    require_once get_theme_file_path('webfont-loader/wptt-webfont-loader.php');
    // Load the webfont.
    wp_enqueue_style(
        'graceful-feminine-fonts',
        wptt_get_webfont_url('https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=auto'),
        array(),
        '1.0'
    );
}
add_action('wp_enqueue_scripts', 'graceful_feminine_enqueue_assets');
