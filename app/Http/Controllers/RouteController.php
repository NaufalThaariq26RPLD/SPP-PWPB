<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\Petugas;
use App\Models\Kelas;
use App\Models\Spp;

class RouteController extends Controller
{
    public function index(){
        $data = Siswa::all();
        // dd($data);
        return view('dashboard', compact('data'));
    }
    public function tambahsiswa(){
        return view('layout.tambahsiswa');
    }
    public function insertsiswa(Request $request){
        // dd($request->all());
        $data = Siswa::create($request->all());
        return redirect()->route('siswa');
    }
    public function tampilsiswa($id){
        $data = Siswa::find($id);
        return view('layout.tampilsiswa', compact('data'));
    }
    public function updatesiswa(Request $request, $id){
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect()->route('siswa');
    }
    public function delete($id){
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa');
    }

    public function petugas(){
        $data = Petugas::all();
        return view('TablePetugas', compact('data'));
    }
    public function tambahpetugas(){
        return view('layout.tambahpetugas');
    }
    public function insertpetugas(Request $request){
        // dd($request->all());
        $data = Petugas::create($request->all());
        return redirect()->route('petugas');
    }
    public function tampilpetugas($id){
        $data = Petugas::find($id);
        return view('layout.tampilpetugas', compact('data'));
    }
    public function updatepetugas(Request $request, $id){
        $data = Petugas::find($id);
        $data->update($request->all());
        return redirect()->route('petugas');
    }
    public function deletepetugas($id){
        $data = Petugas::find($id);
        $data->delete();
        return redirect()->route('petugas');
    }

    public function kelas(){
        $data = Kelas::all();
        return view('TableKelas', compact('data'));
    }
    public function tambahkelas(){
        return view('layout.tambahkelas');
    }
    public function insertkelas(Request $request){
        // dd($request->all());
        $data = Kelas::create($request->all());
        return redirect()->route('kelas');
    }
    public function tampilkelas($id){
        $data = Kelas::find($id);
        return view('layout.tampilkelas', compact('data'));
    }
    public function updatekelas(Request $request, $id){
        $data = Kelas::find($id);
        $data->update($request->all());
        return redirect()->route('kelas');
    }
    public function deletekelas($id){
        $data = Kelas::find($id);
        $data->delete();
        return redirect()->route('kelas');
    }


    public function spp(){
        $data = Spp::all();
        return view('TableSpp', compact('data'));
    }
    public function tambahspp(){
        return view('layout.tambahspp');
    }
    public function insertspp(Request $request){
        // dd($request->all());
        $data = Spp::create($request->all());
        return redirect()->route('spp');
    }
    public function tampilspp($id){
        $data = Spp::find($id);
        return view('layout.tampilspp', compact('data'));
    }
    public function updatespp(Request $request, $id){
        $data = Spp::find($id);
        $data->update($request->all());
        return redirect()->route('spp');
    }
    public function deletespp($id){
        $data = Spp::find($id);
        $data->delete();
        return redirect()->route('spp');
    }

    public function history(){
        return view('TableHistory');
    }
}
