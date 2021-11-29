<?php
// Including the connection string. 
include('db_connect.php'); 
// Checking if the buuton named 'submit_message' is clicked 

if (isset($_POST['registerButton']))
{  
    // Getting theposted details 
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $password = $_POST['password']; 

// Query to insert data to SQL DB 
    $query = "INSERT INTO users (name, email, password) 
    VALUES ('$name', '$email', '$password')"; 

// Executing the query 
    $query_run = mysqli_query($conn, $query); 
// Testing the success of the query run 
    if ($query_run)
    {
        echo "Message Successfully sent"; 
        header('Location: all-messages.php');

    }
    else 
    {
    echo "Sorry, An error occurred. Please try again later"; 
    header('Location: all-messages.php');

    }
}


// Edit Button clicked
if (isset($_POST['updateUser']))
{
    $id = $_POST['user_id'];    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "UPDATE `users`SET `name` = '$name', `email`='$email', `password`='$password'  WHERE `users`.`id` = $id";
    $query_run = mysqli_query($conn, $sql);

    if ($query_run) {
        echo "Successfully updated";
        header('Location: all-messages.php');
    }
    else
    {
        echo "Sorry an error occured";
        header('Location: all-messages.php');

    }
}
//delete buttton clicked
if (isset($_POST['deleteUser']))

{
    $id = $_POST['delete_id'];    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $delete = "DELETE FROM `users`  WHERE `users`.`id` = $id";
    $query_run = mysqli_query($conn, $delete);

    if ($query_run) {
        echo "Successfully deleted";
        header('Location: delete-user.php');
    }
    else
    {
        echo "Sorry an error occured";
        header('Location: delete-user.php');

    }


}


?>