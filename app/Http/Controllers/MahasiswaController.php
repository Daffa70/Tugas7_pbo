<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index(){
        $mahasiswa = Mahasiswa::all();

        return view('mahasiswa.index', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function create(){
        return view('mahasiswa.create');
    }

    public function edit($id){
        $mahasiswa = Mahasiswa::findOrFail($id);

        return view('mahasiswa.edit',[
            'user' => $mahasiswa
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'email' => 'required|email',
            'foto' => 'required|image'
        ]);

        $imagename = time().'.'.$request->foto->extension();
        $request->foto->move(public_path('images'), $imagename);

        Mahasiswa::create([
            'nim' => $request->nim,
            'namamhs' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'email' => $request->email,
            'foto' => $imagename
        ]);

        return redirect()->route('index')->with('success', 'Mahasiswa berhasil ditambah');

    }


    public function update(Request $request, $id){
        $request->validate([
            'nim' => 'required',
            'nama' => 'required',
            'jk' => 'required',
            'alamat' => 'required',
            'kota' => 'required',
            'email' => 'required|email',
        ]);

        if ($request->foto != null){
            $imagename = time().'.'.$request->foto->extension();
            $request->foto->move(public_path('images'), $imagename);
        }
        else{
            $imagename = $request->foto_hidden;
        }

        Mahasiswa::where('id', $id)->update([
            'nim' => $request->nim,
            'namamhs' => $request->nama,
            'jk' => $request->jk,
            'alamat' => $request->alamat,
            'kota' => $request->kota,
            'email' => $request->email,
            'foto' => $imagename
        ]);

        return redirect()->route('index')->with('success', 'Mahasiswa berhasil diedit');
    }

    public function destroy($id){
        $mahasiswa = Mahasiswa::find($id);

        $mahasiswa->delete();

        return redirect()->route('index')->with('success', 'Mahasiswa berhasil didelete');
    }
}
