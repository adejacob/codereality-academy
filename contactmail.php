<?php 

if(isset($_POST["submit"])){
    $Name     = $_POST["Name"];
    $Email     = $_POST["Email"];
    $Phone      = $_POST["Phone"];
    $Subject      = $_POST["Subject"];
    $Comments        = $_POST["Comments"];
    
    $mailTo = 'coderealityacademy.tech@gmail.com';

    $subject = 'A New Contact Received From ' .$Name;

    $htmlContent = '<h2>Application Request Received</h2>
    <p> <b>Client Name: </b> '.$Name . '</p>
    <p> <b>Client Email: </b> '.$Email .'</p>
    <p> <b>Client Phone: </b> '.$Phone .'</p>
    <p> <b>Client Subject: </b> '.$Subject .'</p>
    <p> <b>Client Commect: </b> '.$Comments .'</p>';

    $headers = "From: ".$Name . "<". $Email . ">";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    
    if(mail($mailTo, $subject, $htmlContent, $headers)) {
        echo "<script>alert('Enquiry sent successfully!');
        window.location.href='contact.html';      
        </script>";
        
    }
    else {
        echo "<script>alert('Mail was not sent. Please try again later'); 
              </script>";
      }
    
    
    

}








?>