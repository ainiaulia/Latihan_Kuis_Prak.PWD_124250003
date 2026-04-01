<?php
include "koneksi.php";

if (!isset($_SESSION['sudah_isi'])) {
    header("Location: home.php?pesan=Harus isi form dulu!");
    exit();
}

$query = mysqli_query($koneksi, "SELECT * FROM pendaftaran ORDER BY id DESC LIMIT 1");
$data = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Design</title>
    <link rel="stylesheet" href="style.css?v=2">
</head>

<body>

    <nav>
        <div class="navbar">
            <p>Komunitas Kucing</p>
        </div>
        <ul>
            <li>
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="form.php">Daftar</a>
            </li>
            <li>
                <a href="design.php">Design</a>
            </li>
        </ul>

    </nav>

    <div class="design">
        <p>Design Laboratory</p>
        <img  src="kucing.jpg" alt="Fotokucing">
    </div>

    <footer>
        &copy; Aini Aulia Firda-124250003-A
    </footer>
    
</body>
</html>