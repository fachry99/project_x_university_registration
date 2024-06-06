<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['tambah'])) {
        include('koneksi.php');

        $nis=$_POST['nis'];
        $nama=$_POST['nama'];
        $kelas=$_POST['kelas'];
        $jurusan=$_POST['jurusan'];

        $sql = "INSERT INTO siswa_207064516098 (siswa_207064516098_nis, siswa_207064516098_nama, siswa_207064516098_kelas, siswa_207064516098_jurusan) VALUES ('$nis', '$nama', '$kelas','$jurusan')";

        if($koneksi->query($sql) === TRUE){
            echo "Data Berhasil Ditambah";
        } else{
            echo "Error: " . $sql . "<br>" . $koneksi->error;
        }
        $koneksi->close();

        $newURL="index2.php";
        header('Location: '.$newURL);
    }
    ?>
</body>
</html>