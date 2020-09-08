<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'; ?>
    <title>Contact | All about glasses</title>
</head>
<body>
  <?php
            include 'header.php';
        ?>
        <div class="content">
          <div class="container">
            
          <div class="row">
              <div class="col-md-8">
                <h2 class="p-bold">Live Support</h2>
                <div class="box-padding-10">
                <h4>24 Hours | 7 Days a Week | Live Support</h4>
                <p class="text-muted">Got any problem? Don't hesitate to contact us. We are here for your support. ANY DAY. ANY TIME. </p>
              </div>
              </div>

              <div class="col-md-4">
                  <img src="./img/support.jpg" class="img-responsive live-support-img" alt="Live Support">
              </div>
            </div>

            <div class="row">
              <div class="col-md-7">
              <h2 class="p-bold">Contact Us</h2>
              <div class="box-padding-10">
              <form action="#" method="POST">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"  required>
                </div>
                <div class="form-group">
                <label for="email">Email</label>
                  <input type="email" name="email" class="form-control"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                </div>
                <div class="form-group">
                  <label for="message">Message</label>
                  <textarea name="message" cols="85" class="form-control" rows="10"></textarea>
                </div>
                <input type="submit" class="btn btn-primary" value="Submit">
              </form>
              </div>
              </div>

              <div class="col-md-5">
                <div class="box-padding-rl">
                  <h2 class="p-bold">Contact Information</h2>
                  <p class="text-muted">121, West Side, PR, Todata</p>
                  <p class="text-muted">01-34-5768 Woodbridge, TX</p>
                  <p class="text-muted">USA</p>
                  <p class="text-muted">Phone : +1-647-567-9374</p>
                  <p class="text-muted">Email : allaboutglasses@abg.com</p>
                  <p class="text-muted">Follow On: <a href="#"><i class="fa fa-instagram"></i></a> <a href="#"><i class="fa fa-facebook-square"></a></i></p>                  
                </div>
              </div>
            </div>
          </div>
        </div>
 
    <?php
        include 'footer.php';
    ?>
</body>
</html>

