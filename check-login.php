<?php
session_start();
require 'config.php'; // menyisipkan file koneksi
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'" ; 
    $query = $koneksi->query($sql);
    if ($query->num_rows > 0) { // jika datanya ada
        $row = $query->fetch_assoc();
        $_SESSION['namaLog'] = $row['nama']; // menyimpan nama yang login pada session
        header('Location: admin.php'); // arahkan ke halaman dashboard
} else {
    echo "<script>alert('Username and password salah !!!'); window.location.href='index.php'</script>";
}
    exit();
}
?>