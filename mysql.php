<?php
echo "welcome to the stage where we are ready to get connected to a database<br>";
/* 
ways to connect to a mysql database
1. mysqli extension_loaded 1. procedural 2. oops se use kar sakte hai 
2. pdo (php data objects)
*/
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
echo "connection was sucessful";
}
?>