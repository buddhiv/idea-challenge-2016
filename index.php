<!doctype html>
<html lang="en">
<head>
    <title>Home | IDEA Challenge 2K16</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/bootstrap-responsive1.css" type="text/css" media="screen">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
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

            <div id="logo" style="margin-bottom: 15px; margin-top: -30px;">
                <a href="index.php"><img alt="" src="images/logo.png" style="height: 50px"></a>
            </div>

            <aside style="margin-top: -20px;">
                <ul>
                    <li><a href="https://www.facebook.com/IeslIdeaChallenge" target="_blank"><img alt="fbimage"
                                                                                                  src="images/fbook.png"
                                                                                                  style=""></a></li>
                </ul>
            </aside>
        </div>

    </header>
    <!-- End Header -->

    <!-- Slider -->

    <section class="slider" id="slider1">
        <div class="flexslider container" style="margin-top: -20px; margin-bottom: -20px;">
            <ul class="slides span12">
                <li>
                    <img alt="" src="images/slider1.png"/>

                    <p class="flex-caption">Convert your idea into a winning moment.</p>
                </li>
                <li>
                    <img alt="" src="images/slider2.png"/>

                    <p class="flex-caption">Compete in the challenge with hundreds of others.</p>
                </li>
                <li>
                    <img alt="" src="images/slider3.png"/>

                    <p class="flex-caption">Make your passion a reality.</p>
                </li>
                <li>
                    <img alt="" src="images/slider4.png"/>

                    <p class="flex-caption">Learn Android. Let's change the world.</p>
                </li>
            </ul>
        </div>
    </section>
    <!-- End Slider -->

    <div id="content">
        <div id="inner-content" class="container">

            <div class="services3 row-fluid clearfix">
                <div class="span6" style="padding-right: 10px">
                    <a href="schoolcategory/index.php">
                        <img src="images/school.jpg" alt="schoolcategory" style="border: 1px solid #e7e7e7; padding: 5px"/>
                        <div style="position: relative; top: -40px; text-align: center">
                            <h2 style="color: white">School Category</h2>
                        </div>
                    </a>
                </div>
                <div class="span6" style="padding-right: 10px">
                    <a href="undergraduatecategory/index.php">
                        <img src="images/undergraduate.jpg" alt="undergraaduatecategory" style="border: 1px solid #e7e7e7; padding: 5px"/>
                        <div style="position: relative; top: -40px; text-align: center">
                            <h2 style="color: white">Undergraduate Category</h2>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row-fluid articles" id="articles">
                <div class="span3">
                    <img alt="iesl" src="images/iesl-logo.png"
                         style="width: 60px; height: 60px; margin-bottom: 0px"/>

                    <p><br/>Identify the latest trends in the mobile application development. Expand your knowledge
                        by working with them.</p>
                </div>

                <div class="span3">
                    <img alt="iesl" src="images/iesl-logo.png"
                         style="width: 60px; height: 60px; margin-bottom: 0px"/>

                    <p><br/>Drop your doubts and solve your problems with the help of dozens.<br/><br/></p>
                </div>

                <div class="span3">
                    <img src="images/uom-logo.png" alt="uom" style="width: 60px; height: 60px; margin-bottom: 0px"/>

                    <p><br/>Empower your creativity and ingenuity. Identify real world problems and address them
                        with what you have learnt.</p>
                </div>

                <div class="span3">
                    <img src="images/cse-logo.png" alt="cse" style="width: 60px; height: 60px; margin-bottom: 0px"/>

                    <p><br/>Attain the pride of being an innovator, a winner and a person who can stand together
                        with latest technology.</p>
                </div>
            </div>

            <blockquote id="blockquote2" style="margin-bottom: 10px">IDEA Challenge will promote and encourage the
                School children on IT and
                Communication Technology.
            </blockquote>
            <div style="margin-bottom: 70px; float: right; font-size: 16px; padding-right: 80px">
                <p>- Dr.Chandana Gamage, Dept. of CSE -</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="clearfix">
        <div class="end">
            <div class="back-to-top">
                <img alt="" src="images/back-to-top.png">

                <p>&copy; Copyright IDEA Challenge 2K16 | All Rights Reserved</p>
            </div>
        </div>
    </footer>
    <!-- End Footer -->

</div>
<!-- End Container -->


<script src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script src="js/jquery.ticker.js" type="text/javascript"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/jquery.superfish.js"></script>
<script type="text/javascript" src="js/jquery.selectbox.min.js"></script>
<script type="text/javascript" src="js/jquery.fancybox.js"></script>

<!--
Flexslider
-->
<script type="text/javascript">
    $(document).ready(function () {

        $('.flexslider').flexslider({
            animation: "fade",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });

    })
</script>
<script src="js/script.js"></script>

</body>
</html>