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
$New_password = $_REQUEST['New_password'];

$sql_forgot = "UPDATE `login_data` SET `password`= '$New_password' WHERE username = '$username'";

if(mysqli_query($conn, $sql_forgot))
{
    echo "Hurray !! Password changed succesfully!";
}
else{
            echo "ERROR: Hush! Sorry $sql_forgot. " 
                . mysqli_error($conn);
        }

mysqli_close($conn);

?>