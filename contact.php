<!doctype html>
<html lang="en">
<head>
    <title>Contact | IDEA Challenge 2K16</title>

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

            <div id="logo" style="margin-bottom: 15px; margin-top: -30px;"> <!-- Logo -->
                <a href="index.php"><img alt="" src="images/logo.png" style="height: 50px"></a>
            </div>
            <aside style="margin-top: -20px;">
                <ul> <!-- Social Icons -->
                    <li><a href="https://www.facebook.com/IeslIdeaChallenge" target="_blank"><img alt=""
                                                                                                  src="images/fb.jpg"></a>
                    </li>
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
                    <li><a href="teachers.php">Teachers</a></li>
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


                <div class="row-fluid" style="position: relative; top: -20px">
                    <div class="span8">
                        <?php
                        if (isset($_GET['success'])) {
                            if ($_GET['success'] == 'true') {
                                ?>
                                <h1>Your message was sent successfully</h1>
                                <?php
                            } else if ($_GET['success'] == 'false') {
                                ?>
                                <h1 style="color: red">Your message failed</h1>
                                <?php
                            }
                        }
                        ?>

                        <h1 style="color: black;">Send us a message</h1>

                        <div style="position: relative; top: 10px;">
                            <form id="contact-form" action="php/contact_action.php" method="post">
                                <label id="label" for="name"></label>
                                <input name="name" id="name" type="text" placeholder="Name" value=""
                                       style="width: 550px">

                                <label id="label1" for="mail"></label>
                                <input name="mail" id="mail" type="text" placeholder="Email" value=""
                                       style="width: 550px">

                                <label id="label2" for="subject"></label>
                                <input name="subject" id="subject" type="text" placeholder="Subject" value=""
                                       style="width: 550px">

                                <textarea id="message" name="message" placeholder="Message"></textarea>

                                <div id="msg" class="message"></div>
                                <input type="submit" id="submit" value="Send"/>
                            </form>
                        </div>
                    </div>

                    <div class="span4">
                        <h1 style="color: black;">For more info</h1>

                        <div style="position: relative; top: 10px;">
                            <h6 style="margin-bottom: 5px; margin-top: 15px;">Lakshan Gamage</h6>

                            <p><img alt="" src="images/contact2.png">077 347 2649</p>

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
    <?php include 'footer.php'; ?>
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