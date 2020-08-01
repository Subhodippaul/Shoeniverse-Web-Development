<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact Us | Shoeniverse</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid decor_bg bg_con" id="content">
            <div class="container con">
                <h2>LIVE SUPPORT<br></h2>
                <h3>
                    24 hours | 7 days a week | 365 days a year Live Technical Support<br>
                </h3>
                <p>It is a long established tact that a readerwill be distracted by the readable content ot a page<br> when looking at its layout, The point of using Lorem
Ipsum lsthat it has a more-orless normal<br> distribution oi letters There are many variations of passages of Lorem Ipsum available.<br>But the majority
have suﬂered alteration in some form by injected humour. or randomised<br> words which don‘t look even slightly believable. If you are going to use a
passage of Lorem<br> lpsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.</p>
            </div>
            <div class="row">
                <div class="container con2">
                    <div class="col-lg-4 col-lg-offset-0 col-md-6 col-md-offset-3">
                        <h2>CONTACT US</h2>
                        <form  action="contact_submit.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name"  required = "true" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  name="e-mail" required = "true">
                            </div>
                            <div class="form-group">
                                <textarea placeholder="Message" name="message" required rows="5" cols="41"></textarea>
                            </div>
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <div class="con3">
                        <h2>COMPANY INFORMATION</h2>

                            Name 5130 Lorem Ipsum Dolor Sit,<br>
                            22-56-23 Sit Amet. Lorem,<br>
                            USA
                            PhoneIIOO) 222 666 444<br>
                            Fax: (000] 000 DD 00 0<br>
                            Message: Email: info@mycompany.com<br>

                            Follsow on: Facebook, Twitter<br> 

                    </div>
                </div>
            </div>
        </div>
        <?php include 'includes/header.php'; ?>
    </body>
</html>