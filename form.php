<?php include "koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran</title>
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

    <div class="form-title">
     <h2 align="center">Pendaftaran Komunitas Kucing</h2>
    </div>
    <div class="form-container">
        <div class="card-form">
            <form action="proses.php" method="POST">
                <table>
                    <tr>
                        <td class="form">Nama Lengkap</td>
                        <td> <input type="text" name="nam" required></td>
                    </tr>
                    <tr>
                        <td class="form">Tanggal Lahir</td>
                        <td> <input type="date" name="tanggal" required></td>
                    </tr>
                    <tr>
                        <td class="form">Kelompok Umur</td>
                        <td>
                        <select name="umur">
                            <option>Anak-Anak</option>
                            <option>Remaja</option>
                            <option>Dewasa</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td class="form">Jenis Kelamin</td>
                        <td>
                            <label>
                                <input type="radio" name="jenis_kelamin" value="L"> Laki-laki
                            </label>
                            <label>
                                <input type="radio" name="jenis_kelamin" value="P"> Perempuan
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="form">Hobi</td>
                        <td>
                            <label>
                                <input type="checkbox" name="hobi[]" value="Game"> Main Game <br>
                            </label>
                            <label>
                                <input type="checkbox" name="hobi[]" value="Ngoding"> Ngoding <br>
                            </label>
                            <label>
                                <input type="checkbox" name="hobi[]" value="Kucing"> Bermain dengan Kucing <br>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td class="form">Asal Daerah</td>
                        <td> <input type="text" name="asal"></td>
                    </tr>
                    <tr>
                        <td class="form">Alasan Ingin Bergabung</td>
                        <td> <textarea name="alasan"></textarea></td>
                    </tr>
                </table>

             <button type="submit">Kirim Pendaftaran</button>
            </form>
        </div>
    </div>
    
    <footer>
        &copy; Aini Aulia Firda-124250003-A
    </footer>
    
</body>
</html>