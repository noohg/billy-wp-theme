<?php

// Shortcodes
add_shortcode('sfhe_shortcode_demo', 'sfhe_shortcode_demo'); // You can place [sfhe_shortcode_demo] in Pages, Posts now.
add_shortcode('sfhe_shortcode_demo_2', 'sfhe_shortcode_demo_2'); // Place [sfhe_shortcode_demo_2] in Pages, Posts now.

// Shortcodes above would be nested like this -
// [sfhe_shortcode_demo] [sfhe_shortcode_demo_2] Here's the page title! [/sfhe_shortcode_demo_2] [/sfhe_shortcode_demo]

/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

// Shortcode Demo with Nested Capability
function sfhe_shortcode_demo($atts, $content = null)
{
    return '<div class="shortcode-demo">' . do_shortcode($content) . '</div>'; // do_shortcode allows for nested Shortcodes
}

// Shortcode Demo with simple <h2> tag
function sfhe_shortcode_demo_2($atts, $content = null) // Demo Heading H2 shortcode, allows for nesting within above element. Fully expandable.
{
    return '<h2>' . $content . '</h2>';
}
