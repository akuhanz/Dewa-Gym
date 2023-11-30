<?php
session_start();
    include '../auth/koneksi.php';
    if(!isset($_SESSION['status_login'])) {
        echo "<script>window.location = '../auth/login.php?msg=Harap Login Terlebih Dahulu!'</script>";
    }
    $paket   = mysqli_query($conn, "SELECT * FROM tb_paket WHERE id = '".$_GET['id']."' ");

    if(mysqli_num_rows($paket) == 0 ) {
        echo "<script>window.location='gym.php'</script>";
    }
    $p  = mysqli_fetch_object($paket);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Paket</title>
    
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
                <li><a href="gym.php">kembali</a></li>
                <li><a href="../auth/logout.php">(<?= $_SESSION['uname'] ?>) logout</a></li>
            </ul>
        </nav>
                <div class="card__detail">
                    <div class="detail__img">
                        <img src="../assets/image/paket/<?= $p->gambar ?>" alt="produk">
                    </div>
                    
                    <div class="detail__produk">
                        <form action="" method="post" >
                        <h1><?= $p->namapaket ?></h1>
                        <input type="hidden" name="paket" value="<?= $p->namapaket ?>">
                        <hr>
                         
                        <div class="form-data">
                            <label for="" class="label-input">Nama lengkap anda :</label>
                            <input type="text" name="costumer" class="input-data" required>            
                        </div>

                        <div class="form-data">
                            <label for="" class="label-input">nomor terlpon :</label>
                            <input type="text" name="nomor" class="input-data" required>
                        </div>

                        <hr>
                        <p>
                        <strong>Harga :</strong> Rp. <?= $p->harga ?>
                        <input type="hidden" name="harga" value="<?= $p->harga ?>">
                        </p>
                        <hr>
                        
                        <label for=""> Pilih metode pembayaran</label>
                            <input type="radio" name="payment" id="ovo" value="ovo">
                            <input type="radio" name="payment" id="dana" value="dana">
                            <input type="radio" name="payment" id="alfamart" value="dana">
                            <input type="radio" name="payment" id="qris" value="qris">
                       

                        <div class="category">
                            <label for="ovo" class="ovomethod">
                                <div class="imgName">
                                    <div class="imgcontainer">
                                        <img src="../assets/image/payment/logo-ovo.jpg" alt="">
                                    </div>
                                    <span class="name-payment">OVO</span>
                                </div>
                                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                            </label>

                            <label for="dana" class="danamethod">
                            <div class="imgName">
                                    <div class="imgcontainer">
                                        <img src="../assets/image/payment/logo-dana.jpg" alt="">
                                    </div>
                                    <span class="name-payment">Dana</span>
                                </div>
                                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                            </label>

                            <label for="alfamart" class="alfamartmethod">
                            <div class="imgName">
                                    <div class="imgcontainer">
                                        <img src="../assets/image/payment/logo-alfamart.jpg" alt="">
                                    </div>
                                    <span class="name-payment">Alfamart</span>
                                </div>
                                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                            </label>

                            <label for="qris" class="qrismethod">
                            <div class="imgName">
                                    <div class="imgcontainer">
                                        <img src="../assets/image/payment/logo-qris.jpg" alt="">
                                    </div>
                                    <span class="name-payment">Qris</span>
                                </div>
                                <span class="check"><i class="fa-solid fa-circle-check" style="color: #6064b6;"></i></span>
                            </label> 
                        </div>
                        <div class="button__pesan">
                            <button type="submit" name="submit">Bayar sekarang</button>
                        </div>
                     </form>
                         <?php
                            if (isset($_POST['submit'])) {
                                // Ambil data dari formulir
                                $paket = $_POST['paket'];
                                $nama = $_POST['costumer'];
                                $nomor = $_POST['nomor'];
                                $harga = $_POST['harga'];
                                $metode = $_POST['payment'];

                                    
                                        $simpan = mysqli_query($conn, "INSERT INTO tb_bayar (paket, nama, nomor, harga, payment) VALUES ('$paket', '$nama', '$nomor', '$harga', '$metode')");
                                        if ($simpan) {
                                            echo "<script>alert('Terima kasih telah memesan');</script>";
                                            echo "<script>window.location = 'index.php'</script>";
                                        } 
                                    
                                }
                                
                         ?>
                    </div>
                    
                </div>
        </div>
    
    </body>
    </html>