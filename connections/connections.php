<?php

$servername="localhost";
$username="id2474476_mohit";
$password="mohit";
$database="id2474476_poa"; 




$connect=mysqli_connect($servername,$username,$password,$database);


if($connect->connect_error){
	 die('Error connecting to MySQL server.');
}

//echo "connected successfully";







?>