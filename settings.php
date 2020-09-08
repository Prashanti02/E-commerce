<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'links.php'; ?>
    <title>Settings | All about glasses</title>
</head>
<body>
    <?php
        require 'header.php';
    ?>
        <div class="content">
          <div class="container">
          <div class="col-md-4 col-md-offset-4">
          <div class="panel panel-default-setting">
            <div class="panel-heading">
              <h2 class="text-center">Change Password</h2>
            </div>
            <div class="panel-body">
                <form action="settingsphp.php" method="POST">
                  <div class="form-group">
                    <label for="oldPassword">Old Password</label>
                    <input type="password" class="form-control" name="oldPassword" required>                    
                  </div>
                  <div class="form-group">
                    <label for="newPassword">New Password</label>
                    <input type="password" class="form-control" name="newPassword" required>
                  </div>
                  <div class="form-group">
                    <label for="newPasswordRe">Re-type New Password</label>
                    <input type="password" class="form-control" name="newPasswordRe" required>                    
                  </div>
                  <?php 
                    if(isset($_GET['m1'])){
                      echo $_GET['m1'];
                    }                      
                    ?>
                  <input type="submit" class="btn btn-setting btn-block" value="Confirm">
                </form>
            </div>
          </div>
          </div>
          </div>
        </div>
    <?php
        require 'footer.php';
    ?>  
</body>
</html>

