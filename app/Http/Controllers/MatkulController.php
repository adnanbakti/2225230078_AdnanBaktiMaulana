<?php

namespace App\Http\Controllers;

use App\Models\Matkul;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index(){
        
        $data = Matkul::all();
        return view('datamatkul', compact('data'));
    } 

    public function tambahmatakuliah(){
        return view('tambahdatamatkul');
    }

    public function tambahdata(Request $request){
        // dd($request->all());
        Matkul::create($request->all());
        return redirect()->route('datamatkul')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function tampilkandata($id){

        $data = Matkul::find($id);
        // dd($data);

        return view('tampildata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        
        $data = Matkul::find($id);
        $data->update($request->all());
        return redirect()->route('datamatkul')->with('success', 'Data Berhasil Diubah');
    }

    public function delete($id){

        $data = Matkul::find($id);
        $data->delete();
        return redirect()->route('datamatkul')->with('success', 'Data Berhasil Dihapus');
    }
}
