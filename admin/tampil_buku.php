<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<body>
  
<nav class=" p-2 navbar navbar-expand-lg navbar-light bg-danger">
        <div class="container-fluid">
          <a class="navbar-brand text-white" href="#">Perpustakaan</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active text-white" aria-current="page" href="tampil_siswa.php">Data Siswa</a>
              <a class="nav-link active text-white" aria-current="page" href="tampil_kelas.php">Data Kelas</a>
              <a class="nav-link active text-white" aria-current="page" href="tampil_buku.php">Data Buku</a>
            
            </div>
          </div>
        </div>
      </nav>

      <br></br>
     <div class="container">
        <div class="card">
            <div class="card-header">
                <h1 class = "text-center"> DATA BUKU</h1>
                <form method="POST" action="tampil_siswa.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Masukkan Judul Buku" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            
        <table class="table table-light table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">JUDUL BUKU</th>
                    <th scope="col">PENGARANG</th>
                    <th scope="col">DESKRIPSI</th>
                    <th scope="col">FOTO</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
            <?php
                 include "koneksi.php";
                 if (isset($_POST["cari"]))
                 //if($_POST['cari'] i= NULL){}
                 {
                     $cari = $_POST["cari"];
                     $query_buku = mysqli_query($koneksi, 
                     "select * from buku where id_buku='$cari'or nama_buku like '%$cari%'or pengarang like '%$cari%'");
                     //jika ada keyword pencarian
                 } else {
                     $query_buku = mysqli_query($koneksi, "select * from buku");
                     //jika tidak ada keyword pencarian
                 }
                 while($data_buku=mysqli_fetch_array($query_buku)){ ?>
                 <tr>
                     <td><?php echo $data_buku["id_buku"];?></td>
                     <td><?php echo $data_buku["nama_buku"];?></td>
                     <td><?php echo $data_buku["pengarang"];?></td>
                     <td><?php echo $data_buku["deskripsi"];?></td>
                     <td><img src="images/<?php echo $data_buku['foto']; ?>" style="width: 120px;float: left;margin-bottom: 5px;"></td>
                        <td class = "actions">
                            <a href="ubah_buku.php?id_buku=<?=$data_buku['id_buku']?>" class="btn btn-success">Update</a> |
                            <a href="hapus_buku.php?id_buku=<?=$data_buku['id_buku']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger" float="right">Delete</a>
                        </td>
                 </tr>
                    <?php
                }
                ?>
               
            </tbody>
        </table>
        <a href="tambah_buku.php" class="btn btn-success">Tambah Buku</a>
        
            </div>
        </br>
        </div>
    </div>
    </div>
    
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>
</html>