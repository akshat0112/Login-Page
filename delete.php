<?php
$servername = "localhost";
$serverusername = "root";
$serverpassword = "";
$serverdatabase = "loginpage";
$conn = new mysqli($servername, $serverusername, $serverpassword, $serverdatabase);

if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}

$username = $_REQUEST['username'];

$sql_delete = "DELETE FROM `login_data` WHERE username = '$username'";

if(mysqli_query($conn, $sql_delete))
{
    echo "Account deleted succesfully ! We would love to have you back";
}
else{
            echo "ERROR: Wrong username Sorry $sql_delete. " 
                . mysqli_error($conn);
        }

mysqli_close($conn);

?>
