<?php

  include 'config.php';

 $user_id = $_SESSION['user']['UserID'];

  $query_album = mysqli_query($koneksi, "SELECT * FROM album WHERE UserID = '$user_id'")or die(mysqli_query());


?>

<section class="py-5 container">
    

    <div class="row py-lg-5">
      
    <div class="col-lg-12 col-md-8 mx-auto">
          
      <h4>Daftar Album</h4>
      
    <a href="?halaman=tambahalbum" class="btn btn-primary">+ Tambah Album</a>
    <a href="?halaman=foto" class="btn btn-secondary">Foto</a>

      <hr>

        <?php

            if($query_album->num_rows > 0){

        ?>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nama Album</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Tanggal Dibuat</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                </tr>
                
            </tbody>
            </table>

            <?php 
                }else{

                
            ?>

            <h4 class="text-center">Album Kosong</h4>
            <?php } ?>
      </div>
    </div>
  </section>