<?php

function add_openid() {
	echo '
	<link rel="openid.server" href="http://www.livejournal.com/openid/server.bml"> 
	<link rel="openid.delegate" href="http://frowned.livejournal.com/">';
}

add_action('wp_head', 'add_openid');

wp_enqueue_script('jquery');
wp_enqueue_script('mondrian', 'http://breakfastdinnertea.co.uk/static/bdt/jquery.mondrian.js', array('jquery'));
