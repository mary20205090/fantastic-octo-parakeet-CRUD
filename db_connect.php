<?php

$hostname="localhost";
$username="admin";
$password="Zalego@1234";
$db_name="step_wise";

$conn=mysqli_connect($hostname, $username, $password, $db_name);

if($conn){
    // echo "MySql successfully connected";

}

else{
    echo"connection error"
    .mysqli_connect_error();
}
?>