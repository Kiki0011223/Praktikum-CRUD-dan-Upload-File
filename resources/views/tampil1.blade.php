<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Praktikum</title>
</head>
<body>
    <center><br><hr>
    <h2>DATA MAHASISWA</h2>
</center>
    <hr>
    <form class="container mt-4" method="get" action="{{ url('tampilkan') }}">
        <div class="m-3">
        <label class="form-label">NIM</label>
        <input type="text" id="nim" name="nim" class="form-control" required="">
        </div>
        <div class="m-3">
        <label class="form-label">NAMA</label>
        <input type="text" id="nama" name="nama" class="form-control" required="">
        </div>
        <div class="m-3">
            <label class="form-label">ALAMAT</label>
            <input type="text" id="alamat" name="alamat" class="form-control" required="">
        </div>
        <button type="submit" class="btn btn-primary m-3">Submit</button>
    </form>
</body>
</html>