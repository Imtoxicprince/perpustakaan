<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Input Siswa </title>
    <style>
        div {
            background-color: #dc3545;
            padding-top: 20px;
            padding-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="p-3 text-white">
    <div class = "container">
    <h3  class = "text-center"> Data Siswa</h3>  
    <form action="proses_tambah_siswa.php" method="post">
        Nama Siswa :
        <br><input type="text" name="nama_siswa" value="" class="form-control" placeholder="Masukkan Nama " required></br>
        Tanggal Lahir : 
        <br><input type="date" name="tanggal_lahir" value="" class="form-control" placeholder="Masukkan Tanggal Lahir" required></br>
        Jenis Kelamin : 
        <br><select name="gender" class="form-select" aria-label="Default select example" >
            <option selected>Pilih Jenis Kelamin</option>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select></br>
        Alamat : 
        <br><textarea name="alamat" class="form-control" rows="4" placeholder="Masukkan Alamat" required></textarea></br>
        Kelas :
        <br><select name="id_kelas" class="form-select" placeholder="Tambahkan Kelas" required> 
            <option selected>Masukkan Kelas</option>
            <?php 
            include "koneksi.php";
                $qry_kelas=mysqli_query($koneksi,"select * from kelas");
                    while($data_kelas=mysqli_fetch_array($qry_kelas)){
                    echo '<option value="'.$data_kelas['id_kelas'].'">'.$data_kelas['nama_kelas'].' '.$data_kelas['kelompok'].'</option>';    
            }
            ?>
        </select></br>
        Username : 
        <br><input type="text" name="username" value="" class="form-control" placeholder="Masukkan Username" required></br>
        Password : 
        <br><input type="password" name="password" value="" class="form-control" placeholder="Masukkan Password" required></br>
        <input type="submit" name="simpan" value="Tambahkan" class="btn btn-primary">
    </form>
    </div>
    </div>
            
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>