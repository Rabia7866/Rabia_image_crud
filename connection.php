<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "persons";


$conn = mysqli_connect($servername,$username,$password,$dbname);


if($conn){

echo"established";

}
else{ 

echo"failed";

}




?>