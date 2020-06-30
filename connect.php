<html>
<body>

<?php

$dbname = 'fyp-php';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

$id = $_GET["id"];
$voltage = $_GET["voltage"];
$status = $_GET["status"];


$query = "INSERT INTO a1b2 (voltage, status) VALUES ('$voltage', '$status')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";

?>
</body>
</html>