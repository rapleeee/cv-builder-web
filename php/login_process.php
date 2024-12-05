<?php 

session_start(); 

include("connection.php"); 

$username = $_POST['username']; 

$password = $_POST['password']; 

$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'"; 

$result = $connection->query($sql); 

if ($result->num_rows > 0) { 

 $_SESSION['username'] = $username; 

 header("Location: index2.php"); 

} else { 

 echo "Login gagal. <a href='login.php'>Coba lagi</a>"; 

} 

$connection->close(); 

?>