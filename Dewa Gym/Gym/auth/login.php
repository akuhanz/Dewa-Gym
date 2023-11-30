<?php 
    session_start();
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
    <head>
    <title>Halaman Login</title>

      <!-- Font google -->
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&family=Merriweather:ital@1&family=Poppins:wght@100&family=Quicksand:wght@400;500;600;700&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    </head>


    <body style="background: url('https://i.pinimg.com/564x/bf/a8/31/bfa831f8f47cc5a8df9c5ee9822d022c.jpg') no-repeat; background-position: center; background-size:cover; min-height: 100vh;">
    <main class="py-4">
         
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 ">
                <div class="card-header p-3 mb-2 text-alight rounded" ><h5 class="text-center text-white fw-bold"> Selamat datang di halaman Login</h5></div>
                <div class="p-3 mb-2 text-emphasis-dark rounded " style="background: transparent; backdrop-filter: blur(15px); box-shadow: 0 0 30px rgba(0, 0, 0, .2);">   

                <div class="card-body p-4 mb-2 text-emphasis-dark">
                    <form method="POST" action="">
                    
                    <div class=" row mb-3 ">
                            <label for="email" class="col-md-4 col-form-label text-md-end fw-bold text-white">Emali Address : </label>

                                <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email"  required autocomplete="email" autofocus>

                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end text-white fw-bold">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="pass" required autocomplete="current-password">
                                </div>
                            </div>
                            <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark" name="submit">
                                    Login
                                </button>

                                    <a class="btn text-light btn-link" href="register.php">
                                        haven`t registered yet?
                                    </a>
                            </div>
                        </div>
                    
                    </form>

                
                <?php 
                        
                        if(isset($_POST['submit'])){
                            
                            $email = mysqli_real_escape_string($conn,$_POST['email']);
                            $pass = mysqli_real_escape_string($conn,$_POST['pass']);

                            $cek = mysqli_query($conn, "SELECT * FROM users WHERE email = '".$email."' ");
                            if (mysqli_num_rows($cek) > 0) {

                                $d = mysqli_fetch_object($cek);
                                if(md5($pass) == $d->password){

                                    $_SESSION['status_login']   = true;
                                    $_SESSION['uid']            = $d->id;
                                    $_SESSION['uname']          = $d->name;

                                    echo "<script>window.location = '../content/index.php'</script>";


                                }else{
                                    $pesanpas = "Password salah";
                                    echo "<script type='text/javascript'>alert('$pesanpas');</script>";
                                }

                            }else{
                                $pesanus = "User tidak ditemuka";
                                    echo "<script type='text/javascript'>alert('$pesanus');</script>";
                            }

                        }

                    ?>
                    </div>
                </div>
        </div>
    </div>
</div> 
          </main>
          
    </body>
</html>