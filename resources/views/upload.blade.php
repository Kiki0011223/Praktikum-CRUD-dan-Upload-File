<!DOCTYPE html>
<html>
<head>
<title>Upload File</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<div class="row">
<div class="container">
<h2 class="text-center my-5">Upload File</h2>
<div class="col-lg-8 mx-auto my-5">
@if(count($errors) > 0)
<div class="alert alert-danger">
@foreach ($errors->all() as $error) I
{{ $error }} <br/>
@endforeach
</div>
@endif

<form action="/upload/proses" method="POST" enctype="multipart/form-data">
{{csrf_field()}}
<div class="form-group">
<b>File Gambar</b><br>
<input type="file" name="file">
</div>

<div class="form-group">
<b>Keterangan</b>
<textarea class="form-control" name="keterangan"></textarea>
</div>
<input type="submit" value="Upload" class="btn btn-primary">
</form>
</div>
</div>
</div>
</body>
</html>