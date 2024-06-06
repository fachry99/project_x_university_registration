<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
</head>
<body>
    <p>Tambah Data</p>
    <form action="tambah_proses.php" method="post">
    <table>
        <tr>
            <td>NIS Siswa</td>
            <td>:</td>
            <td><input type="text" name="nis" id="nis"></td>
        </tr>
        <tr>
            <td>NAMA Siswa</td>
            <td>:</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas" id="kelas"></td>
        </tr>
        <tr>
            <td>Jurusan / Prodi</td>
            <td>:</td>
            <td><input type="text" name="jurusan" id="jurusan"></td>
        </tr>
        <tr>
            <td colspan="3"><input type="submit" name="tambah" value="TAMBAH"></td>
        </tr>
    </table>
</body>
</html>