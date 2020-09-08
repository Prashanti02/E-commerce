<?php
    require 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'; ?>
    <title>Login | All about glasses</title>
</head>
<body>
     <?php
            include 'header.php';
        ?>
    <form class="form" action="log_in.php" method="POST">
        <div class="content">
        <div class="container">
        <div class="col-md-4 col-md-offset-4">
                <div class="form-group">
                    <p>Don't have an Account? <a href="signup.php">Register</a></p>
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Enter Email" required>
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" pattern=".{6,}" placeholder="Enter Password" required>
                </div>
                <div class="form-group">
                    <?php
                        if(isset($_GET['m1'])){
                            echo $_GET['m1'];
                        }
                    ?>
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary" data-dismiss="modal">Login</button>
                </div>
                <div class="form-group">
                    <p><a href="#">Forgot Password?</a></p>
                </div>
            </form>
            </div>
            </div>
            </div>

    <?php
        include 'footer.php';
    ?>
  
</body>
</html>

