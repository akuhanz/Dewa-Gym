<?php
    session_start();
    include '../auth/koneksi.php';
    if(!isset($_SESSION['status_login'])) {
        echo "<script>window.location = '../auth/login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    }
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

    <title>Latihan</title>
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
                <li><a href="lokasi.php">kembali</a></li>
                <li><a href="../auth/logout.php">(<?= $_SESSION['uname'] ?>) logout</a></li>
            </li>
            </ul>
            
        </nav>
        <!-- image silder -->
        <div class="slider-wrapper">
            <div class="slider">
                <img src="../assets/image/slide1.jpg" alt="" id="slide-1">
                <img src="../assets/image/slide2.jpg" alt="" id="slide-2">
                <img src="../assets/image/slide3.jpg" alt="" id="slide-3">
            </div>
            <div class="slider-nav">
                <a href="#slide-1"></a>
                <a href="#slide-2"></a>
                <a href="#slide-3"></a>
            </div>
        </div>

        <!-- paket gym -->
        <div class="container-paket">
            <div class="card-paket">
            <?php 
                $no = 1;

                $where = " WHERE 1=1";
                if(isset($_GET['key'])) {
                    $where .= " AND namapaket LIKE '%".$_GET['key']."%' ";
                }

                $paket = mysqli_query($conn, "SELECT * FROM tb_paket $where ORDER BY id DESC");
                if(mysqli_num_rows($paket) > 0){
                    while($p = mysqli_fetch_array($paket)) {
                
                ?>
                <div class="paket">
                    <img src="../assets/image/paket/<?= $p['gambar'] ?>" alt="">
                    <h1><?= $p['namapaket'] ?></h1>
                    <p><?= $p['deskripsipaket'] ?></p>
                </div>
                <div class="button-paket">
                        <a href="gym-paket.php?id=<?= $p['id'] ?>"><button>Pilih paket</button></a>
                    </div>
                <?php }}?>
            </div>
        </div>
        

    </div>
</body>
</html>