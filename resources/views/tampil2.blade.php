<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Praktikum2</title>
</head>
<body>
    <div class="container mt-4"><hr>
        <Center><h2>DATA MAHASISWA</h2></Center><hr>
        <table class="table table-dark table-hover">
        <tr>
            <th>No</th>
            <th>Nim</th>
            <th>Nama</th>
            <th>Alamat</th>
        </tr>
        <tr>
            <th>1</th>
            <td>{{ $data['nim'] }}</td>
            <td>{{ $data['nama'] }}</td>
            <td>{{ $data['alamat'] }}</td>
        </tr>
        </table>
    </div>
    <br><hr>
    <div class="container">
        <h2 class="text-center mb-3">Tabel Mahasiswa</h2>

        <table class="table table-primary table-striped">
            <div class="row">
                <div class="col lg-3">

                    <thead>
                        <tr>
                            <th scope="col">NIM</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">ALAMAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mahasiswa as $mhs)
                        <tr>
                            <td>{{ $mhs->nim }}</td>
                            <td>{{ $mhs->nama }}</td>
                            <td>{{ $mhs->alamat }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </div>
            </div>
            
        </table>
        <form action="{{ url('tampil1') }}" method="get">
            <div class="row">
                <button type="submit" class="btn btn-primary " style="width: 100px">Back</button>
            </div>
        </form>
    </div>
    <?php

    ?>
</body>
</html>