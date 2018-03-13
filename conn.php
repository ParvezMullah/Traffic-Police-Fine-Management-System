<?php

	$host='127.0.0.1';
	$username='root';
	$password='';
	$database='dbtrafficpolice';

	$conn=mysqli_connect($host,$username,$password,$database);

	if(!mysqli_connect())
	{
		echo "try again later.";
		exit;
	}

?>