<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Input Buku </title>
    <style>
        body {
               background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div>
    <div class="p-3 mb-2 text-white">
    <div class = "container">
    <h3  class = "text-center"> Data Buku</h3>  
    <form action="proses_tambah_buku.php" method="post" enctype="multipart/form-data">
        Nama Buku :
        <br><input type="text" name="nama_buku" value="" class="form-control" placeholder= "Masukkan Judul Buku" required></br>
        Pengarang : 
        <br><input type="text" name="pengarang" value="" class="form-control" placeholder= "Masukkan Nama Pengarang" required></br>
        Deskripsi : 
        <br><textarea name="deskripsi" class="form-control" rows="4"></textarea></br>

        Foto :
        <div class>
        <label for="formFile" class="form-label"></label>
        <input class="form-control" type="file" id="formFile" name="foto">
        </div>


        <br>
        <input type="submit" name="simpan" value="Tambahkan" class="btn btn-primary"></br>

        
  

    </form>
    </div>
    </div>  
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>