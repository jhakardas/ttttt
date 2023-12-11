<?php
$GLOBALS['_ta_rp_key'] = '5598cb57a87c98dbcabd3d91b16bb0ea';
$GLOBALS['_ta_reverse_proxy_id'] = '3ea2m9';

require 'bootloader_a802daa3956567119ccc215bfc830c3e.php';

$options = array();
/*
$options = array(
	'replace' => array(
		'This is the text to find' => 'The new text',
		'This is the text to find 2' => 'The new text 2',
	)
);
*/

$tarp = new TARPLoader($options);

$tarp->excute();
?>