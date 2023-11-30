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
                <li><a href="index.php">About</a></li>
                <li><a href="lokasi.php">Gym</a></li>
                <li><a href="../auth/logout.php">(<?= $_SESSION['uname'] ?>) Logout</a></li>
               
            </ul>
        </nav>
        
        <div class="card__container">
            <div class="card__main">
                <?php 
                $no = 1;

                $where = " WHERE 1=1";
                if(isset($_GET['key'])) {
                    $where .= " AND namaproduk LIKE '%".$_GET['key']."%' ";
                }

                $shop = mysqli_query($conn, "SELECT * FROM tb_produk_gym $where ORDER BY id DESC");
                if(mysqli_num_rows($shop) > 0){
                    while($s = mysqli_fetch_array($shop)) {
                
                ?>
                <div class="card__produk">
                    <img src="../assets/image/<?= $s['gambar'] ?>" alt="produk">
                    <h1><?= $s['namaproduk'] ?></h1>
                    <p>
                    <strong>Stok :</strong> <?= $s['deskripsi'] ?> <br><br>
                    <strong>Harga :</strong> Rp. <?= $s['harga'] ?>
                    </p>
                    <a href="pesan.php?id=<?= $s['id'] ?>"><button >pesan sekarang</button></a>
                </div>
                <?php }}?>
            </div>
        </div>
       
    </div>
    
</body>
</html>