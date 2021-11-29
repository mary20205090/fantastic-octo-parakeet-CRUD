<?php
include 'db_connect.php'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stepwise School</title>
    <link rel="stylesheet" href="asset/bootstrap-5.1.2-dist/css/bootstrap.min.css">

</head>
<body> 
    <section class="container bg-light">
        <div class="row">
            <div class="col-sm-12 col-md-9 mx-auto">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h2 class="text-white">
                                Welcome to Stepwise School
                            </h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-responsive table table-hover">
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>

                                <?php
                                    // Getting all users from db
                                    $users = 'SELECT * from users';

                                    // Execting the query
                                    $query_run = mysqli_query($conn, $users);

                                    // Checking if result set is greater than 0
                                    if (mysqli_num_rows($query_run) > 0)
                                    {
                                        // Looping through the data
                                        while ($user = mysqli_fetch_assoc($query_run))
                                        {
                                            echo "<tr>";
                                            echo "<td>".$user['id']."</td>"; //Getting the id
                                            echo "<td>".$user['name']."</td>"; // Getting the name
                                            echo "<td>".$user['email']."</td>"; // Getting the emails 
                                            ?>

                                            <td>
                                                <form action="edit-user.php" method="post">
                                                    <input type="hidden" name="edit_id" value="<?php echo $user['id']; ?>">
                                                    <button type="submit" name="editBtn" class="btn btn-success">Edit</button>
                                                </form>
                                                <?php echo $row['name'] ?>                             </td>
                                                <td>
                                                <form action="code.php" method="post">
                                                    <input type="hidden" name="delete_id" value="<?php echo $user['id']; ?>">
                                                    <button type="submit" name="deleteUser" class="btn btn-danger">Delete</button>
                                                </form>
                                                <?php echo $row['name'] ?>                             </td>


                                            <?php 
                                            echo "</tr>";
                                        } 
                                    }
                                    else
                                    {
                                        echo "<tr>";
                                        echo "<td colspan='5'>No Data Availble</td>";
                                        echo "</tr>";
                                    }

                                ?>

                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    <script src="./asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/bootstrap-5.1.2-dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>