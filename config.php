<?php
	
	$conn = new mysqli("localhost","root","","post_demo");
	if($conn->connect_error){
	echo "connection to database failed";
	}
?>