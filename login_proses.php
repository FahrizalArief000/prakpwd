<?php
session_start();

// Menghubungkan dengan koneksi
$querry = new mysqli('localhost', 'root', '', 'baswara');

// Mengecek koneksi
if ($querry->connect_error) {
    die("Connection failed: " . $querry->connect_error);
}

// Menangkap data yang dikirim dari form
$email = $_POST['email'];
$password = $_POST['password'];

// Menyiapkan statement untuk menghindari SQL injection
$stmt = $querry->prepare("SELECT * FROM akun WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Memeriksa keberadaan user dan mencocokkan password
if ($user && password_verify($password, $user['password'])) {
    $_SESSION['email'] = $email;
    header("location:index.php");
} else {
    header("location:login.php?pesan=gagal");
}

// Menutup statement dan koneksi
$stmt->close();
$querry->close();
?>
