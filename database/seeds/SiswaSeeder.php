<?php

use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [

            ['nama'=>'Ahmad Maulana','nis'=>'00001','jenis_kelamin'=>'laki-laki','alamat'=>'Jl.Cisirung','tgl_lahir'=>'2003-05-15','umur'=>'17'],
            ['nama'=>'Maulana Fajar','nis'=>'00002','jenis_kelamin'=>'laki-laki','alamat'=>'KP.Bojong Tanjung','tgl_lahir'=>'2003-02-13','umur'=>'16'],
            ['nama'=>'Fajar Rosadi','nis'=>'00003','jenis_kelamin'=>'laki-laki','alamat'=>'Bandung','tgl_lahir'=>'2003-02-17','umur'=>'18'],
            ['nama'=>'Jay','nis'=>'00004','jenis_kelamin'=>'laki-laki','alamat'=>'Jawa Barat','tgl_lahir'=>'2003-04-13','umur'=>'17'],
            ['nama'=>'Achmad','nis'=>'00005','jenis_kelamin'=>'laki-laki','alamat'=>'Indonesia','tgl_lahir'=>'2003-05-19','umur'=>'17']
        ];
        //
        // masukkan data ke database
          DB::table('siswa')->insert($siswa);
    }
}
