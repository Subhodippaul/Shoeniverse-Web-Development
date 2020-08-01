<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {

}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width = device-width, initial-scale = 1">
        <title>About Us | Shoeniverse</title>
        <link href="css/bootstrap.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        <div class="container-fluid bg_abt">
                <div class="row">
                    <div class="col-sm-4">
                    <div align="center">
                        <h3>WHO ARE WE?<br><br></h3>
                        <p>Shoeniverse is a multinational footwear manufacturer and retailer, founded in the town of Zlín, today the Czech Republic.<br> Its factories in the socialist states were nationalized and branches in the capitalist states remained family-owned.<br> It is now based in Lausanne, Switzerland. The principal subsidiaries are: Europe (based in Zlín), North America (based in Toronto), Asia-Pacific-Africa (based in Singapore) and Latin America (based in Mexico).<br>The company is the world's leading shoemaker by volume and has a retail presence of over 5,300 shops in more than 70 countries and production facilities in 18 countries.</p>
                    </div>
                    </div>
                    <div class="col-sm-4" align="center">
                        <h3>OUR HISTORY<br><br></h3>
                        <p>Shoeniverse India Ltd is the largest footwear retailer and the leader in the footwear industry in India. The company is engaged in the business of manufacturing and trading of footwear and accessories through their retail and wholesale network. Their products include leather footwear rubber/canvas footwear and plastic footwear. They are having their production facilities at Batanagar in West Bengal Patna and Hathidah in Bihar Faridabad in Haryana Bangalore in Karnataka and Hosur in Tamilnadu. Their wholly owned subsidiaries include Shoeniverse Properties Ltd Coastal Commercial & Exim Ltd. and Way Finders Brands Limited.Shoeniverse India Ltd was incorporated in the year 1931 as Shoeniverse Shoe Company Pvt Ltd in Konngar West Bengal which was then shifted to Batanagar. Batanagar was the first manufacturing facility in the Indian shoe industry to receive the ISO 9001 certification. The company went public in 1973. They changed their name to Shoeniverse India Ltd. Over the years the company has established a leadership position in the footwear industry and is easily the most trusted name in branded footwear.The company has entered into an agreement with Shoeniverse Ltd of Toronto Canada for supply of technical know-how and services such as Footwear technology and design brand development product development retailing and information systems for a period of ten years from January 1 2001.<br><br><br><br></p>
                    </div>
                    <div class="col-sm-4" align="center">
                        <h3>OPPURTUNITIES<br><br></h3>
                        <h4>Available Roles</h4>
                        <p>1. Jr/Sr. Web Developer [Full Time Role + also available as a 6 months Internship]<br><br>2.Business Apprentice [6 months Internship]<br><br>3. Manager at Backend Operations [Full time role + also available as a 6 months Internship]
                        </p>
                    </div>
                </div>
            </div>
       <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>