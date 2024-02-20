<?php


include 'config.php';

$user_id = $_SESSION['user']['UserID'];

?>

<section class="py-5 container">
    

    <div class="row py-lg-5">
      
    <div class="col-lg-12 col-md-8 mx-auto">
          
      <h4>Tambah Album</h4>
    
      <hr>

      <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <div class="form-group mt-4">
                    <label for="" class="form-label">Judul Album</label>
                    <input type="text" name="NamaAlbum" id="" class="form-control">
                </div>
                <div class="form-group mt-4">
                    <label for="" class="form-label">Deskripsi Album</label>
                    <input type="text" name="Deskripsi" id="" class="form-control">
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
            </form>
        </div>
      </div>
        
      </div>
    </div>
  </section>

<?php

if(isset($_POST['submit'])){
    $tanggal = date('d-m-y');
    $nama_album = $_POST['NamaAlbum'];
    $deskripsi = $_POST['Deksripsi'];
    
    $query = mysqli_query($koneksi, "INSERT INTO album(NamaAlbum, Deskripsi, TanggalDibuat) VALUES('$nama_album', '$deskripsi', '$tanggal')")or die(mysqli_error());

    if($query){
        echo "<script>alert('Berhasil tambah data'); </script>";
        echo "<script> document.location.href='index.php?halaman=album';</script>";
    } else {
        echo "<script>alert('Gagal tambah data'); </script>";
        echo "<script> document.location.href='index.php?halaman=tambahalbum';</script>";
    }
}


?>