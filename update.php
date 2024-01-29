<?php 
include('connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert data into database</title>
    <link rel="stylesheet" href="bootstrap.css">
</head>

<body>

    <!-- php work -->

    <?php 

$id = $_GET['id'];

$query = "SELECT * FROM `student` WHERE id='$id'";

$result = mysqli_query($conn, $query);

$data = $result->fetch_assoc();



?>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-8">
                <u>
                    <h1>update Record</h1>
                </u>
                <a href="table.php" class="btn btn-info">Update</a>
                <form method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control" id=""
                            value="<?php echo "{$data['name']}"; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control" id=""
                            value="<?php echo "{$data['email']}"; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Number</label>
                        <input type="number" name="number" class="form-control" id=""
                            value="<?php echo "{$data['number']}"; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="address" name="address" class="form-control" id=""
                            value="<?php echo "{$data['address']}"; ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" id=""
                            value="<?php echo "{$data['password']}"; ?>">
                    </div>
                    <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control-file" id="image" name="image" accept="image/*" required value="<?php echo "{$data['image']}"; ?>">
                        </div>
                    <br>
                    <input type="submit" name="submit" class="btn btn-primary" id="" >
                </form>
            </div>

            <!-- php work start -->

            <?php
            if (isset($_POST["submit"])) {
                
            
                $na = $_POST["name"];
                $cl = $_POST["class"];
                $ma = $_POST["marks"];
                


                $query = "UPDATE `students` SET
                  `name`='$na',`class`='$cl',`marks`='$ma' WHERE id='$id' ";
                
                $result = mysqli_query($conn, $query);

                

                if ($result) {
                    echo "the data is updated successfully";
                } else {
                    echo "data is not inserted";
                }

            }


            ?>





        </div>
    </div>

</body>

</html>
</body>

</html>