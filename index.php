<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');

}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Shoeniverse</title>
        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
            <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1>Good shoes will take you to good places.</h1>
                            <p>Flat 40% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#sports" >
                            <div class="thumbnail">
                                <img src="img/1.jpg" alt="">
                                <div class="caption">
                                    <h3>Sports</h3>
                                    <p>Life is better in running</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#casuals" >
                            <div class="thumbnail">
                                <img src="img/10.jpg" alt="">
                                <div class="caption">
                                    <h3>Casual</h3>
                                    <p>Let's dress up your feet in casuals</p>
                                </div>
                            </div> 
                        </a>
                    </div>

                    <div class="col-sm-4">
                        <a href="products.php#formals" >
                            <div class="thumbnail">
                                <img src="img/13.jpg" alt="">
                                <div class="caption">
                                    <h3>Formal</h3>
                                    <p>Shoes speak louder than words</p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body> 
</html>