<?php

$host_name="localhost";
$username="root";
$password="";
$database_name="OLMS";

$connect=mysqli_connect($host_name,$username,$password,$database_name);
$bookid=$_GET['id'];
//view
$sql="SELECT * FROM bookinfo WHERE bookid=$bookid";
$query=mysqli_query($connect,$sql);
$result=mysqli_fetch_assoc($query);
//update
if (isset($_POST['btn'])){

$ubookid=$_POST['bookid'];
$ubookname=$_POST['bookname'];
$uauthor=$_POST['author'];
$uyear=$_POST['year'];
$uprice=$_POST['price'];

$sqlupdate="UPDATE bookinfo SET bookid='$ubookid',bookname='$ubookname',author='$uauthor',year='$uyear', price='$uprice' WHERE 
bookid=$bookid";
$query=mysqli_query($connect,$sqlupdate);
if ($query) {
 echo "<h1>Update successfully</h1>";
}

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Info Update Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
<body>
	
    <div class="container">
    <form action="" method="post">
    <h1>Book Info Update Form</h1>
    <hr>
    <table>
    	<tr>
	    	<td> <label for="bookid"><b>BookId</b></label></td>
	    	<td><input type="text" name="bookid" value="<?php echo $result["bookid"]?>" required></td>
	    </tr>

	    <tr>
	    	<td><label for="bookname"><b>BookName</b></label></td>
	    	<td><input type="text" name="bookname" value="<?php echo $result["bookname"]?>" required></td>
	    </tr>

	    <tr>
	    	<td><label for="author"><b>Author</b></label></td>
	    	<td> <input type="text" name="author" value="<?php echo $result["author"]?>" required></td>
	    </tr>

	    <tr>
	    	<td><label for="year"><b>Year</b></label></td>
	    	<td> <input type="text" name="year" value="<?php echo $result["year"]?>" required></td>
	    </tr>

	    <tr>
	    	<td> <label for="price"><b>Price</b></label></td>
	    	<td> <input type="text" name="price" value="<?php echo $result["price"]?>" required></td>
	    </tr>
    </table>
    <hr>
    <input type="submit" name="btn" value="Update Info"> 
  </div>
</form>
</div>

</body>
</html>