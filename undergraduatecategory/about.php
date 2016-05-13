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
                    <li><a href="videos.php">Videos</a></li>
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
                    <h1>A competition for undergraduate students on Andriod application
                        development organized by the institute of engineers, Sri Lanka</h1>

                    <div class="span12 text" style="margin-bottom: 0px;">

                        <div class="span5">
                            <img alt="" src="../images/idea-with-background.png">
                        </div>
                        <div class="span7">
                            <p>The Information Technology and Communications Engineering Sectional Committee of the IESL
                                organizes one of its annual competitions; the “IDEA Challenge”, to promote software
                                development among undergraduate students and to recognize their talents as the next
                                generation
                                of
                                professionals in the country. So now it’s time to show your colours to the whole country
                                and make your institution proud.
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

                <div class="span12">
                    <div class="text">
                        <h3 style="margin-bottom: 30px;">System Requirement Specification for the <a
                                style="color: #7da817">Reforest Sri Lanka App</a></h3>

                        <p>
                            The app. will be the official mobile app. of Reforest Sri Lanka, a citizen lead
                            reforestation society that is stepping up to protect Sri Lanka’s most valuable treasure, our
                            forests and the ecology that is sustained by them.<br/>

                        <h5 style="margin-bottom: 10px;">Problem Statement:</h5>

                        <p>
                            Even though Sri Lanka can boast of having the world's top ICT skills in its job market, the
                            nation's public infrastructure and public services lack providing IT enabled services to
                            monitor and help sustain the environment. The number of public servants actively monitoring
                            critical environmental systems are also far and few apart, and those doing their job as
                            required, even fever.
                        </p>
                        <p>
                            A mobile app, that can link the government sector officers with citizen driven information
                            and vice versa, also enabling clear identification of lands, illegal logging, fires,
                            forests, types of trees and even perhaps the wildlife that dwell in those areas and their
                            habitat information can turn around the country's dire deforestation problem.
                        </p>

                        <h5 style="margin-bottom: 10px;">Non-Functional Specification:</h5>

                        <p>
                            • Support Android Jellybean and above.<br/>
                            • Should be highly user friendly and non-technical users would use it.<br/>
                            • Should be lightweight, using optimizes graphics, on-demand data load architecture and lazy
                            loading where applicable.<br/>
                            • Should be responsive to all major android device resolutions from mobile to tabs.<br/>
                            • Should be secure, using APIs and SSL connection encryption technologies, hashed passwords,
                            if possible oAuth 2.<br/>
                            • Should work as expected in horizontal/ vertical layouts of devices.<br/>
                            • Should scale well to support thousands of users, manage image and geo-location data in a
                            useful way, using resources wisely.<br/>
                        </p>

                        <h5 style="margin-bottom: 10px;">Functional Specification</h5>

                        <p>
                            <strong>Profile</strong><br/>
                            • Ability to use a simple authentication to identify a user.<br/>
                            • I.e. using mobile number + email address to identify users across devices.<br/>
                            • Send an activation email to given email, after which is verified, user is logged into
                            device, thereby allowing a user to login to the application without passwords from multiple
                            devices, registering their mobile numbers + email as a required field during the
                            registration.<br/>
                            • Allow user to manage personal details such as a profile picture, about me section.<br/>
                            • Create a robust account recovery protocol.<br/>
                            • I.e. use secondary a registered mobile number to receive a code, -> enter it and replace
                            account email or such a mechanism. (Drawback, if a device is stolen, account maybe
                            hacked.)<br/>
                            • Create a mechanism to un-enroll a number.<br/>
                            • Account -> un-enroll this device.<br/><br/>


                            <strong>App Cloud Interface</strong><br/>
                            • Feature: Mark location boundaries, mark location type (i.e. forest, city, village, pond,
                            lake, ) if forest -> forest type.<br/>
                            • Feature: Create a reforestation event that will pop up on users maps. It will details no
                            of plants required, types of each plants. People can pledge to bring plants/ pay for plant
                            and/ or join to plant the trees.<br/><br/>


                            <strong>For General Public</strong><br/>
                            • Feature: Add a location.<br/>
                            • Feature: Add location habitat information - climate, season, date and time, trees or
                            animals, geo information.<br/>
                            • Feature: Add image with geo tagging and mark on google map layer, mark deforested area,
                            location name, add more images, affected tree types, affected animal life.<br/>
                            -> advanced feature-> propose suitable reforestation tree types using available data to fill
                            in reforestation trees if damage is deforestation/ degeneration<br/>
                            • Feature: View reforestation events and add participation, types of plants donated/ money.
                            Also share details on facebook and their pledge information prior to event. After event/
                            during event capture photos and social share.<br/>
                        </p>
                    </div>

                    <div class="text">
                        <h3 style="margin-bottom: 30px;">What do you want to know about the Competition</h3>

                        <h5 style="margin-bottom: 10px;">OUR VISION</h5>

                        <p>Provide an opportunity to trot out and enhance innovative and creative ideas in android
                            application development.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">OUR MISSION</h5>

                        <p>Spread cutting edge technical knowledge on mobile application development among school
                            children, inspire and guide them to be innovative engineers.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">WHO ARE THE ORGANIZERS OF THIS EVENT?</h5>

                        <p>This competition is organized by The Institution of Engineers, Sri Lanka (IESL) with Computer
                            Science and Engineering Department of University of Moratuwa for school students on Android
                            Mobile Application development.
                            Institution of Engineers, Sri Lanka (IESL) is the largest and the apex engineering body in
                            the country. Established in 1956, currently it has an active membership around 16,000.The
                            Information Technology and Communications Engineering Sectional Committee of the IESL
                            organizes this competition annually, to promote software development among school students
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

                        <p>Most of the Sri Lankan students are interested in mobile application development but the main
                            constraint for them is lack of knowledge and facilities. Only very few schools have well
                            equipped ICT laboratories and resources persons. Main idea of organizing this event is to
                            provide assistance for students to learn the art of mobile application development and
                            ultimately give them an opportunity to make use of what they have learnt and showcase their
                            talents.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">GENERAL GUIDELINES</h5>

                        <p>• Participating members of teams should be current students of schools registered under the
                            Ministry of Education.<br/>
                            • A team may comprise of maximum of 4 students.<br/>
                            • Each team should have a teacher from their school as the supervisor/teacher-in-charge.</p>
                    </div>
                    <div class="text">
                        <h5 style="margin-bottom: 10px;">I WANT TO PARTICIPATE IN THE EVENT. WHAT THINGS SHOULD I BE
                            AWARE OF?</h5>

                        <p>• All the contestants are required to register for the course via website or school<br/>
                            • Video lectures will be conducted by undergraduate from Department of Computer Science and
                            Engineering of University of Moratuwa.<br/>
                            • Each group will be assisted with an undergraduate from Department of Computer Science and
                            Engineering.<br/>
                            • At the end of the lecture series each group will have to create an android application for
                            the competition.</p>
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