<?php
include 'conn.php';

// Ambil data (kita abaikan pembolehubah $bilik buat sementara)
$matrik     = $_POST['matrik'];
$tarikh     = $_POST['tarikh'];
$masa_mula  = $_POST['masa_mula'];
$masa_tamat = $_POST['masa_tamat'];

// Masukkan ke dalam database (Hanya kolum yang wujud dalam SQL awak)
$sql = "INSERT INTO tempahan (matrik, tarikh, masa_mula, masa_tamat) 
        VALUES ('$matrik', '$tarikh', '$masa_mula', '$masa_tamat')";

if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('Tempahan berjaya direkodkan!');
            window.location.href='index.html';
          </script>";
} else {
    echo "<h1>Gagal!</h1>";
    echo "Ralat: " . mysqli_error($conn);
}

mysqli_close($conn);
?>