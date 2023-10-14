<?php


// connecting to the database
$servername ="localhost";
$username = "root";
$password = "";
// create a connection 
$conn = mysqli_connect($servername, $username, $password);
// die if connection was not sucessful
if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{ 
echo "connection was sucessful<br> ";
}
// create a db
$sql = "CREATE DATABASE dbaffnan6";
$result = mysqli_query($conn,$sql);
// check for the database creation sucess
if($result){
    echo "db was created sucessfully<br>";
}
else{
    echo "db was not created sucessfully because of this error--->".mysqli_error($conn);
}


?>