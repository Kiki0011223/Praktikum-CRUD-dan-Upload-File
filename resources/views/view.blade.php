
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q81/X+965Dz00rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRVH+8abtTElPi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-U02eT0CpHqdSJQ6hJty5KVphtPhzWj9W01clHTMG3JDZwrnQq4sF86dIHNDZ0w1" cross origin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd@p3pXB1rRibZUAYOIIy60rQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<center>
<h2> Data Mahasiswa Berhasil disimpan </h2>
<hr/>
    <table class="table table-primary" style='width:50%; table-align:center;'>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>NIM</td>
                <td>{{$data['nim']}}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>NAMA</td>
                <td>{{$data['nama']}}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>UMUR</td>
                <td>{{$data['umur']}}</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>ALAMAT</td>
                <td>{{$data['alamat']}}</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>KOTA</td>
                <td>{{$data['kota']}}</td>
            </tr>
            <tr>
                <th scope="row">6</th>
                <td>KELAS</td>
                <td>{{$data['kelas']}}</td>
            </tr>
            <tr>
                <th scope="row">7</th>
                <td>JURUSAN</td>
                <td>{{$data['jurusan']}}</td>
            </tr>
        </tbody>
    </table> 
</center>
<hr />
<center>
<a href=/read class="btn btn-success"> Tampilkan Data </a>
</center>