<?php

$con=mysqli_connect('localhost','root','','test');
if(!$con){
    echo "Connection Error".mysqli_error($con);
}

?>