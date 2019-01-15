<?php

    $host_name="localhost";
    $username="root";
    $password="";
    $database_name="OLMS";

    $connect=mysqli_connect($host_name,$username,$password,$database_name);

    $sql="SELECT * FROM bookinfo";
    $query=mysqli_query($connect,$sql);
    


?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">

        <h1 style="text-align: center;font-weight: 100;">Book Information</h1>

        <table class="table table-border">
          <thead>

            <tr>
              <th scope="col">BookId</th>
              <th scope="col">BookName</th>
              <th scope="col">Author</th>
              <th scope="col">Year</th>
              <th scope="col">Price</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            <?php while($result=mysqli_fetch_assoc($query)){?>

            <tr>
                <td><?php echo $result["bookid"] ?></td>
                <td><?php echo $result["bookname"] ?></td>
                <td><?php echo $result["author"] ?></td>
                <td><?php echo $result["year"] ?></td>
                <td><?php echo $result["price"] ?></td>
                <td><a class="glyphicon glyphicon-edit" href="bookinfoupdate.php?id=<?php echo $result["bookid"] ?>"></a></td>
            </tr>
        <?php } ?>
            
          </tbody>
    </table>
</div>

</body>
</html>