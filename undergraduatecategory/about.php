<!doctype html>
<html lang="en">
<head>
    <title>About | IDEA Challenge 2K16</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" media="screen">
    <link rel="stylesheet" href="../css/bootstrap-responsive1.css" type="text/css" media="screen">
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

            <div id="logo" style="margin-bottom: 15px; margin-top: -30px;"> <!-- Logo -->
                <a href="../index.php"><img alt="" src="../images/logo.png" style="height: 50px"></a>
            </div>
            <div style="margin-left: 150px; margin-top: -5px">
                <h4 style="color: #7da817;">Undergraduate Category</h4>
            </div>
            <aside style="margin-top: -20px;">
                <ul> <!-- Social Icons -->
                    <li><a href="https://www.facebook.com/IeslIdeaChallenge" target="_blank"><img alt=""
                                                                                                  src="../images/fb.jpg"></a>
                    </li>
                </ul>
            </aside>
        </div>

        <div id="menu" class="clearfix"> <!-- Navigation -->
            <nav class="navigation">
                <ul class="sf-menu">
                    <li><a href="index.php">Home</a></li>
                    <li class="active"><a href="about.php">About</a></li>
                    <li><a href="register.php">Register</a></li>
                    <li><a href="contact.php">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- End Header -->

    <!-- content -->
    <div id="content" style="margin-top: 20px;">
        <div id="inner-content" class="container">
            <div id="about">
                <div class="row-fluid">
                    <h1>A competition for undergraduate students on Mobile application
                        development organized by the institute of engineers, Sri Lanka</h1>
                </div>

                <div class="span12">
                    <div class="text">
                        <h3 style="margin-bottom: 30px;">System Requirement Specification for the <a
                                style="color: #7da817">Reforest Sri Lanka App</a></h3>

                        <p align="justify">
                            The app. will be the official mobile app. of <a href="http://www.reforestsrilanka.com/"
                                                                            target="_blank">Reforest Sri Lanka</a>
                            , a citizen lead reforestation society that is stepping up to protect Sri Lanka’s most
                            valuable treasure, our forests and the ecology that is sustained by them.<br/>

                        <h5 style="margin-bottom: 10px;">Problem Statement:</h5>

                        <p align="justify">
                            Even though Sri Lanka can boast of having the world's top ICT skills in its job market, the
                            nation's public infrastructure and public services lack providing IT enabled services to
                            monitor and help sustain the environment. The number of public servants actively monitoring
                            critical environmental systems are also far and few apart, and those doing their job as
                            required, even fever.
                        </p>
                        <p align="justify">
                            A mobile app, that can link the government sector officers with citizen driven information
                            and vice versa, also enabling clear identification of lands, illegal logging, fires,
                            forests, types of trees and even perhaps the wildlife that dwell in those areas and their
                            habitat information can turn around the country's dire deforestation problem.
                        </p>

                        <h5 style="margin-bottom: 10px;">Non-Functional Specification:</h5>

                        <p>
                            &#9632; Support Android Jellybean and above/ Support iOS<br/>
                            &#9632; Should be highly user friendly and non-technical users would use it.<br/>
                            &#9632; Should be lightweight, using optimizes graphics, on-demand data load architecture and lazy
                            loading where applicable.<br/>
                            &#9632; Should be responsive to all major android/iOS device resolutions from mobile to tabs. <br/>
                            &#9632; Should be secure, using APIs auth and SSL connection encryption technologies, hashed passwords,
                            if possible oAuth 2.<br/>
                            &#9632; Should work as expected in horizontal/ vertical layouts of devices.<br/>
                            &#9632; Should scale well to support thousands of users, manage image and geo-location data in a
                            useful way, using resources efficiently.<br/>
                        </p>

                        <h5 style="margin-bottom: 10px;">Functional Specification</h5>

                        <p>
                            <strong><u><i>Profile</i></u></strong><br/>
                            &#9632; Ability to use a simple authentication to identify a user.<br/>
                            &nbsp;&nbsp;• I.e. using mobile number + email address to identify users across devices.<br/>
                            &nbsp;&nbsp;• Send an activation email to given email, after which is verified, user is logged into
                            device, thereby allowing a user to login to the application without passwords &nbsp;&nbsp;&nbsp;&nbsp;from multiple
                            devices, registering their mobile numbers + email as a required field during the
                            registration.<br/>
                            &nbsp;&nbsp;• Allow user to manage personal details such as a profile picture, about me section.<br/>
                            &#9632; Create a robust account recovery protocol.<br/>
                            &nbsp;&nbsp;• I.e. use secondary a registered mobile number to receive a code, -> enter it and replace
                            account email or such a mechanism. (Drawback, if a device is stolen, &nbsp;&nbsp;&nbsp;&nbsp;account maybe
                            hacked.)<br/>
                            &#9632; Create a mechanism to un-enroll a number.<br/>
                            &nbsp;&nbsp;• Account -> un-enroll this device.<br/><br/>


                            <strong><u><i>App Cloud Interface</u></i></strong><br/>
                            &#9632; Feature: Mark location boundaries, mark location type (i.e. forest, city, village, pond,
                            lake ) <br/>
                            &nbsp;&nbsp;• if forest -> forest type.<br/>
                            &#9632; Feature: Create a reforestation event that will pop up on users maps. It will details no
                            of plants required, types of each plants. People can pledge to bring plants/ &nbsp;&nbsp;&nbsp;pay for plant
                            and/ or join to plant the trees.<br/><br/>


                            <strong><u><i>For General Public</u></i></strong><br/>
                            &#9632; Feature: Add a location.<br/>
                            &#9632; Feature: Add location habitat information - climate, season, date and time, trees or
                            animals, geo information.<br/>
                            &#9632; Feature: Add image with geo tagging and mark on google map layer, mark deforested area,
                            location name, add more images, affected tree types, affected &nbsp;&nbsp;&nbsp;animal life.<br/>
                            &nbsp;&nbsp;• Advanced feature-> propose suitable reforestation tree types using available data to fill
                            in reforestation trees if damage is deforestation/ degeneration<br/>
                            &#9632; Feature: View reforestation events and add participation, types of plants donated/ money.
                            Also share details on facebook and their pledge information prior to &nbsp;&nbsp;&nbsp;event. After event/
                            during event capture photos and social share.<br/><br/>

                            <strong><u><i>For Reforest Sri Lanka / approved list of entities (as users)</u></i></strong><br/>
                            &#9632; Mark polygonal area of where trees are planted using GPS on a app.<br/>
                            &nbsp;&nbsp;• Enter types of trees and no of trees planted.<br/>
                            &nbsp;&nbsp;• I.e. Kumbuk - 150, Mee - 200 (date, title, user-id, gps coords mandatory).<br/>
                            &nbsp;&nbsp;• Provide a log entry for event such as who was there, what was learned, issues faced (Even a text field is enough but try to improve)<br/>
                            &#9632; When entering a reforested area, pop up message and view historical data<br/>
                            &#9632; Have feature to mark area updates on site visits/ monitoring rounds to enter<br/>
                            &nbsp;&nbsp;• Success rate, no of plants and types dead, no of plants and types re-planted, remarks, date
                            <br/><br/>
                        </p>
                    </div>

                    <div class="text">
                        <h3 style="margin-bottom: 30px;">What do you want to know about the Competition</h3>

                        <h5 style="margin-bottom: 10px;">OUR VISION</h5>

                        <p>Provide an opportunity to trot out and enhance innovative and creative ideas in Mobile
                            application development.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">OUR MISSION</h5>

                        <p>Spread cutting edge technical knowledge on mobile application development among school
                            children and undergraduates, inspire and guide them to be innovative engineers.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">WHO ARE THE ORGANIZERS OF THIS EVENT?</h5>

                        <p align="justify">This competition is organized by The Institution of Engineers, Sri Lanka (IESL) with Computer
                            Science and Engineering Department of University of Moratuwa for school and undergraduate
                            students on Mobile Application development.
                            Institution of Engineers, Sri Lanka (IESL) is the largest and the apex engineering body in
                            the country. Established in 1956, currently it has an active membership around 16,000.The
                            Information Technology and Communications Engineering Sectional Committee of the IESL
                            organizes this competition annually, to promote software development among undergraduate
                            students
                            and to recognize their talents as the next generation of professionals in the country.
                            University of Moratuwa is a leading university in Sri Lanka which currently consists of
                            three faculties. Computer Science and Engineering Department that belongs to the Faculty of
                            Engineering is one of the two departments in Sri Lanka along with University of Peradeniya
                            to offer an engineering degree in computer science. Annually the department involves in
                            organizing many events apart from the academic activities in order to improve the ICT
                            knowledge and skills among the young students in Sri Lanka.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">WHAT IS THE PURPOSE OF THIS EVENT?</h5>

                        <p align="justify">One of the main constraints for the mobile application developers is the lack of knowledge
                            and facilities.
                            Main idea of organizing this event is to
                            provide assistance for those to learn the art of mobile application development and
                            ultimately give them an opportunity to make use of what they have learnt and showcase their
                            talents.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">GENERAL GUIDELINES</h5>

                        <p>• A team may comprise of one or more applicants.<br/>
                        </p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">I WANT TO PARTICIPATE IN THE EVENT. WHAT THINGS SHOULD I BE
                            AWARE OF?</h5>

                        <p>• All the contestants are required to register for the course via website.<br/>
                            • A proposal containing a brief idea about the outcome must be submitted when applying.<br/>
                            • Each group will have to face a mid evaluation and an end evaluation.<br/>
                        </p>
                    </div>

                </div>

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
<script type="text/javascript" src="../js/jquery.superfish.js"></script>
<script type="text/javascript" src="../js/jquery.selectbox.min.js"></script>
<script src="../js/script.js"></script>

</body>
</html>
