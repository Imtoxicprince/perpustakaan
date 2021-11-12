<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Data Siswa</title>
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
                <h1 class = "text-center"> DATA SISWA</h1>
                <form method="POST" action="tampil_siswa.php" class="d-flex">
                    <input class="form-control me-2" type="search" name="cari" placeholder="Masukkan Nama" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
        
    
        
        <table class="table table-light table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAMA SISWA</th>
                <th>TANGGAL LAHIR</th>
                <th>ALAMAT</th>
                <th>JENIS KELAMIN</th>
                <th>USERNAME</th>
                <th>KELAS</th>
                <th>AKSI</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            include "koneksi.php";
            if (isset($_POST["cari"])) {
                //jika ada keyword pencarian
                $cari = $_POST["cari"];
                $query_siswa = mysqli_query($koneksi,"select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas where siswa.id_siswa ='$cari' or siswa.nama_siswa  like '%$cari%'");
            } else {
                //jika tidak ada keyword pencarian
                $query_siswa = mysqli_query($koneksi, "select * from siswa join kelas on siswa.id_kelas=kelas.id_kelas");
            }
        while ($data_siswa = mysqli_fetch_array($query_siswa)) {?>
            <tr>
                <td><?=$data_siswa['id_siswa']?></td>
                <td><?=$data_siswa['nama_siswa']?></td>
                <td><?=$data_siswa['tanggal_lahir']?></td>
                <td><?=$data_siswa['alamat']?></td>
                <td><?=$data_siswa['gender']?></td> 
                <td><?=$data_siswa['username']?></td> 
                <td><?=$data_siswa['nama_kelas']?></td>

                <td><a href="ubah_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" class="btn btn-success">Update</a> | <a href="hapus_siswa.php?id_siswa=<?=$data_siswa['id_siswa']?>" onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">Delete</a></td>

            </tr>
            <?php 
            }
            ?>
        </tbody>
    </table>
    <a href="tambah_siswa.php" class="btn btn-success">Tambah Siswa</a>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>
