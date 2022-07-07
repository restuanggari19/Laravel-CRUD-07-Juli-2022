<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Program;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function tampilan() 
    {
        $data['antrian'] = Antrian::get();
        return view('Tampilan', $data);  
    }

    public function create()
    {
        return view('tambah');
    }
    
    public function store(Request $request)
    {
        $this->validate($request, [
            'nik' => 'required',
            'nama_pasien' => 'required',
            'jenis_kelamin' => 'required',
            'no_antrian' => 'required',
            'no_handphone' => 'required',
            'alamat' => 'required',
        ]);
    
        $antrian = Antrian::create([
            'nik' => $request->nik,
            'nama_pasien' => $request->pasien,
            'jenis_kelamin' => $request->kelamin,
            'no_antrian' => $request->no_antrian,
            'no_handphone' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);
    
        if ($antrian) {
            return redirect('/Tampilan')->with('success', 'Data berhasil ditambahkan');
        } else {
            return redirect('/Tampilan')->with('error', 'Data gagal ditambahkan');
        }
    }


    public  function edit($nik)
    {
        $data['antrian'] = Antrian::find($nik);

        return view('edit', $data);
    }

    public function update(Request $request)
    {
        $update = Antrian::where('nik', $request->nik)->update([
            'nama_pasien' => $request->pasien,
            'jenis_kelamin' => $request->kelamin,
            'no_antrian' => $request->antrian,
            'no_handphone' => $request->no_hp,
            'alamat' => $request->alamat
        ]);

        if($update) return redirect('/Tampilan');
        else return 'gagal update data';
    }

    }