<?php
session_start();
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fast Delivery</title>

    <link rel="stylesheet" href="bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link href="font-awesome.min.css" rel="stylesheet">
    <link href="fonts/stylesheet.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/slick.css" rel="stylesheet">
    <link href="css/jquery.mb.YTPlayer.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>

<body class="js">

    <div id="preloader"></div>

    <section class="about-us">
        <div class="logo_menu" id="sticker">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-lg-2 col-sm-2 col-xs-6">
                        <!-- <div class="logo">
                            <!-- <a href="index.html"><img src="img/logo.png" alt="logo"></a>
                        </div> -->
                    </div>
                    <div class="col-md-6 col-xs-6 col-md-offset-1 col-sm-7 col-lg-offset-1 col-lg-6 mobMenuCol">
                        <nav class="navbar">
                                <ul class="nav navbar-nav navbar-right menu">
                                    <li><a href="index.html">home</a>
                                    </li>
                                </ul>
                            <!-- /.navbar-collapse -->
                        </nav>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-4 col-lg-3 signup">
                        <ul class="nav navbar-nav">
                            <li><a href="login/">login</a></li>
                            <li><a href="sign-up/">sign up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    start pricing area-->
    <!-- Pricing Area -->
    <section class="about_top">
        <div class="container">
            <div class="row page-title">
                <div class="col-md-5 col-sm-6">
                    <div class="pricing-desc section-padding-two">
                        <div class="pricing-desc-title">
                            <div class="title">
                                <h2>Delivery Panel</h2>
                            </div>
                            
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-6 col-xs-6 text-right">
                    <div class="about_us_content_title">
                        <ul class="breadcrumbs">
                            <li><a href="index.html">home</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <style>
                table {
                border-collapse: collapse;
                width: 100%;
                }

                th, td {
                text-align: left;
                padding: 8px;
                }

                tr:nth-child(even) {background-color: #f2f2f2;}
                hr { 
                    display: block;
                    margin-top: 0.5em;
                    margin-bottom: 0.5em;
                    margin-left: auto;
                    margin-right: auto;
                    border-style: inset;
                    border-width: 1px;
                    } 
                </style>
                <?php
                #error_reporting(0);
                if ($_SESSION['role']=='d'){
                    $result=mysqli_query($conn,"select * from status where email='$_SESSION[email]'");
                    echo "<h3><b>Orders</b></h3><hr>";
                    echo '<table callpadding="10" border="1">
                    <tr>
                    <th>Order ID</th>
                    <th>Status</th>
                    <th>Last Update</th>
                    <th>Expected</th>
                    </tr>';

                    while($row = mysqli_fetch_array($result))
                    {
                        echo "<tr>";
                        echo "<td>" . $row['0'] . "</td>";
                        echo "<td>" . $row['1'] . "</td>";
                        echo "<td>" . $row['2'] . "</td>";
                        echo "<td>" . $row['3'] . "</td>";
                        echo "</tr>";
                    }
                    echo "</table></br>";
                }
                else echo "You are not signed-in! please sign-in.";
                ?>
            
        </div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    </section>
    <!-- /.End Of Pricing Area -->

    <div class="copyright-area">
        <div class="container">
            <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                <div class="footer-text">
                    <p>Copyright 2016, All Rights Reserved</p>
                </div>
            </div>
            <div class="col-xs-12  col-sm-6 col-md-6 text-right">
                <div class="footer-text">
                    <!-- <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-linkedin"></a>
                    <a href="#" class="fa fa-google-plus"></a>
                    <a href="#" class="fa fa-dribbble"></a> -->
                </div>
            </div>
        </div>
    </div>



    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.nav.js"></script>
    <script src="js/jquery.mb.YTPlayer.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>