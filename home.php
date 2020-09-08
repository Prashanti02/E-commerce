<?php
    include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include 'links.php'; ?>
    <title>Welcome | All about glasses</title>
</head>
<body>
      <?php
            include 'header.php';
            include 'cartadd.php';
            $user_id = $_SESSION['user_id'];
            $email = $_SESSION['email'];
        ?>
        <div class="content">
            <div class="container-fluid">
                <div class="jumbotron">
               <?php
                        echo "<h3 class='text-center'>Welcome $email</h3>";
                    ?>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Sunglasses</div>
                            <div class="panel-body"><img src="./img/chanel.jpg" class="img-responsive img-phone" alt="Shades"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Chanel round sunglass</h4>
                                <p>Mirror color : Brown</p>
                                <p>Attribute: 100% UVA and UVB protection</p>
                                <p>Clinically safe</p>
                                <p class="p-bold">Price : $600/-</p>
                               <?php if(check_if_added_to_cart(1)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Sunglasses</div>
                            <div class="panel-body"><img src="./img/square.jpg" class="img-responsive img-phone" alt="Shades"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Chanel square sunglasses</h4>
                                 <p>Mirror color : Black</p>
                                <p>Attribute: 3 UV protection filter lense</p>
                                <p>Polarized lenses</p>
                                <p class="p-bold">Price : $574/-</p>
                                 <?php if(check_if_added_to_cart(2)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Sunglasses</div>
                            <div class="panel-body"><img src="./img/gucci.jpg" class="img-responsive img-phone" alt="Shades"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Inverted cat-eye</h4>
                                <p>Lens: Light Yellow</p>
                                <p>Frame height: 2.1", frame width: 5.7"</p>
                                <p>Made in Italy</p>
                                <p class="p-bold">Price : $755</p>
                                <?php if(check_if_added_to_cart(3)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                <!-- Row 2 -->
                <div class="row">
                    <div class="col-md-4">
                        <div class="panel panel-default text-center">
                            <div class="panel-heading">Sunglasses</div>
                            <div class="panel-body"><img src="./img/gucciround.jpg" class="img-responsive img-phone" alt="Shades"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Round acetate</h4>
                                <p>Lens: Mirrored</p>
                                <p>Ivory acetate temples with Gucci logo and metal rivets</p>
                                <p>Made in Italy</p>
                                <p class="p-bold">Price : $940</p>
                                <?php if(check_if_added_to_cart(4)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Sunglasses</div>
                            <div class="panel-body"><img src="./img/butterfly.jpg" class="img-responsive img-phone" alt="Shades"></div>
                            <div class="panel-footer">
                            <h4 class="p-bold">Butterfly sunglasses</h4>
                                <p>Lenses: Grey, gradient</p>
                                <p>Attribute: UV category filter 3</p>
                                <p>Made in Italy</p>
                                <p class="p-bold">Price : $640</p>
                                <?php if(check_if_added_to_cart(5)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                    <div class="panel panel-default text-center">
                            <div class="panel-heading">Sunglasses</div>
                            <div class="panel-body"><img src="./img/guccisquare.jpg" class="img-responsive img-phone" alt="Shades"></div>
                            <div class="panel-footer">
                                <h4 class="p-bold">Exclusive square sunglasses with charms</h4>
                                <p>Frame: Transparent yellow and brown bi-layer acetate</p>
                                <p>Gold metal temples with brown Interlocking G detachable charms</p>
                                <p>Made in Italy</p>
                                <?php if(check_if_added_to_cart(6)) {                                    
                                    echo '<a href="#" class="btn btn-success btn-block disabled">Added To Cart</a>';
                                } else {?>                                    
                                    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add To Cart</a>
                                <?php } ?>
                            </div>
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