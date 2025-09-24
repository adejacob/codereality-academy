<?php 

if(isset($_POST["submit"])){
    $F_name     = $_POST["F_name"];
    $L_name     = $_POST["L_name"];
    $email      = $_POST["email"];
    $phone      = $_POST["phone"];
    $age        = $_POST["age"];
    $gender     = $_POST["gender"];
    $school     = $_POST["school"];
    $class      = $_POST["class"];
    $s_class    = $_POST["s_class"];
    $course     = $_POST["course"];
    $p_phone    = $_POST["p_phone"];
    $p_email    = $_POST["p_email"];
    $location   = $_POST["location"];
    $about      = $_POST["about"];
    $a_program  = $_POST["a_program"];

    $mailTo = 'coderealityacademy.tech@gmail.com';

    $subject = 'A New Application Received From ' .$F_name;

    $htmlContent = '<h2>Application Request Received</h2>
    <p> <b>Client Name: </b> '.$F_name . " " .$L_name.'</p>
    <p> <b>Client Email: </b> '.$email .'</p>
    <p> <b>Client Phone: </b> '.$phone .'</p>
    <p> <b>Client Age: </b> '.$age .'</p>
    <p> <b>Client Gender: </b> '.$gender .'</p>
    <p> <b>Client School: </b> '.$school .'</p>
    <p> <b>Client Class: </b> '.$class .'</p>
    <p> <b>Class intrested in: </b> '.$s_class .'</p>
    <p> <b>Course intrested in: </b> '.$course .'</p>
    <p> <b>Parent/Guardian Phone: </b> '.$p_phone .'</p>
    <p> <b>Parent/Guardian Emai: </b> '.$p_email .'</p>
    <p> <b>Client Location: </b> '.$location .'</p>
    <p> <b>Where did you hear about us: </b> '.$about .'</p>
    <p> <b>Class intrested in  other programs: </b> '.$a_program .'</p>';

    $headers = "From: ".$F_name . "<". $email . ">";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    if(mail($mailTo, $subject, $htmlContent, $headers)) {
        echo "<script>alert('Registration Successfull. You will get a response soon');
        window.location.href='contact.html';      
        </script>";
        
    }
    else {
        echo "<script>alert('Mail was not sent. Please try again later'); 
              </script>";
      }
    
    
    

}








?>