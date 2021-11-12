<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
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
                <h1 class = "text-center"> DATA KELAS</h1>
                <form method="POST" action="tampil_siswa.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Masukkan Kelas" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            

    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">KELAS</th>
      <th scope="col">JURUSAN</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "koneksi.php";
    if (isset($_POST["cari"])){
        //jika ada keyword pencarian
        $cari = $_POST['cari'];
        $query_kelas = mysqli_query($koneksi, "select * from kelas where id_kelas like '%$cari%' or nama_kelas like '%$cari%'");
    } else {
        //jika tidak ada keyword pencarian
        $query_kelas = mysqli_query($koneksi, "select * from kelas");
    }
    while ($data_kelas = mysqli_fetch_array($query_kelas)){?>
        <tr> 
            <td><?php echo $data_kelas["id_kelas"];?></td>
            <td><?php echo $data_kelas["nama_kelas"];?></td>
            <td><?php echo $data_kelas["kelompok"];?></td>
            <td>
              <a href="ubah_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" class="btn btn-success">Update</a> 
              <a href="hapus_kelas.php?id_kelas=<?=$data_kelas['id_kelas']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>
        </tr>
    <?php
    }
    ?>
    </tbody>
      </table>
            <a href="tambah_kelas.php" class="btn btn-success">Tambah Kelas</a>
        
            </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>