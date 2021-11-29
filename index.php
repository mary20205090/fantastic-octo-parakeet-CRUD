<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stepwise School</title>

     <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="asset/bootstrap-5.1.2-dist/css/bootstrap.min.css">


    
   <!-- Custom CSS -->
   <link rel="stylesheet" href="asset/bootstrap-5.1.2-dist/css/style.css">

   
</head>
<body>
    
<section class="container bg-light ">
    <div class="row">
        <div class="col-sm-12  col-md-9 mx-auto text-black">
            <form action="code.php" method="post">

            <div class="card">
                <div class="card-header bg-warning">
                  <h2>  Welcome to Stepwise School</h2>
                </div>

                <div class="card-body">

                <!-- Input name start -->

                <div class="form-group mb-3">

                <label for="name">Full name</label>
                <input type="text" name="name" class="form-control">
                </div>
                <!-- Input name ends -->

                <!-- input email starts -->

                <div class="form-group mb-3">

                    <label for="email">Email Address</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <!-- input email ends -->


                <!-- input password start -->

                <div class="form-group mb-3">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <!-- input password end -->

                <!-- Submit button -->
                <button type="submit" name="registerButton" 
                class="btn btn-block btn-warning">Register</button>
                <!-- end of submit button -->



                </div>
            </div>
            </form>
        </div>
    </div>
</section>








<script src="asset/bootstrap-5.1.2-dist/js/jquery-3.6.0.min.js"></script>
<script src="asset/bootstrap-5.1.2-dist/js/bootstrap.bundle.min.js"></script> 
</body>
</html>