<?php

$host_name="localhost";
$username="root";
$password="";
$database_name="OLMS";

$connect=mysqli_connect($host_name,$username,$password,$database_name);


$username=$_POST['username'];
$password=$_POST['pwd'];

$sql="SELECT * FROM user WHERE username='$username'";
$query=mysqli_query($connect,$sql);
$result=mysqli_fetch_assoc($query);

if (($username==$result["username"]) && ($password==$result["userpass"])) {

	echo "Welcome to Southeast University";

	}
	else
		echo "Not Known";
?>