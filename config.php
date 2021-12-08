<?php

$DB_SERVER = 'localhost';
$DB_USERNAME ='root';
$DB_PASS = '';
$DB_NAME ='inspire academy database';

$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASS, $DB_NAME);

if($conn === false){
	die("ERROR: Could not connect." .mysqli_connect_error());
	}
?>