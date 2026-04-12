<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

$query = "INSERT INTO pesan (nama, email, pesan) 
          VALUES ('$nama', '$email', '$pesan')";

$result = mysqli_query($conn, $query);

if ($result) {
    echo "BERHASIL MASUK DATABASE ✔<br>";
} else {
    echo "GAGAL MASUK ❌<br>";
    echo mysqli_error($conn);
}
?>