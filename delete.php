<?php


include('connection.php');

// Delete record code 

$id = $_GET['id'];

$query = "DELETE FROM `student` WHERE id='$id'";

$result = mysqli_query($conn, $query);

if($result)
{
    echo "your data is deleted";
    header("location: table.php");
}
else
{
    echo "data not delete";
}





?>