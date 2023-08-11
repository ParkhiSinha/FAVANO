<?php

include ('db_con.php');
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO profile(name,email,password) VALUES('$name','$email','$password')";

    if(mysqli_query($con,$sql)){
        session_start();
        $_SESSION['success']='Form submitted successfully';
        echo '<a href="about_login.php">Click here-To go to home page</a>';
    }
    else{
        echo "Error".mysqli_error($con);
    }
}


?>