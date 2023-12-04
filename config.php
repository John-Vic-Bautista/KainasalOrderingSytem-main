<?php
$connections = mysqli_connect ("localhost","root","","kainasal");

	if (mysqli_connect_error())
	{
		echo "Failed" . mysqli_connect_error();
	}

?>