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
$password = $_REQUEST['password'];

$sql_login = "SELECT * FROM login_data WHERE Username = '$username' " ;
$result = mysqli_query($conn, $sql_login);
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    $pass = $row["password"];
  }
} else {
  echo "0 results";
}
if($password == $pass){
	echo "Thanks for loggingg in your Login is succesful";
	}
else{
	echo "Sorry! Wrong username or password ! Please Check again !";
}

/*if($password == $row['Password']){
	echo "Login Succesful!!";
}
else{
	echo "Invalid ! Please try again";
}*/
mysqli_close($conn);

?>