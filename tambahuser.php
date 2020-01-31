<?php

	$connect = new mysqli("localhost","root","");
	mysqli_select_db($connect, "db_latihan");
	$username = $_POST['username'];
	$password = $_POST['password'];
	$name = $_POST['name'];
	mysqli_query($connect,"INSERT INTO pengguna VALUES
		('','$username','$password','$name')");



?>