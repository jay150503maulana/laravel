<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar Tabungan</center>
    @foreach($tabungan as $data)
    <?php if($data -> jml >= 25000){
        $tabungan = " B";
    }elseif($data -> jml >=5000){
        $tabungan = " A";
    }else{
        $tabungan = "";} ?>
    <b>Nis : {{$data -> nis}}<br>
    Nama : {{ $data -> nama}}<br>
    kelas : {{$data -> kelas}}<br>
    Jumlah : {{$data -> jml}}<br>
    Paket Tabungan anda : <?php echo  $tabungan ?></b>
    <hr>
        @endforeach

</body>
</html>
