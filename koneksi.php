<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $host="localhost";
        $username="root";
        $password="";
        $name="latihan_207064516098";

        $koneksi= new mysqli($host, $username, $password, $name);

        if ($koneksi-> connect_error){
            die("Koneksi Gagal: " . $koneksi->connect_error);
        }
        echo "Koneksi Terhubung => silahkan tambah data untuk mahasiswa baru";
        echo "";
    ?>
</body>
</html>