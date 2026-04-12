<?php
include 'koneksi.php';
echo "<pre>";
var_dump($_POST);
echo "</pre>";
exit;

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

// query insert
$query = "INSERT INTO pesan (nama, email, pesan) 
          VALUES ('$nama', '$email', '$pesan')";

if (mysqli_query($conn, $query)) {
    echo "Pesan berhasil dikirim!<br>";
    echo "Nama: $nama <br>";
    echo "Email: $email <br>";
    echo "Pesan: $pesan";
} else {
    echo "Error: " . mysqli_error($conn);
}
?>