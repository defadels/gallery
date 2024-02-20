<?php 

    include 'config.php';

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    <title>Register | Galeri Album</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/album/">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }
    </style>

    
  </head>
  <body>
    

<main>

<section class="py-5 container">
    
<div class="col-lg-6 col-md-8 mx-auto d-flex justify-content-center">
    <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>  
    </div>

    <div class="row py-lg-5">
      
    <div class="col-lg-6 col-md-8 mx-auto">
          
      <h4>Daftar Akun</h4>
        <hr>
        <form action="" method="post">
            <div class="form-group">
                <label for="" class="form-label">Nama Lengkap</label>
                <input placeholder="Masukkan nama lengkap Anda" required type="text" name="NamaLengkap" id="" autocomplete class="form-control">
            </div>
            <div class="form-group mt-4">
                <label for="" class="form-label">Alamat</label>
                <textarea name="Alamat" id="" placeholder="Masukkan alamat lengkap" autocomplete class="form-control"></textarea>
            </div>
            <div class="form-group mt-4">
                <label for="" class="form-label">Email</label>
                <input placeholder="Masukkan email Anda" required type="email" name="Email" autocomplete id="" class="form-control">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Username</label>
                <input placeholder="Masukkan username Anda" required type="text" name="Username" autocomplete id="" class="form-control">
            </div>
            <div class="form-group mt-4">
                <label for="" class="form-label">Password</label>
                <input placeholder="Masukkan password Anda" required type="password" name="Password" id="" class="form-control">
            </div>
            <div class="form-group mt-4">     
                <button type="submit" name="submit" class="btn btn-primary">Daftar</button>
                <a href="login.php" class="btn btn-link">Sudah Punya Akun</a>
            </div>
        </form>    
      </div>
    </div>
  </section>

</main>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      
  </body>
</html>


<?php

      if(isset($_POST['submit'])) {

        $nama_lengkap = $_POST['NamaLengkap'];
        $alamat = $_POST['Alamat'];
        $username = $_POST['Username'];
        $email = $_POST['Email'];
        $password = $_POST['Password'];

        $query = mysqli_query($koneksi, "INSERT INTO user(Username, Password, Email, NamaLengkap, Alamat)
                                        VALUES('$username', '$password', '$email', '$nama_lengkap', '$alamat')")or die(mysqli_error());

        if($query){
            echo "<script>alert('Berhasil daftar akun'); </script>";
            echo "<script> document.location.href='login.php';</script>";
        } else {
            echo "<script>alert('Gagal tambah akun, coba lagi'); </script>";
            echo "<script> document.location.href='register.php';</script>";
        }
    }


?>