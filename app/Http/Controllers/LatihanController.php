<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function halo(){
        return 'halo Nama Saya Ahmad MAulana';
    }
    //
    public function pertambahan($a=0,$h=0){
        if(!$a && !$h){
            return 'Silahkan isi data terlebih dahulu';
            }
            if(isset($a)   ){
                echo 'Bilangan Pertama(1) = '.$a;
            }
            if(isset($h)){
                echo '<br>Bilangan Kedua(2) = '.$h;
            }
        $hasil= $a+$h;
        return '<br>hasil dari '.$a.' + '.$h. ' = '.$hasil;
    }
    public function pengurangan($b=0,$g=0){
        if(!$b && !$g){
            return 'Silahkan isi data terlebih dahulu';
            }
            if(isset($b)   ){
                echo 'Bilangan Pertama(1) = '.$b;
            }
            if(isset($g)){
                echo '<br>Bilangan Kedua(2) = '.$g;
            }
        $hasilk= $b-$g;
        return 'hasil dari '.$b.' - '.$g. ' = '.$hasilk;
    }
    public function pembagian($c=0,$f=0){
        if(!$c && !$f){
            return 'Silahkan isi data terlebih dahulu';
            }
            if(isset($c)   ){
                echo 'Bilangan Pertama(1) = '.$c;
            }
            if(isset($f)){
                echo '<br>Bilangan Kedua(2) = '.$f;
            }
        $hasilb= $c/$f;
        return 'hasil dari '.$c.' : '.$f. ' = '.$hasilb;
    }
    public function perkalian($d=0,$e=0){
        if(!$d && !$e){
            return 'Silahkan isi data terlebih dahulu';
            }
            if(isset($d)   ){
                echo 'Bilangan Pertama(1) = '.$d;
            }
            if(isset($e)){
                echo '<br>Bilangan Kedua(2) = '.$e;
            }
        $hasild= $d*$e;
        return 'hasil dari '.$d.' x '.$e. ' = '.$hasild;
    }

    public function loop(){
        $data =[
            ['Nama'=>'Hari','Kelas'=>'XI RPL 1','jajan'=>65000],
            ['Nama'=>'Memet','Kelas'=>'XI RPL 1','jajan'=>45000],
            ['Nama'=>'Jay','Kelas'=>'XI RPL 1','jajan'=>25000],
            ['Nama'=>'David','Kelas'=>'XI RPL 1','jajan'=>10000]
        ];

        foreach($data as $val => $key){
             if($key['jajan']>=50000){
                 $tabungan = "25%";
                 $tabung =$key['jajan']*0.25;
                 $sisa = $key['jajan'] - $tabung;
            }
            elseif($key['jajan']>=25000){
                $tabungan = "15%";
                $tabung =$key['jajan']*15/100;
                $sisa = $key['jajan'] - $tabung;
           }
           elseif($key['jajan']>=10000){
            $tabungan = "25%";
            $tabung =$key['jajan']*10/100;
            $sisa = $key['jajan'] - $tabung;
       }
            echo 'Nama : ' .$key['Nama'].'<br>'.
                 ' Kelas : ' .$key['Kelas'].'<br>'.
                 ' Uang jajan : Rp.' .$key['jajan'].'<br>'.
                 ' Tabungan : '.$tabungan.'<br>'.
                 ' Uang Tabungan : '.$tabung.'<br>'.
                 ' Sisa : Rp.'.$sisa.'<hr><br>';

        }
    }
    public function loop2(){
        $data =[
            ['Nama'=>'Hari','Agama'=>'Islam','Alamat'=>'Bandung','Jenis_kelamin'=>'Laki-laki','Jabatan'=>'Manager','Jam_kerja'=>300],
            ['Nama'=>'Putri','Agama'=>'Islam','Alamat'=>'Jakarta','Jenis_kelamin'=>'Perempuan','Jabatan'=>'staff','Jam_kerja'=>260],
            ['Nama'=>'Jay','Agama'=>'Islam','Alamat'=>'Bandung,Jawa Barat','Jenis_kelamin'=>'Laki-laki','Jabatan'=>'Sekretaris','Jam_kerja'=>200]
        ];
        foreach($data as $jay => $key){

            if($key['Jabatan']== 'Manager'){
                $gaji=5000000;
                if($key['Jam_kerja']>=250){
                    $bonus =$gaji*10/100;
                }elseif($key['Jam_kerja']>=200){
                    $bonus =$gaji*5/100;
                }
                else{
                    $bonus=0;
                }
            }elseif($key['Jabatan']== 'Sekretaris'){
                $gaji=3500000;
                if($key['Jam_kerja']>=250){
                    $bonus =$gaji*10/100;
                }elseif($key['Jam_kerja']>=200){
                    $bonus =$gaji*5/100;
                }
                else{
                    $bonus=0;
                }
            }elseif($key['Jabatan']== 'staff'){
                $gaji=2500000;
                if($key['Jam_kerja']>=250){
                    $bonus =$gaji*10/100;
                }elseif($key['Jam_kerja']>=200){
                    $bonus =$gaji*5/100;
                }
                else{
                    $bonus=0;
                }
            }
           $gajibersih=$gaji+$bonus;
                $potongan=$gajibersih*2.5/100;
                $total=$gajibersih-$potongan;
            echo 'Nama : ' .$key['Nama'].'<br>'.
                 ' Agama : ' .$key['Agama'].'<br>'.
                 ' Alamat : ' .$key['Alamat'].'<br>'.
                 ' Jenis kelamin : '.$key['Jenis_kelamin'].'<br>'.
                 ' Jabatan : '.$key['Jabatan'].'<br>'.
                 ' Jam Kerja : '.$key['Jam_kerja'].'<br>'.
                 'Total Gaji Bersih : '.$gajibersih.'<br>'.
                 'Total gaji : '.$total.'<hr><br>';
        }
    }
}
