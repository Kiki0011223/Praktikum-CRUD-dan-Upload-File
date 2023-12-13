<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
class Controller1 extends Controller
{

    public function create()
    {
        return view('create');
    }

    public function update($nim)
    {
        if($data=Mahasiswa::find($nim)) {
            return view('update',['data'=>$data]);
        } else return redirect('/read');
    }

    public function edit(Request $request)
    {
        if($data=Mahasiswa::find($request->nim)) {
            $data->nama=@$request->nama;
            $data->umur=@$request->umur;
            $data->alamat=@$request->alamat;
            $data->kota=@$request->kota;
            $data->kelas=@$request->kelas;
            $data->jurusan=@$request->jurusan;
            $data->updated_at=now('Asia/Jakarta');
            $data->save();
            return redirect('/read')->with('pesan', 'data dengan NIM : '.$request->nim.' berhasil diupdate');
    } else {
        return redirect('/read')->with('pesan', 'data tidak ditemukan/gagal diupdate');
    }

    }

    public function save (Request $request)
    {
        $aturan =[
            'nim' => 'required|regex:/^G.\d{3}.\d{2}.\d{4}$/|unique:mahasiswa,nim',
            'nama' => 'required|string|max:25',
            'umur' => 'required|integer|between:1,100',
            'alamat' => 'required|min:6',
        
        ];

        $pesan =[
            'nim.regex' => 'Harap isi nim anda dengan benar',
            'nama.max' => 'Nama anda terlalu panjang',
            'umur.integer' => 'Gunakan angka untuk mengisi umur',
            'umur.between' => 'Melihat umur yang anda inputkan , sepertinya anda bukan manusia',
            'alamat.min' => 'Harap isi alamat anda dengan benar'
        ];

        $validatedData = $request->validate($aturan, $pesan);

        $model = new Mahasiswa ();
        $model::insert([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'created_at' => $request->created_at=now('Asia/Jakarta'),
        ]);
        
        return view('view',['data'=>$request->all()]);
    }
    
    public function read()
    {
        $model = new Mahasiswa ();
        $dataAll=$model->all();
        return view('read', ['dataAll'=>$dataAll]);
    }

    public function delete($nim)
    {
        if ($data = Mahasiswa::find($nim))
        {
            $data->delete();
        } else {
            return redirect('/read')->with('pesan', 'Data NIM : '.@$nim.' tidak ditemukan');
        }   
        return redirect('/read')->with('pesan', 'Data NIM : '.@$nim.' Berhasil dihapus');
    }

    public function tampilkan (Request $request)
    {
        $model = new Mahasiswa ();
        $model::insert(['nim' =>@$request->nim, 'nama' =>@$request->nama, 'umur' =>@$request->umur, 
        'alamat' =>@$request->alamat, 'kota' =>@$request->kota, 'kelas' =>@$request->kelas,
        'jurusan' =>@$request->jurusan,'created_at'=>@$request->created_at]);

        $dataAll=$model->all();
        return view ('tampil2', ['data'=>$request->all(), 'dataAll'=>@$dataAll ] );
    }

    public function logout(){
        return view('logout');
    }
}