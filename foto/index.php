<?php

  include 'config.php';

 $user_id = $_SESSION['user']['UserID'];

  $query_foto = mysqli_query($koneksi, "SELECT * FROM foto WHERE UserID = '$user_id'")or die(mysqli_query());


?>

<section class="py-5 container">
    
<!-- <div class="col-lg-6 col-md-8 mx-auto d-flex justify-content-center">
    <a href="#" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <strong>Album</strong>
      </a>  
    </div> -->

    <div class="row py-lg-5">
      
    <div class="col-lg-12 col-md-8 mx-auto">
          
      <h4>Daftar Foto Gallery</h4>
      
    <a href="?halaman=tambahfoto" class="btn btn-primary">+ Tambah Foto</a>
    <a href="?halaman=album" class="btn btn-secondary">Album</a>

      <hr>

        <?php 
            if($query_foto->num_rows > 0) {
        ?>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Foto</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Judul</th>
                <th scope="col">Deskripsi</th>
                <th scope="col">Album</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
              <?php

                $no = 1;
    
                
                while($foto = $query_foto->fetch_assoc()){
              ?>
                <tr>
                <th scope="row"><?= $no++; ?></th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                <td>@mdo</td>
                </tr>

               <?php } ?> 
            </tbody>
            </table>

            <?php
            }else{

            
            ?>

            <h4 class="text-center">Foto Galeri Kosong</h4>
            <?php } ?>
      </div>
    </div>
  </section>