<?php
    include 'connect.php';
    if(isset($_SESSION['email'])){
        header("location:home.php");
    }
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
        ?>
        <div class="content">
            <div class="container-fluid">
                <!-- Row 1 -->
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
                               <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
                            </div>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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
                                <p class="p-bold">Price : $855</p>
                                <a href="signup.php"><button class="btn btn-primary btn-block">Order Now!</button></a>
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