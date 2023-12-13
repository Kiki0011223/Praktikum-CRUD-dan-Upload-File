
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965Dz00rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTElPi6jizo" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-U02eT0CpHqdSJQ6hJty5KVphtPhzWj9W01clHTMGa3JDZwrnQq4sF86dIHNDZOW1" crossorigin="anonymous"></script> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd@p3pXB1rRibZUAYOIIy60rQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> <hr />
<center>
    @if (session('pesan'))
        <div class="alert alert-success">
        {{ session('pesan') }}
        </div>
    @endif

<h2> TABEL MAHASISWA </h2>
<hr/>
<section>
    <table class="table table-striped w-auto text-center">
        <thead class=thead-dark>
            <tr>
                <th>No.</th>
                <th>NIM</th>
                <th>NAMA</th>
                <th>UMUR</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
                <th>KELAS</th>
                <th>JURUSAN</th>
                <th>CREATED AT</th>
                <th>UPDATED AT</th>
                <th>ACTION</th>
            </tr>
        </thead>
<tbody>
<?php
$num=1;
foreach ($dataAll as $datax) {
    if(($num%2)==1) {echo "<tr class='table-info'>";} else echo "<tr>";
        echo "<th scope='row'> $num </th>";
        echo "<td>";
        echo $datax->nim;
        echo "</td>";
        echo "<td>";
        echo $datax->nama;
        echo "</td>";
        echo "<td>";
        echo $datax->umur;
        echo "</td>";
        echo "<td>";
        echo $datax->alamat;
        echo "</td>";
        echo "<td>";
        echo $datax->kota;
        echo "</td>";
        echo "<td>";
        echo $datax->kelas;
        echo "</td>";
        echo "<td>";
        echo $datax->jurusan;
        echo "</td>";
        echo "<td>";
        echo $datax->created_at;
        echo "</td>";
        echo "<td>";
        echo $datax->updated_at;
        echo "</td>";
        echo "<td>";
        echo "<a href=/delete/".$datax->nim." onclick=\"return confirm('Yakin mau dihapus ?');\" class='btn btn-danger'> HAPUS</a>";
        echo "<a href=/update/".$datax->nim." onclick=\"return confirm('Yakin data mau diedit/diupdate ?');\" class='btn btn-success'> UPDATE</a>";
        echo "</td>";
        echo "</tr>";

$num++; }

?>
</tbody>
</table>
</section>
<a href=/create class='btn btn-success'> TAMBAH DATA </a>
</center>
<hr/>