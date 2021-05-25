<?php
// php handler code to respond to the contact us form
    if (isset($_POST["submit"])) {
        $email = htmlentities($_POST["email"]);
        $message = htmlentities($_POST["message"]);
        mail("connor.mcdonald.2020@uni.strath.ac.uk, bhavika.mistry.2020@uni.strath.ac.uk, 
        hussain.master.2020@uni.strath.ac.uk", "Enquiry", $message, "From:". $email);
    }
?>