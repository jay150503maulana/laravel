<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center> Daftar Semua Biodata</center>
    @foreach($bio as $data)
    Nis : {{$data -> nis}}<br>
    Nama : {{$data -> nama}}<br>
    Tanggal Lahir : {{$data -> Tanggal_lahir}}<br>
    Alamat : {{$data -> alamat}}<br>
    Sekolah : {{$data -> sekolah}}<br>
    Hobi : {{$data -> hobi}}<br>
    Umur : {{$data -> umur}}
    <hr>
    @endforeach
</body>
</html>
