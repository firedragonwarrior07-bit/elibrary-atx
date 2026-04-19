<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "elibrary_db"; 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Alamak! Sambungan gagal: " . mysqli_connect_error());
} else {
    echo "Tahniah! Jambatan PHP dan SQL berjaya disambungkan.";
}
?>