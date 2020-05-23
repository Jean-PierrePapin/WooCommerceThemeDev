<?php 

/**
 * Fancy Lab Thee Customizer
 * 
 * @package Fancy Lab
 */

function fancy_lab_customizer( $wp_customize ) {

    // Copyright Section
    $wp_customize->add_section(
        'sec_copyright', [
            'title'         =>  'Copyright Settings',
            'description'   =>  'Copyright Section'
        ]
    );

        // Field 1 - Copyright Text Box
        $wp_customize->add_setting(
            'set_copyright', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );


        $wp_customize->add_control(
            'set_copyright', [  
                'label'                 =>  'Copyright',
                'description'           =>  'Please, add your copyright information here',
                'section'               =>  'sec_copyright',
                'type'                  =>  'text'
            ]
        );

    /*---------------------------------------------------------------*/
    //Slider section
    $wp_customize->add_section(
        'sec_slider', [
            'title'         =>  'Slider Settings',
            'description'   =>  'Slider Section'
        ]
    );
        // Field 1 - Slider button text number 1
        $wp_customize->add_setting(
            'set_slider_page1', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_slider_page1', [  
                'label'                 =>  'Set slider page 1',
                'description'           =>  'Set slider page 1',
                'section'               =>  'sec_slider',
                'type'                  =>  'dropdown-pages'
            ]
        );

        // Field 2 - Slider button text number 1
        $wp_customize->add_setting(
            'set_slider_button_text1', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_text1', [  
                'label'                 =>  'Button text for page 1',
                'description'           =>  'Button text for page 1',
                'section'               =>  'sec_slider',
                'type'                  =>  'text'
            ]
        );

        // Field 3 - Slider button URL number 1
        $wp_customize->add_setting(
            'set_slider_button_url1', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_url1', [  
                'label'                 =>  'URL for page 1',
                'description'           =>  'URL for page 1',
                'section'               =>  'sec_slider',
                'type'                  =>  'url'
            ]
        );

        // Field 4 - Slider page number 2
        $wp_customize->add_setting(
            'set_slider_page2', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_slider_page2', [  
                'label'                 =>  'Set slider page 2',
                'description'           =>  'Set slider page 2',
                'section'               =>  'sec_slider',
                'type'                  =>  'dropdown-pages'
            ]
        );

        // Field 5 - Slider button text number 2
        $wp_customize->add_setting(
            'set_slider_button_text2', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_text2', [  
                'label'                 =>  'Button text for page 2',
                'description'           =>  'Button text for page 2',
                'section'               =>  'sec_slider',
                'type'                  =>  'text'
            ]
        );

        // Field 6 - Slider button URL number 2
        $wp_customize->add_setting(
            'set_slider_button_url2', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_url2', [  
                'label'                 =>  'URL for page 2',
                'description'           =>  'URL for page 2',
                'section'               =>  'sec_slider',
                'type'                  =>  'url'
            ]
        );

        // Field 7 - Slider page number 3
        $wp_customize->add_setting(
            'set_slider_page3', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_slider_page3', [  
                'label'                 =>  'Set slider page 3',
                'description'           =>  'Set slider page 3',
                'section'               =>  'sec_slider',
                'type'                  =>  'dropdown-pages'
            ]
        );

        // Field 8 - Slider button text number 3
        $wp_customize->add_setting(
            'set_slider_button_text3', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'sanitize_text_field'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_text3', [  
                'label'                 =>  'Button text for page 3',
                'description'           =>  'Button text for page 3',
                'section'               =>  'sec_slider',
                'type'                  =>  'text'
            ]
        );

        // Field 9 - Slider button URL number 3
        $wp_customize->add_setting(
            'set_slider_button_url3', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'esc_url_raw'
            ]
        );

        $wp_customize->add_control(
            'set_slider_button_url3', [  
                'label'                 =>  'URL for page 3',
                'description'           =>  'URL for page 3',
                'section'               =>  'sec_slider',
                'type'                  =>  'url'
            ]
        );
    

    /*---------------------------------------------------------------*/
    // Home page settings
    $wp_customize->add_section(
        'sec_home_page', [
            'title'         =>  'Home Page Products and Blog Settings',
            'description'   =>  'Home Page Section'
        ]
    );
        // Popular products
        $wp_customize->add_setting(
            'set_popular_max_num', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_popular_max_num', [  
                'label'                 =>  'Popular Products Max Number',
                'description'           =>  'Popular Products Max Number',
                'section'               =>  'sec_home_page',
                'type'                  =>  'number'
            ]
        );

        $wp_customize->add_setting(
            'set_popular_max_col', [  
                'type'                  =>  'theme_mod',
                'default'               =>  '',
                'sanitize_callback'     =>  'absint'
            ]
        );

        $wp_customize->add_control(
            'set_popular_max_col', [  
                'label'                 =>  'Popular Products Max Columns',
                'description'           =>  'Popular Products Max Columns',
                'section'               =>  'sec_home_page',
                'type'                  =>  'number'
            ]
        );

        // New arrivals
        $wp_customize->add_setting(
                'set_new_arrivals_max_num', [  
                    'type'                  =>  'theme_mod',
                    'default'               =>  '',
                    'sanitize_callback'     =>  'absint'
                ]
            );

            $wp_customize->add_control(
                'set_new_arrivals_max_num', [  
                    'label'                 =>  'New Arrivals Max Number',
                    'description'           =>  'New Arrivals Max Number',
                    'section'               =>  'sec_home_page',
                    'type'                  =>  'number'
                ]
            );

            $wp_customize->add_setting(
                'set_new_arrivals_max_col', [  
                    'type'                  =>  'theme_mod',
                    'default'               =>  '',
                    'sanitize_callback'     =>  'absint'
                ]
            );

            $wp_customize->add_control(
                'set_new_arrivals_max_col', [  
                    'label'                 =>  'New Arrivals Max Columns',
                    'description'           =>  'New Arrivals Max Columns',
                    'section'               =>  'sec_home_page',
                    'type'                  =>  'number'
                ]
            );
            
            // Deal of the Week Checkbox
            $wp_customize->add_setting(
                'set_deal_show', [  
                    'type'                  =>  'theme_mod',
                    'default'               =>  '',
                    'sanitize_callback'     =>  'fancy_lab_sanitize_checkbox'
                ]
            );

            $wp_customize->add_control(
                'set_deal_show', [  
                    'label'                 =>  'Show Deal of the Week?',
                    'section'               =>  'sec_home_page',
                    'type'                  =>  'checkbox'
                ]
            );

            // Deal of the Week Product ID
            $wp_customize->add_setting(
                'set_deal', [  
                    'type'                  =>  'theme_mod',
                    'default'               =>  '',
                    'sanitize_callback'     =>  'absint'
                ]
            );

            $wp_customize->add_control(
                'set_deal', [  
                    'label'                 =>  'Deal of the Week Product ID',
                    'description'           =>  'Product ID to Display',
                    'section'               =>  'sec_home_page',
                    'type'                  =>  'number'
                ]
            );
}
add_action( 'customize_register', 'fancy_lab_customizer' );

function fancy_lab_sanitize_checkbox( $checked ) {
    return ( ( isset( $checked ) && true == $checked ) ? true : false );
}