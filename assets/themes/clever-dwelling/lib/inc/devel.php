<?php
/*
* A useful troubleshooting function. Displays arrays in an easy to follow format in a textarea.
*/
if(!function_exists('ts_data')){
	function ts_data($data){
		$ret = '<textarea class="troubleshoot" rows="20" cols="100">';
		$ret .= print_r($data,true);
		$ret .= '</textarea>';
		print $ret;
	}
}
/*
* A useful troubleshooting function. Dumps variable info in an easy to follow format in a textarea.
*/
if(!function_exists('ts_var')){
	function ts_var($var){
		ts_data(var_export( $var , true ));
	}
}

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
    if(!is_admin()){
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
    }
}

//add_action('genesis_footer','msdlab_trace_actions');
function msdlab_trace_actions(){
    global $wp_filter;
    ts_var( $wp_filter['genesis_entry_header'] );
}