<?php
include 'db_connect.php';

if (isset($_POST['editBtn'])) 
{
    $id = $_POST['edit_id'];
    $user = "SELECT * FROM users where id = $id";
    $query_run = mysqli_query($conn, $user);


    foreach($query_run as $row)
    {
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
                <form action="code.php" method="post">
                    <div class="card">
                        <div class="card-header bg-warning">
                            <h2 class="text-white">
                                Welcome to Stepwise School
                            </h2>
                        </div>
                        <div class="card-body">
                            <!-- hidden  id -->
                            <input type="hidden" name="user_id" value="<?php echo $id; ?>">
                            <!-- Input name start -->
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Full name</label>
                                <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control">
                            </div>
                            <!-- input name ends -->

                            <!-- Input email starts -->
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                            </div>
                            <!-- Input email ends -->

                            <!-- Password Input starts -->
                            <div class="form-group mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" value="<?php echo $row['password'] ?>" class="form-control">
                            </div>
                            <!-- Password input ends -->

                            <!-- submit button -->
                            <button type="submit" name="updateUser"
                                    class="btn btn-block btn-warning">Register</button>
                            <!-- Submit button ends -->

                        </div>
                    </div>
                </form>
        <?php
    }
}

?>
            </div>
        </div>
    </section>

    <script src="./asset/js/bootstrap.bundle.min.js"></script>
    <script src="asset/bootstrap-5.1.2-dist/js/bootstrap.bundle.min.js"></script> 

</body>
</html>