<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Biodata;
class BiodataController extends Controller
{
    public function index(){
        $bio = Biodata::all();
        return view('latihanbio',compact('bio'));
    }
    public function pass($id){
        $bio = Biodata::FindOrFail($id);
        return view('latihanbio1',compact('bio'));
    }
    //
}
