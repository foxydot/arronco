<?php
/*
Template Name: Location Page
*/
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_sidebar_content' );
remove_action('genesis_entry_header','genesis_do_post_title');
genesis();
