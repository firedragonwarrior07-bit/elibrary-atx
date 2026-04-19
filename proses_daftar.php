<?php
// Masukkan fail sambungan
include 'conn.php';

// Ambil data dari borang
$nama = $_POST['nama'];
$matrik = $_POST['matrik'];
$emel = $_POST['emel'];
$telefon = $_POST['telefon'];

// Arahan SQL - Pastikan nama jadual 'pengguna' adalah betul
$sql = "INSERT INTO pengguna (nama, matrik, emel, telefon) 
        VALUES ('$nama', '$matrik', '$emel', '$telefon')";

// Laksanakan arahan
if (mysqli_query($conn, $sql)) {
    echo "<script>
            alert('DATA BERJAYA MASUK! Nama: $nama');
            window.location.href='index.html';
          </script>";
} else {
    // Jika gagal, papar ralat sebenar dari SQL
    echo "<h1>RALAT SQL TERJADI:</h1>";
    echo "Pesanan ralat: " . mysqli_error($conn);
    echo "<br><br><a href='index.html'>Kembali ke Borang</a>";
}

mysqli_close($conn);
?>