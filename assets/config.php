<?php
	/*
	 *
	 * This file defines database constants.
	 *
	 */

	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASSWORD','');
	define('DB_NAME', 'electron');

	// connect to the database
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME) or die(mysqli_error());
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/Current/Absolutesales/');
	  $based =  BASE_URL .'uploads/';
	  
?>
