<?php
$connections = mysqli_connect ("localhost","root","","db_act2d");

	if (mysqli_connect_error())
	{
		echo "Failed" . mysqli_connect_error();
	}

?>