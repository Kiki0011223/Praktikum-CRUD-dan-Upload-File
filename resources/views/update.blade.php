
<html>
<head>
    <title>Create Data Mahasiswa</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    @if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="container mt-4">
    @if(session('status'))
        <div class="alert alert-success">
| |         {{ session('status') }}
        </div>
    @endif
    <div class="card">
        <div class="card-header text-center font-weight-bold">
        UPDATE DATA MAHASISWA
        </div>
        <div class="card-body">
        <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('edit')}}"> 
        @csrf
        <div class="form-group">
        NIM
        <input type="text" id="nim" name="nim" class="form-control" required="" value="{{$data->nim}}" readonly> 
        </div>

        <div class="form-group">
        NAMA
        <input type="text" id="nama" name="nama" class="form-control" required="" value="{{$data->nama}}"> 
        </div>

        <div class="form-group">
        UMUR
        <input type="text" id="umur" name="umur" class="form-control" required="" value="{{$data->umur}}"> 
        </div>

        <div class="form-group">
        ALAMAT
        <input type="text" id="alamat" name="alamat" class="form-control" required="" value="{{$data->alamat}}"> 
        </div>

        <div class="form-group">
        KOTA
        <input type="text" id="kota" name="kota" class="form-control" required="" value="{{$data->kota}}"> 
        </div>

        <div class="form-group">
        KELAS
        <input type="text" id="kelas" name="kelas" class="form-control" required="" value="{{$data->kelas}}"> 
        </div>
        
        <div class="form-group">
        JURUSAN
        <input type="text" id="jurusan" name="jurusan" class="form-control" required="" value="{{$data->jurusan}}"> 
        </div>

        <button type="submit" class="btn btn-primary">SUBMIT</button>
        </form>
        </div>
        </div>
    </div>
</body>
</html>