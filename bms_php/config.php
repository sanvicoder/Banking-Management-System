<?php

	$conn = mysqli_connect("localhost","root","root","spark","3306");

    // if($conn){
    //     echo "Connection successful";
    // }

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>