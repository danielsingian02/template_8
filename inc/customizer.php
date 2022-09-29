<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);
// Text Options Section Inside Theme
$wp_customize->add_section( 'text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'text_options' ),
        'priority'      => 1,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( '© Copyright 2021 HOA Management ', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);


$wp_customize->add_setting( 'footer_image_logo',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/footlogo.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_logo', 
    array(
        'priority'    => 40,
        'section'     => 'text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as logo footer',
    ) 
));

$wp_customize->add_setting( 'footer_image_map',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 5 1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'footer_image_map', 
    array(
        'priority'    => 40,
        'section'     => 'text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as Footer Image',
    ) 
));

//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'banner_text_options', 
    array(
        'title'         => __( 'Banner Text Options', 'banner_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'Banner_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 4.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Banner_image', 
    array(
        'priority'    => 40,
        'section'     => 'banner_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown as Banner Image',
    ) 
));

$wp_customize->add_setting( 'banner_heading',
    array(
        'default'           => __( 'Our Community<br>Our Family ', 'banner_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_heading', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'banner_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in the banner',
    ) 
);

$wp_customize->add_setting( 'banner_button_text',
    array(
        'default'           => __( 'Login', 'banner_button_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_button_text', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Button text',
        'description' => 'Text put here will be shown in banner sections button',
    ) 
);

//button link
$wp_customize->add_setting( 'banner_button_url',
    array(
        'default'           => __( '#', 'banner_button_url' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'banner_button_url', 
    array(
        'type'        => 'url',
        'priority'    => 20,
        'section'     => 'banner_text_options',
        'label'       => 'Button Link',
        'description' => 'Link put here will be the redirection link of your button when clicked',
    ) 
);

//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_section_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_section_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'second_section_heading',
    array(
        'default'           => __( 'We Live Together As One', 'second_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections heading',
    ) 
);

$wp_customize->add_setting( 'second_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'second_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);

$wp_customize->add_setting( 'second_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 1 template 8 1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'second_image', 
    array(
        'priority'    => 40,
        'section'     => 'second_section_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));



//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'third_text_options', 
    array(
        'title'         => __( 'Third Section Text Options', 'third_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.

$wp_customize->add_setting( 'third_heading',
    array(
        'default'           => __( 'Upcoming Events', 'third_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'description',
    array(
        'default'           => __( 'Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urnaviverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsumiaculis dapibus. Praesent viverra vitae velit sit amet maximus <br><br><b><span>Backyard Sale 12-15-2021 <br>Easter Egg Hunt 04-23-2021 <br>Coffee Hours 02-08-2021 <br>Backyard Together 11-16-2021 <br>Pet Celebration 07-10-2021</span></b>', 'description' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'description', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'second_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 2 1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'second_image', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'whole_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 3 (1).png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'whole_image', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));
}
?>