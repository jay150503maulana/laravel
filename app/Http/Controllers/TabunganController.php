<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class TabunganController extends Controller
{
    public function index(){
        $tabungan = Tabungan::all();
        return $tabungan;
    }
    public function show($id){
        $tabungan = Tabungan::find($id);
        return $tabungan;
    }
    public function store($nis,$nama,$kelas,$jml){
            $tabungan = new Tabungan();
            $tabungan -> nis = $nis;
            $tabungan -> nama = $nama;
            $tabungan -> kelas = $kelas;
            $tabungan -> jml = $jml;
            $tabungan -> save();
            return $tabungan;
    }
    public function update($id,$a,$b,$c,$d){
        $tabungan =  Tabungan::find($id);
            $tabungan -> nis = $a;
            $tabungan -> nama = $b;
            $tabungan -> kelas = $c;
            $tabungan -> jml = $d;
            $tabungan -> save();
            return $tabungan;
    }
    public function hapus($id){
        $post = Tabungan::find($id);
        $post -> delete();
    }
    //
}
