<?php

add_action('wp_head', 'head_child', 0);
add_action('widgets_init', 'remove_some_widgets', 11);

function head_child()
{
	mf_enqueue_style('child-style', get_stylesheet_directory_uri()."/style.css", get_theme_version()); //, array('style')
}

function remove_some_widgets()
{
	unregister_sidebar('widget_header');
	unregister_sidebar('widget_after_header');
	unregister_sidebar('widget_slide');
	unregister_sidebar('widget_front');
	unregister_sidebar('widget_sidebar_left');
	unregister_sidebar('widget_after_content');
	unregister_sidebar('widget_sidebar');
	unregister_sidebar('widget_window_side');
}