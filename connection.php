<?php
$host = 'localhost';
$dbname = 'Technocrats';
$dbuser = 'Technocrats';
$dbpass = 'assholes';

if(!(mysql_connect($host, $dbuser, $dbpass))) {
	echo "Connection error!!";
	}

if(!(mysql_select_db($dbname))) {
	echo "Database error!!";
	}


?>
