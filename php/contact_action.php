<?php
/**
 * Created by PhpStorm.
 * User: Buddhi
 * Date: 2/9/2016
 * Time: 6:29 PM
 */

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

                    $header = "MIME-Version: 1.0\r\n";
                    $header .= "Content-type: text/html\r\n";

                    mail($to, $subject, $txt, $header);

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