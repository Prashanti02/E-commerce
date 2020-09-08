<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'; ?>
    <title>Success | All about glasses</title>
</head>
<body>
    <?php
        require 'header.php';
         $user_id = $_SESSION["user_id"];
         $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
         $result = mysqli_query($con, $query) or die(mysqli_error($con));

         while($row = mysqli_fetch_array($result)){
           $product_id = $row["item_id"];
            $query_update = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";            
           $result_update = mysqli_query($con, $query_update) or die(mysqli_error($con));
        }
        require 'confirm.php';
    ?>
        <div class="content">
          <div class="container">
            <div class="col-xs-12">
              <div class="jumbotron">
                <h3 class="text-center">Thank You for Ordering from Mobile Shoppee!</h3>
                <h4 class="text-center">The Order will be delivered to you shortly.</h4>
                <hr>
                <h5 class="text-center">To Continue Shopping , Click <a href="home.php">here</a></h5>
              </div>
            </div>
          </div>
        </div>
    <?php
        require 'footer.php';
    ?>  
</body>
</html>

