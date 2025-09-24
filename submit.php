<?php 
$conn = mysqli_connect("localhost", "root", "", "codereality");

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

    $query = "INSERT INTO tb_academy VALUES('', '$F_name', '$L_name', '$email', '$phone', '$age','$gender','$school','$class','$s_class','$course', '$p_phone', '$p_email', '$location', '$about', '$a_program')";
    mysqli_query($conn,$query);

    echo " <script> 
                   alert('Registration Successfull. You will get a response soon'); 
                   window.location.href='index.html';
           </script>";
    
    

}








?>