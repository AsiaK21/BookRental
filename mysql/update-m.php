<?php
$servername = "localhost";
//$servername = "172.0.0.2";
$username = "user1";
$password = "pass";
$database = "test1";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
 die("Database connection failed: " . $conn->connect_error);
}

 echo "Databse connected successfully, username " . $username . "<br><br>";
 $sql = "UPDATE test1 SET email = 'MONIKA@gmail.com' WHERE email = 'John@gmail.com'";
 $conn->query($sql);
 echo "Table test1 updated";
 $conn->close();


// `id`, `email`, `password`,`text`
?>