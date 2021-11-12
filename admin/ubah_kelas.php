<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Kelas</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <style>
        body{
            background-color : #dc3545;
        }
        div {
            
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <?php 
        include "koneksi.php";
        $qry_get_kelas = mysqli_query($koneksi, "SELECT * FROM kelas WHERE id_kelas = '".$_GET['id_kelas']."'");
        $dt_kelas = mysqli_fetch_array($qry_get_kelas);
    ?>
    <div class="p-3 text-white">
    <div class = "container">
    <h3  class = "text-center"> Update Kelas</h3>  
    <div class = "container">
        <form action="proses_ubah_kelas.php" method="POST">
            <input type="hidden" name="id_kelas" value="<?= $dt_kelas['id_kelas'] ?>">
            <div class="">
                <label class="form-label">Kelas : </label>
                <input type="text" name="nama_kelas" value="<?= $dt_kelas['nama_kelas'] ?>" class="form-control" required> 
            </div>
            <div class="mb -3">
                <label class="form-label">Jurusan : </label>
                <input type="text" name="kelompok" value="<?= $dt_kelas['kelompok'] ?>" class="form-control" required>
            </div>
            <div class>
                <input type="submit" name="simpan" value="Update " class="btn btn-primary">
            </div>
        </form>
        </div>
    </div>    
</body>
</html>