<?php
    require("connect.php");
    if (isset($_GET['id']) && is_numeric($_GET['id'])) {
        $product_id = $_GET['id'];
        $user_id = $_SESSION['user_id'];

        $query = "INSERT INTO users_items (user_id,item_id,status) VALUES ('$user_id','$item_id','Added To Cart')";

        $result = mysqli_query($con,$query) or die(mysqli_error($con));

        header("location:home.php");
        
    }
?>   