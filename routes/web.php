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

Route::get('/', function () {
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

Route::get('name/{param?}',function($a= "kenedy"){
    return 'your name is '.$a;
});

Route::get('pesan/{batagor?}/{kopi?}/{denganharga?}',function($a= null,$b= null,$c=null){
    if(!$a && !$b){
    return 'Silahkan pesan terlebih dahulu';
    }
    if(!isset($b)   ){
        return 'Anda Pesan '.$a;
    }
    if(!isset($c)){
        return 'Anda pesan '.$a.' dan '.$b;
    }
    if(isset($c)){
        if($c > 35000){
            $size='Large';
        }
        elseif($c > 25000){
            $size='medium';
        }
        elseif($c >=0){
            $size='small';
        }
        else{
            $size='Harga Tidak valid';
        }
        echo'Anda pesan '.$a.' dan '.$b.' Dengan Harga '.$c.' size Minuman Anda '.$size;
    }
});
//buat satu optional dengan 2 param
//url ->test-tni/{nama}/{bb}/{umur}
//jika tidak diisi paramater->silahkan isi terlebih dahulu
// nama -> nama anda XXX
//  bb -> > 76-100 kg-> anda harus turun badan
//        > 65 - 75 kg -> berat badan anda ideal
//        > 50 - 64 kg -> naikan berat badan anda
//        < 50 -> anda kurang nutrisi

//  umur ->30 - 40 -> perwira
//       -> 40 - 50 -> Laksamana
//       -> 50- 60 -> jendral

Route::get('tni/{nama?}/{bb?}/{umur?}',function($a= null,$b= null,$c=null){
    if(!$a && !$b){
    return 'Silahkan isi data terlebih dahulu';
    }
    if(isset($a)   ){
        echo 'Nama Anda  '.$a;
    }
    if(isset($b)){
        if($b >=76 && $b <= 100){
            $bb='anda harus turun berat badan';
        }
        elseif($b >= 65 && $b < 76){
            $bb='berat badan anda ideal';
        }
        elseif($b >= 50 && $b < 65){
            $bb='Naikan berat badan anda';
        }
        elseif($b < 50){
            $bb='Anda kurang nutrisi';
        }
        else{
            $bb='berat badan tidak valid';
        }
        echo ', berat badan anda ' .$b. ' Kg dan '.$bb;
    }


        if(isset($c)){
            if($c > 50 && $c <= 60){
                $pangkat='jendral';
            }
            elseif($c >= 40 && $c < 50){
                $pangkat='Laksamana';
            }
            elseif($c >= 30 && $c < 40){
                $pangkat='perwira';
            }
            else{
                $pangkat='umur tidak valid';
            }
            echo'<br>umur anda '.$c.' tahun dan pangkat anda '.$pangkat;
        }
});
//akses model
Route::get('testmodel',function()
{
    $query = App\post::all();
    return $query;
});
//akses model untuk mencari berdasarkan id
Route::get('testmodel1',function()
{
    $query = App\post::find(1);
    return $query;
});
// akses model untuk mencari berdsarkan tittle
Route::get('testmodel2',function()
{
    $query = App\post::where('title','like','%cepat nikah%')->get();
    return $query;
});
//akses model untuk mengubah record ,(menghapus semua isi function)
Route::get('testmodel3',function()
{
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});
//akses model untuk menghapus record ,(menghapus semua isi function)
Route::get('testmodel4',function()
{
    $post = App\Post::find(1);
    $post->delete();
});
//akses model untuk menambahkan record ,(menghapus semua isi function)
Route::get('testmodel5',function()
{
    $post = new App\Post;
$post->title = "7 Amalan Pembuka Jodoh";
$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
$post->save();
return $post;
// check record baru di database
});
