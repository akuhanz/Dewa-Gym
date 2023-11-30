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
                <li><a href="lokasi.php">Gym</a></li>
                <li><a href="shop.php">shop</a></li>
                <li><a href="../auth/logout.php">(<?= $_SESSION['uname'] ?>) logout</a></li>
            </li>
            </ul>
            
        </nav>
        <!-- gambar halaman dashoard -->
            <div class="image">
                <img src="../assets/image/background.jpg" alt="">
                    <div class="logo__text">
                     <h1 class="shadow">DASHBOARD</h1>
                     <h1 class="utama">DASHBOARD</h1>
                </div>
            </div>

        <div class="perkenalan">
            <div class="bag__text">
                <h1>Kenalan dengan aplikasi
                    ini yuk!!
                </h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            <div class="bag__img">
                <img src="../assets/image/Bag__img.jpg" alt="">
            </div>
        </div>

        <!-- bagian footer website -->
        <footer class="footer">
            <div class="container">
                <div class="footer-content">
                    <div class="footer-section about">
                        <h2>Tentang Kami</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam vehicula lectus quis ex ultrices, non scelerisque quam commodo.</p>
                    </div>
                    <div class="footer-section links">
                        <h2>Tautan Berguna</h2>
                        <ul>
                            <li><a href="#">Beranda</a></li>
                            <li><a href="#">Kontak</a></li>
                        </ul>
                    </div>
                    <div class="footer-section contact">
                        <h2>Hubungi Kami</h2>
                        <p><i class="fas fa-envelope"></i> email@example.com</p>
                        <p><i class="fas fa-phone"></i> +1234567890</p>
                        <p><i class="fas fa-map-marker-alt"></i> Alalak, Banjarmasin, Indonesia</p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2023 SMKN 2 BANJARMASIN. Super Dizzy
            </div>
        </footer>

    </div>
</body>
</html>