<?php

$host_name="localhost";
$username="root";
$password="";
$database_name="OLMS";

$connect=mysqli_connect($host_name,$username,$password,$database_name);

if (isset($_POST['btn'])){

$ubookid=$_POST['bookid'];
$ubookname=$_POST['bookname'];
$uauthor=$_POST['author'];
$uyear=$_POST['year'];
$uprice=$_POST['price'];

$sql="INSERT INTO bookinfo VALUES('$ubookid','$ubookname','$uauthor','$uyear','$uprice')";
$query=mysqli_query($connect,$sql);
if ($query) {
 echo "<h1>Insert successfully</h1>";
}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Insert</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<body>
	
    <div class="container">
    <form action="" method="post">
    <h1>Book Info Insert</h1>
    <hr>
    <table>
    	<tr>
	    	<td> <label for="bookid"><b>BookId</b></label></td>
	    	<td><input type="text" name="bookid" required></td>
	    </tr>

	    <tr>
	    	<td><label for="bookname"><b>BookName</b></label></td>
	    	<td><input type="text" name="bookname" required></td>
	    </tr>

	    <tr>
	    	<td><label for="author"><b>Author</b></label></td>
	    	<td> <input type="text" name="author" required></td>
	    </tr>

	    <tr>
	    	<td><label for="year"><b>Year</b></label></td>
	    	<td> <input type="text" name="year" required></td>
	    </tr>

	    <tr>
	    	<td> <label for="price"><b>Price</b></label></td>
	    	<td> <input type="text" name="price" required></td>
	    </tr>
    </table>
    <hr>
    <input type="submit" name="btn" value="Insert"> 
  </div>
</form>
</div>

</body>
</html>