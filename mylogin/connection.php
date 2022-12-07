<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "database1q";  
$conn = mysqli_connect($servername, $username, $password, $db_name, 3306);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "";

?>