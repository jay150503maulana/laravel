<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/jay', function () {
    return view('welcome');
});

Route::get('/hhu', function () {
    return view('index');
});


//route basic
Route::get('halo',function(){
    return 'halo ini aplikasi laravel pertama saya'.
    '<br>laravel is magical frame work';
});
//soal 5 buat route

Route::get('profil/nama',function(){
    return 'halo'.
           '<br> Nama saya Ahmad Maulana Fajar';
});

Route::get('profil/alamat',function(){
    return 'halo'.
           '<br> Alamat Saya di Jalan cisirung KP.Bojong Tanjung';
});

Route::get('profil/ttl',function(){
    return 'halo'.
           '<br> TTL saya : Bandung, 15 Mei 2003';
});

Route::get('profil/sekolah',function(){
    return 'halo'.
           '<br> Sekolah Saya Di SMK ASSALAM Bandung';
});

Route::get('profil/hobi',function(){
    return 'halo'.
           '<br> Hobi Saya Berenang';
});

//route parameter

Route::get('biodata/{nama}/{alamat}/{sekolah}/{umur}',function($a,$b,$c,$d){
    return 'halo ini biodata '.$a.
            '<br>alamat :'.$b.
            '<br>sekolah : '.$c.
            '<br>Umur : '.$d;
});
