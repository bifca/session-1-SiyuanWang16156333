<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "Captain America";

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	$sql = "SELECT * FROM films";

?>
