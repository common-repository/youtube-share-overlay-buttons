<?php
// WPProcare YouTube Share Overlay Buttons

function wpp_yt_buttons($atts) { 

// Get the video ID from shortcode
extract( shortcode_atts( array(
	'id' => ''
	), $atts ) );

// Display video
	
$string = '<div id="video-container"><iframe src="//www.youtube.com/embed/' . $id . '" height="400" width="650" allowfullscreen="" frameborder="0"></iframe>';

// Add Facebook share button
	
$string .= '<ul class="share-video-overlay" id="share-video-overlay"><li class="facebook" id="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fyoutube.com/watch%3Fv%3D'. $id .'" target="_blank" onclick="window.open(this.href, \'mywin\',
\'left=200,top=200,width=800,height=300,toolbar=1,resizable=0\'); return false;">
 Facebook</a></li>';	

// Add Tweet button 
$string .= '<li class="twitter" id="twitter"><a href="http://www.twitter.com/share?&text=Check+this+video&amp;url=http%3A//www.youtube.com/watch%3Fv%3D'. $id .'" target="_blank" onclick="window.open(this.href, \'mywin\',
\'left=200,top=200,width=800,height=300,toolbar=1,resizable=0\'); return false;">Tweet</a></li></ul>';

// Close video container    
	$string .= '</div>';

// Return output	
	return $string; 

} 
// Add Shortcode 
add_shortcode('wpp-youtube', 'wpp_yt_buttons');



function theme_name_scripts() {
	wp_enqueue_style( 'wpprocare', plugin_dir_url( __FILE__ )."/style.css" );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );
