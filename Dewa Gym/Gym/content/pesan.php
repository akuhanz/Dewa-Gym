<?php
session_start();
    include '../auth/koneksi.php';
    if(!isset($_SESSION['status_login'])) {
        echo "<script>window.location = '../auth/login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    }
    $shop   = mysqli_query($conn, "SELECT * FROM tb_produk_gym WHERE id = '".$_GET['id']."' ");

    if(mysqli_num_rows($shop) == 0 ) {
        echo "<script>window.location='shop.php'</script>";
    }
    $s  = mysqli_fetch_object($shop);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Font google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Merriweather:ital@1&family=Poppins:wght@100&family=Quicksand:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- link fontawesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
    <title>Cari Gym</title>
    
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <div class="fcontainer">
        <nav class="nav"> 
            <!-- logo -->
            <div class="nav__logo">
                <img src="../assets/image/Yippee!.jpeg" alt="">
            </div>
            <!-- pilihan di navbar -->
            <ul class="nav__item">
                <li><a href="index.php">about</a></li>
                <li><a href="shop.php">Kembali</a></li>
                <li><a href="../auth/logout.php">(<?= $_SESSION['uname'] ?>) logout</a></li>
            </ul>
        </nav>
                <div class="card__detail">
                    <div class="detail__img">
                        <img src="../assets/image/<?= $s->gambar ?>" alt="produk">
                    </div>
                    <div class="detail__produk">
                        <h1><?= $s->namaproduk ?></h1>
                        <hr>
                        <h5><?= $s->deskripsi ?></h5>
                        <hr>
                        <p>
                        <strong>Stok :</strong> <?= $s->stok ?> <br>
                        <strong>Harga :</strong> Rp. <?= $s->harga ?>
                        </p>
                        <hr>
                        <label for="">Jumlah pesanan</label>
                        <input type="number" name="jumlah_pesanan">
                        <div class="button__pesan">
                            <button type="submit">Bayar sekarang</button>
                        </div>
                    </div>
                    
                </div>
        </div>
    
    </body>
    </html>