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



$name= $_REQUEST['name'];
$emailId = $_REQUEST['email'];
$age = $_REQUEST['age'];
$npassword = $_REQUEST['npassword'];
$mobile= $_REQUEST['mobile'];
$new_username = $_REQUEST['n_username'];

$sql_signup = "INSERT INTO `login_data`(`username`, `name`, `age`, `mobile`, `email`, `password`) VALUES ('$new_username','$name','$age','$mobile','$emailId','$npassword')";

if(mysqli_query($conn, $sql_signup))
{
	echo "Hurray !! Sign up succesful , Welcome to our family";
}
else{
            echo "ERROR: Hush! Sorry $sql_signup. " 
                . mysqli_error($conn);
        }

mysqli_close($conn);

?>