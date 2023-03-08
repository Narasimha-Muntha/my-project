<?php
	include "connection.php";
	$name=$_POST["name"];
	$nbr=$_POST['nbr'];
	$dist=$_POST["district"];
	$mandal=$_POST["mandal"];
	$dno=$_POST["dno"];
	$lmark=$_POST['lmark'];
	$pin=$_POST['pin'];

	$query1="CREATE TABLE address(NAME VARCHAR(30) NOT NULL,NUMBER varchar(10) NOT NULL ,DISTRICT VARCHAR(20) NOT NULL,MANDAL VARCHAR(20) ,Dno INT, LANDMARK VARCHAR(40) ,PINCODE INT);";
	if(mysqli_query($connection,$query1)){
		echo "created";
	}
	else
		echo mysqli_error($connection);
	$query2="INSERT INTO address VALUES('$name','$nbr','$dist','$mandal','$dno','$lmark','$pin');";
	if(mysqli_query($connection,$query2)){
		echo "inserted";
	}
	else{
		echo "error:".mysqli_error($connection)."<br>";
	}
	
?>
