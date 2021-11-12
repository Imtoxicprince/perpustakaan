<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">  
    <title>Input Kelas </title>
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
    <div class="p-3 text-white">
    <div class = "container">
    <h3  class = "text-center"> Data Kelas</h3>  
    <div class = "container">
        <form  method="POST" action="proses_tambah_kelas.php">
            <div class=>
                <label for="nama_kelas" class="form-label">Kelas :</label>
                <input type="text" class="form-control" name="nama_kelas" placeholder="Masukkan Kelas" required>
            </div>
            <div class="mb-3">
                <label for="kelompok" class="form-label">Jurusan :</label>
                <input type="text" class="form-control" name="kelompok" placeholder="Masukkan Jurusan"required> 
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan</button>
        </form>
    </div>
       
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>