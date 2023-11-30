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
                <li><a href="shop.php">shop</a></li>
                <li><a href="../auth/logout.php">(<?= $_SESSION['uname'] ?>) logout</a></li>
            </li>
            </ul>
        </nav>

        <div class="image-peta">
            <img src="../assets/image/MapPt2.jpg" alt="">
        </div>

        <div class="button-gym-container">
            <div class="judul-lokasi-gym">
                pilih tempat gym anda dibawah ini :
            </div>
            <div class="button-gym">
                <div class="place">
                    <div class="place-gym">
                        <p>Jln. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate pariatur sit consectetur culpa id minus nulla assumenda? </p>
                    </div>
                    <div class="gym-bottom">
                        <a href="gym.php"><button>Pilih Gym</button></a>
                    </div>
                </div>

                <div class="place">
                    <div class="place-gym">
                        <p>Jln. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate pariatur sit consectetur culpa id minus nulla assumenda? </p>
                    </div>
                    <div class="gym-bottom">
                        <a href="gym.php"><button>Pilih Gym</button></a>
                    </div>
                </div>

                <div class="place">
                    <div class="place-gym">
                        <p>Jln. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate pariatur sit consectetur culpa id minus nulla assumenda? </p>
                    </div>
                    <div class="gym-bottom">
                        <a href="gym.php"><button>Pilih Gym</button></a>
                    </div>
                </div>
                
                <div class="place">
                    <div class="place-gym">
                        <p>Jln. Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate pariatur sit consectetur culpa id minus nulla assumenda? </p>
                    </div>
                    <div class="gym-bottom">
                        <a href="gym.php"><button>Pilih Gym</button></a>
                    </div>
                </div>
               
            </div>
        </div>
    </div>
</body>
</html>