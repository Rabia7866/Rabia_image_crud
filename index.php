<?php  
include'connection.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Form with PHP and Bootstrap</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <a href="table.php" class="btn btn-info">view record</a>
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Image Form</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                         <!-- Other Form Fields -->
                         <div class="form-group">
                            <label for="">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="">Number</label>
                            <input type="number" class="form-control" id="number" name="number" required>
                        </div>
                        <div class="form-group">
                            <label for="">Address</label>
                            <input type="text" class="form-control" id="address" name="address" required>
                        </div>
                        <div class="form-group">
                            <label for="">Password</label>
                            <input type="password"  class="form-control" id="password" name="password" required>
                        </div>
                        
                        <!-- Image Input -->
                        <div class="form-group">
                            <label for="image">Choose Image</label>
                            <input type="file" class="form-control-file" id="image" name="image" required>
                        </div>
                        <!-- Submit Button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
                <!-- php work start -->
                <?php
                if (isset($_POST["submit"])) {
                
                $na = $_POST["name"];
                $em = $_POST["email"];
                $num = $_POST["number"];
                $add = $_POST["address"];
                $pass = $_POST["password"];
                
            
                

                if(isset($_FILES["image"]) && $_FILES["image"]["error"] == 0){
                  $targetdir = "picture/" ;

                  $imagename = uniqid() . "_" . basename($_FILES["image"]["name"]);
                  $targetfilepath = $targetdir . $imagename;

                  if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetfilepath) ) {
                    $query = "INSERT INTO `student`(`name`, `email`, `number`, `address`, `password`, `image`)
                    VALUES ('$na','$em','$num','$add','$pass','$targetfilepath')";
                    
                    if($conn->query($query) === true) {
                        echo"image uploaded successfully";
                    }
                else {
                    echo"error"  . $query . "<br>" . $conn->error;

                }
                
                  }
                  else {
                   echo"error uploaded image";
                  }
                }
                else {
                    
                    echo"no image uploaded";
                }
        }

                ?>
            </div>
        </div>
    </div>
</div>




<!-- Include Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
