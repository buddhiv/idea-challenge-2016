<!doctype html>
<html lang="en">
<head>
    <title>Contact | IDEA Challenge 2016</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/bootstrap-responsive1.css" type="text/css" media="screen">
    <link href="css/ticker-style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/responsive.css" type="text/css" media="screen">


</head>
<body>

<!-- Container -->
<div id="container">

    <div id="first-line">
        <div id="top-line" class="container">
        </div>
    </div>

    <!-- Header -->
    <header>
        <div id="top" class="clearfix">

            <div id="logo"> <!-- Logo -->
                <a href="index.php"><img alt="" src="images/logo.png"></a>
            </div>
            <aside>
                <ul> <!-- Social Icons -->
                    <li><a href="#"><img alt="" src="images/fb.png"></a></li>
                </ul>
            </aside>
        </div>

        <div id="menu" class="clearfix"> <!-- Navigation -->
            <nav class="navigation">
                <ul class="sf-menu">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="videos.php">Videos</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li class="active"><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- content -->
    <div id="content" style="margin-top: 40px;">
        <div id="inner-content" class="container">
            <div id="contact" class="row-fluid">
                <!--<div class="span12">-->
                <!--<h1>Contact Us</h1>-->

                <!--<p>Quisque malesuada aliquam vulputate. Cras pulvinar erat ac velit eleifend porttitor at eu diam.-->
                <!--Praesent elit mi, mattis vitae accumsan bibendum, porttitor non neque. Phasellus dignissim-->
                <!--sagittis felis vel rutrum. Sed eget mi in massa luctus aliquam. In tincidunt scelerisque turpis-->
                <!--placerat interdum. Donec convallis diam dolor, eu mollis magna. Aliquam a ante risus. Aliquam-->
                <!--dapibus, lacus eu tristique congue, eros enim tempor nisl, at tempus enim erat nec leo. Ut ac-->
                <!--tellus purus, eget pulvinar mauris. Maecenas tincidunt lectus at purus adipiscing id dapibus-->
                <!--lectus vestibulum.</p>-->
                <!--</div>-->

                <div class="row-fluid">
                    <div class="span8">
                        <h1 style="color: black;">Send us a message</h1>

                        <form id="contact-form">
                            <label id="label" for="name"></label><input name="name" id="name" type="text"
                                                                        placeholder="Name" value="">
                            <label id="label1" for="mail"></label><input name="mail" id="mail" type="text"
                                                                         placeholder="mail" value="">
                            <label id="label2" for="website"></label><input name="website" id="website" type="text"
                                                                            placeholder="website" value="">
                            <textarea name="comment" placeholder="Message"></textarea>

                            <div id="msg" class="message"></div>
                            <input type="submit" id="submit" value="Send">
                        </form>
                    </div>

                    <div class="span4">
                        <h1 style="color: black;">For more info</h1>

                        <div>
                            <h6 style="margin-bottom: 5px; margin-top: 15px;">Lakshan Gamage</h6>
                            <p><img alt="" src="images/contact2.png">071 252 4923</p>
                            <p><img alt="" src="images/contact1.png">lakshangamage.13@cse.mrt.ac.lk</p>

                            <h6 style="margin-bottom: 5px; margin-top: 15px;">Buddhi Vikasitha</h6>
                            <p><img alt="" src="images/contact2.png">071 252 4923</p>
                            <p><img alt="" src="images/contact1.png">buddhiv.13@cse.mrt.ac.lk</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <!-- End content -->

    <!-- Footer -->
    <footer class="clearfix">
        <div class="end">
            <div class="back-to-top">
                <img alt="" src="images/back-to-top.png">

                <p>&copy; Copyright 2016 IDEA Challenge | All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!-- End Container -->

<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script src="js/jquery.ticker.js" type="text/javascript"></script>
<!--<script type="text/javascript" src="js/jquery.superfish.js"></script>-->
<!--<script type="text/javascript" src="js/jquery.selectbox.min.js"></script>-->
<!--<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>-->
<!--<script type="text/javascript" src="js/gmap3.min.js"></script>-->
<script src="js/script.js"></script>

</body>
</html>