<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css?v=2">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
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
                <?php if(isset($_SESSION['sudah_isi'])){ ?>
                 <a href="design.php">Design</a>
                <?php } else { ?>
                    <a href="home.php?pesan=User Belum Terdaftar.Daftar terlebih dahulu!!">Design</a>
                <?php } ?>
            </li>
        </ul>
    </nav>

    <?php if(isset($_GET['pesan'])) { ?>
     <div class="alert alert-danger text-center" role="alert">
        <?= $_GET['pesan']; ?>
     </div>
    <?php } ?>

    <div class="welcome">
        <p>Selamat Datang di Komunitas Kucing</p>
    </div>
    <div class="home-container">
        <div class="home-left">
            <img src="kucing.jpg" alt="fotokucing">
            <button onclick="window.location.href='https://wolipop.detik.com/home/d-5180681/15-jenis-kucing-peliharaan-yang-populer-menggemaskan-dan-mudah-dirawat'">Info Lebih lanjut</button>
        </div>
        <div class="home-right">
            <p>
                Kucing adalah hewan mamalia kecil yang dikenal dengan sifatnya yang lincah, anggun, dan penuh rasa ingin tahu. Tubuhnya lentur dengan bulu lembut yang beragam warna, serta mata tajam yang mampu melihat jelas di kondisi minim cahaya. Kucing termasuk hewan karnivora, namun dapat beradaptasi hidup bersama manusia sebagai hewan peliharaan. Mereka memiliki kebiasaan mencakar untuk menandai wilayah, merawat diri dengan menjilat bulunya, serta tidur dalam waktu lama, bisa mencapai 12-16 jam per hari. Kucing sering dianggap membawa kenyamanan dan kasih sayang, sehingga menjadi salah satu hewan peliharaan paling populer di dunia. 
            </p>
            <p>
                Kucing seperti anjing termasuk hewan penyayang. Riset yang dilakukan scientificamerican mengungkapkan kucing mempelajari sendiri cara mengeluarkan bunyi meow yang bisa menarik perhatian manusia, Berikut Macam-Macam Kucing:
            </p>
            <h2>Jenis-Jenis Kucing:</h2>
           <ul>
             <ol>1. Kucing Garong</ol>
             <ol>2. Kucing Mainan</ol>
             <ol>3. Kucing Tuan Muda</ol>
             <ol>4. Kucing Nakal</ol>
             <ol>5. Dll.</ol>
           </ul>
        </div>
    </div>

    <footer>
        &copy; Aini Aulia Firda-124250003-A
    </footer>
    
</body>
</html>