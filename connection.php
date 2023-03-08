<?php
	$connection=mysqli_connect("localhost","root","","project");
	if($connection)
	{
		echo "connection established"."<br>";
	}
	else
		echo "error:".mysqli_error($connection)."<br>";
	
?>
