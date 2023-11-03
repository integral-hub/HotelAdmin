<?php
$con = new mysqli('localhost', 'root', '', 'hotel');

	if ($con->connect_error) {
	    die("Connection failed: " . $con->connect_error);
	}
	

?>