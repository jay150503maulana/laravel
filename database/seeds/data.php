<?php

use Illuminate\Database\Seeder;

class data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio=[
            ['nis'=>'11112222','nama'=>'Ahmad Maulana','tanggal_lahir'=>'2003-05-15','alamat'=>'Jln.Cisirung Kp.Bojong tanjung','sekolah'=>'SMK Assalam Bandung','hobi'=>'berenang','umur'=>'16'],
            ['nis'=>'123131','nama'=>'Fajar Rosadi','tanggal_lahir'=>'2003-06-16','alamat'=>'Jln.Cisirung Bandung','sekolah'=>'SMK Assalam indonesia','hobi'=>'traveling','umur'=>'17'],
            ['nis'=>'43435435','nama'=>'Farrel Fadhilah','tanggal_lahir'=>'2003-01-25','alamat'=>'sukamenak','sekolah'=>'SMK Assalam Bandung','hobi'=>'makan','umur'=>'18'],
            ['nis'=>'4353874','nama'=>'Rafli Saputra','tanggal_lahir'=>'2003-02-13','alamat'=>'sadang','sekolah'=>'SMK Assalam Bandung','hobi'=>'ceramah','umur'=>'16'],
            ['nis'=>'09875783','nama'=>'Irsyad Husni','tanggal_lahir'=>'2003-04-24','alamat'=>'Taman Cibaduyut Indah','sekolah'=>'SMK Assalam Bandung','hobi'=>'Game','umur'=>'17'],
            ['nis'=>'364932','nama'=>'Parhan Abdurahman','tanggal_lahir'=>'2001-02-05','alamat'=>'Jln.Rancamanyar','sekolah'=>'SMK Assalam Bandung','hobi'=>'Balap','umur'=>'18'],
            ['nis'=>'753963','nama'=>'Hilmi Fadilah','tanggal_lahir'=>'2001-01-17','alamat'=>'Jln.Dayeuhkolot Kp.Kaum','sekolah'=>'SMK Assalam Bandung','hobi'=>'Gitar','umur'=>'18'],
            ['nis'=>'3698493','nama'=>'Agung Gumelar','tanggal_lahir'=>'2003-06-13','alamat'=>' Kp.Bojong tanjung','sekolah'=>'SMK Assalam Bandung','hobi'=>'Balapan Gang','umur'=>'16'],
            ['nis'=>'46873953','nama'=>'Alfiyudin','tanggal_lahir'=>'2004-05-21','alamat'=>'Kopo Permai','sekolah'=>'SMK Assalam Bandung','hobi'=>'Vidio sistematik','umur'=>'15'],
            ['nis'=>'37956395','nama'=>'Raihan Fadlan','tanggal_lahir'=>'2002-07-18','alamat'=>'Jln.Regency rancamanyar','sekolah'=>'SMK Assalam Bandung','hobi'=>'Muncak','umur'=>'17']
        ];
        //
         // masukkan data ke database
         DB::table('data')->insert($bio);
    }
}
