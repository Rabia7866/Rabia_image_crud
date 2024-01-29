<?php
include("connection.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data from database</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6">

                <a href="index.php" class="btn btn-info">view record</a>
                <br><br>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Number</th>
                        <th>Address</th>
                        <th>password</th>
                        <th>Image</th>
                    </tr>


                    <!-- php works start -->

                    <?php

                    $query = "SELECT * FROM `student`";

                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {

                    ?>



                    <tr>

                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['name']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['number']?></td>
                        <td><?php echo $row['address']?></td>
                        <td><?php echo $row['password']?></td>
                        <td><img src="<?php echo $row['image']?>" width="80px" height="80px" 
                        style="border-radius: 50%" alt=""></td>
                        <!-- delete button -->
                        <td><a href="delete.php?id=<?php echo $row['id']?>" class="btn btn-danger">Delete</a></td>
                        <!-- update button -->
                        <td><a href="update.php?id=<?php echo $row['id']?>" class="btn btn-info">Update</a></td>

                    </tr>

                    <?php
                    }

                    ?>

                </table>
            </div>
        </div>
    </div>
</body>

</html>