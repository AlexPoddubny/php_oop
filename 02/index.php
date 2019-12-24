<?php
	error_reporting(-1);
	require_once 'classes/File.php';
	
	function debug($data){
		echo '<pre>' . print_r($data,1) . '</pre>';
	}
	
	$file = new File('test.txt');
	$file->write('text');
	debug($file);