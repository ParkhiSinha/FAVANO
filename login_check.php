<?php
    session_start();
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "";
    $db_name = "favano";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM profile WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['name'] ." welcome back" ."<br/>";

        $SESSION['id']=$row['id'];
        $SESSION['name']=$row['name'];
        

        echo '<a href="about_login.php">Click here- To go to our home page</a>';
        
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>
