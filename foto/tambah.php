<?php


include 'config.php';

$user_id = $_SESSION['user']['UserID'];


$query_album = mysqli_query($koneksi, "SELECT * FROM album WHERE UserID = '$user_id'")or die(mysqli_error());

?>

<section class="py-5 container">
    

    <div class="row py-lg-5">
      
    <div class="col-lg-12 col-md-8 mx-auto">
          
      <h4>Tambah Foto Gallery</h4>
    
      <hr>

      <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="" class="form-label">Foto</label>
                    <input type="file" name="" id="" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Judul Foto</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Deskripsi Foto</label>
                    <input type="text" name="" id="" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Album</label>
                    <?php

                        $cek_album = $query_album->num_rows;

                        if($cek_album > 0) {

                    ?>
                        <select name="AlbumID" id="" class="form-control">
                         <?php
                                while($album = $query_album->fetch_assoc()){

                                
                         ?>
                            <option value="<?= $album['AlbumID']; ?>"><?= $album['NamaAlbum']; ?></option>
                        
                            <?php } ?>
                        </select>
                    <?php
                    }else{

                    
                    ?>
                    <div class="col-6 p-3 bg-light text-center">
                        <a href="?halaman=tambahalbum" class="btn btn-primary">+ Tambah Album</a>
                    </div>

                    <?php } ?>
                    
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
      </div>
        
      </div>
    </div>
  </section>