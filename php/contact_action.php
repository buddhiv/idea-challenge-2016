<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 2/9/2016
 * Time: 6:29 PM
 */
error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");


$successFlag = false;

if (isset($_POST['submit'])) {
    if (isset($_POST['name'])) {
        if (isset($_POST['mail'])) {
            if (isset($_POST['subject'])) {
                if (isset($_POST['message'])) {
                    $to = "ideachallenge2016@gmail.com";
                    $subject = $_POST['subject'];

                    $txt = "From: " . $_POST['mail'] .
                        "Subject: " . $_POST['subject'] .
                        "Message: " . $_POST['message'];


                    $header = "From: noreply@example.com\r\n";
                    $header.= "MIME-Version: 1.0\r\n";
                    $header.= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                    $header.= "X-Priority: 1\r\n";

                    if (mail($to, $subject, $txt, $header)) {
                        echo '<p>Your message has been sent!</p>';
                    } else {
                        echo '<p>Something went wrong, go back and try again!</p>';
                    }

                    $successFlag = true;
                    header('Location: http://idea.cse.mrt.ac.lk/contact.php?success=true');


                }else{
                    header('Location: http://idea.cse.mrt.ac.lk/contact.php?success=false');
                }
            }else{
                header('Location: http://idea.cse.mrt.ac.lk/contact.php?success=false');
            }
        }else{
            header('Location: http://idea.cse.mrt.ac.lk/contact.php?success=false');
        }
    }else{
        header('Location: http://idea.cse.mrt.ac.lk/contact.php?success=false');
    }
}else{
    header('Location: http://idea.cse.mrt.ac.lk/contact.php?success=false');
}

?>