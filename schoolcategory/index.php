<!doctype html>
<html lang="en">
<head>
    <title>Home | IDEA Challenge 2K16</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/bootstrap-responsive1.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen"/>
    <link href="../css/ticker-style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/responsive.css" type="text/css" media="screen">


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
                <a href="../index.php"><img alt="" src="../images/logo.png" style="height: 50px"></a>
            </div>
            <div style="margin-left: 150px; margin-top: -5px">
                <h4 style="color: #7da817;">School Category</h4>
            </div>
            <aside style="margin-top: -20px;">
                <ul>
                    <li><a href="https://www.facebook.com/IeslIdeaChallenge" target="_blank"><img alt="fbimage"
                                                                                                  src="../images/fbook.png"
                                                                                                  style=""></a></li>
                </ul>
            </aside>
        </div>

        <div id="menu" class="clearfix"> <!-- Navigation -->
            <nav class="navigation">
                <ul class="sf-menu">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="about.php">About</a></li>
                    <li><a href="videos.php">Videos</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="teachers.php">Teachers</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <section class="slider" >
        <div class="flexslider container" style="margin-bottom: -20px; margin-top: -20px">
            <img src="../images/student-banner.jpg" alt="student banner">
        </div>
    </section>

    <div id="content" style="margin-top: 30px">
        <div id="inner-content" class="container">

            <div class="services3 row-fluid clearfix" style="margin-bottom: 50px; margin-top: 0px">
                <div class="span12 text" style="margin-bottom: 0px;">

                    <div class="span5">
                        <img alt="" src="../images/idea-with-background.png">
                    </div>
                    <div class="span7">
                        <p>The Information Technology and Communications Engineering Sectional Committee of the IESL
                            organizes one of its annual competitions; the “IDEA Challenge”, to promote software
                            development among school students and to recognize their talents as the next generation
                            of
                            professionals in the country. So now it’s time to show your colours to the whole country
                            as
                            a young mobile application developer.
                        </p>
                        <p>
                            If you are enthusiastic about Android mobile application, eager to learn more about
                            mobile
                            application development and want to show your talents to the whole country by being a
                            winner, then IDEA challenge is for you. Learn about mobile application development with
                            Department of Computer Science and Engineering of University of Moratuwa, ask questions,
                            solve your doubts, come up with an innovative IDEA, develop your own mobile application
                            and
                            become a winner of “IDEA Challenge 2K16”.</p>
                    </div>
                </div>
            </div>

            <div class="services3 row-fluid clearfix">
                <h1>ANDROID INTRODUCTION</h1>
                <ul class="span3">
                    <li class="active3">What is Android?</li>
                    <a href="videos.php">
                        <li>More Videos</li>
                    </a>
                </ul>

                <ul class="wrapper span9">
                    <li class="displayed" style="float: right">
                        <iframe width="640" height="380"
                                src="https://www.youtube.com/embed/IppTZPC8MvM?loop=1&playlist=IppTZPC8MvM"
                                frameborder="0" allowfullscreen></iframe>
                    </li>
                </ul>
            </div>

            <div class="services3 row-fluid clearfix">
                <h1>Log In to our Moodle</h1>
                <ul class="span3">
                    <li class="active3">What is Moodle?</li>
                    <a href="../lms/login/">
                        <li>Log into Moodle</li>
                    </a>
                </ul>

                <ul class="wrapper span9">
                    <li class="displayed">
                        <img alt="" src="../images/moodle.png">

                        <h2>Moodle - Modular Object-Oriented Dynamic Learning Environment is an Online Learning
                            Management System.</h2>

                        <p>Our Moodle provides a discussion forum, an online calendar, a convenient way to share
                            online
                            news and announcements and an e-learning platform to make sure that you walk towards the
                            successful completion of the android application development course of ten weeks. It
                            will
                            make sure that you are ready to face “IDEA Challenge” successfully.</p>
                    </li>
                </ul>
            </div>

            <blockquote id="blockquote2" style="margin-bottom: 10px; margin-top: 50px">IDEA Challenge will promote and encourage the
                School children on IT and
                Communication Technology.
            </blockquote>
            <div style="margin-bottom: 70px; float: right; font-size: 16px; padding-right: 80px">
                <p>- Dr.Chandana Gamage, Dept. of CSE -</p>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include '../footer.php'; ?>
    <!-- End Footer -->

</div>
<!-- End Container -->


<script src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script src="../js/jquery.ticker.js" type="text/javascript"></script>
<script defer src="../js/jquery.flexslider.js"></script>
<script type="text/javascript" src="../js/jquery.superfish.js"></script>
<script type="text/javascript" src="../js/jquery.selectbox.min.js"></script>
<script type="text/javascript" src="../js/jquery.fancybox.js"></script>

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
<script src="../js/script.js"></script>

<style type="text/css">
    .flex-direction-nav{
        display: none !important;
    }
</style>

</body>
</html>