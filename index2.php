<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pemrograman Web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <h1>WEBSITE PENDAFTARAN BARU UNIVERSITAS X</h1> <!--judul pada bar-->
        <button type="input"><a href="tambah.php">Tambah Data</a></button><!--opsional tambah data-->
    </div>
    
    <div class="container">
        <h2>Halo, Selamat Datang Berikut Data Mahasiswa Baru Terkini</h2>
        <table class="tabel tabel-striped">
        <tr>
            <th>NO</th>
            <th>NIS SISWA</th>
            <th>NAMA SISWA</th>
            <th>KELAS</th>
            <th>JURUSAN</th>
        </tr>
        <?php
        include('koneksi.php');

        $sql = "SELECT * FROM siswa_207064516098";
        $hasil = $koneksi->query($sql);

        if ($hasil->num_rows > 0) {
            $no = 1;
            while ($row = $hasil->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $no . "</td>";
                echo "<td>" . $row["siswa_207064516098_nis"] . "</td>";
                echo "<td>" . $row["siswa_207064516098_nama"] . "</td>";
                echo "<td>" . $row["siswa_207064516098_kelas"] . "</td>";
                echo "<td>" . $row["siswa_207064516098_jurusan"] . "</td>";
                echo "</tr>";
                $no++;
            }
        } else {
            echo "<tr>";
            echo "<td colspan='5'>Tidak ada data siswa.</td>";
            echo "</tr>";
        }
        $koneksi->close();
        ?>
    </table>

    <div class="petunjuk">
        <P>Deadline Pendaftaran</p>
        <p id="demo"></p>
        <h3>Petunjuk Bagi Mahasiswa Baru!</h3>
        <ol>
            <li>Isi data diri Anda dengan lengkap dan benar pada form di bawah ini. Pastikan informasi yang Anda berikan akurat dan sesuai dengan dokumen identitas Anda.</li>
            <li>Masukkan Nomor Induk Siswa (NIS) Anda pada kolom yang tersedia. NIS adalah nomor unik yang mengidentifikasi Anda sebagai siswa.</li>
            <li>Tuliskan nama lengkap Anda sesuai dengan dokumen identitas. Pastikan nama Anda ditulis dengan benar dan tidak ada kesalahan penulisan.</li>
            <li>Masukkan kelas yang akan Anda ikuti pada periode pendaftaran. Pastikan Anda memilih kelas yang sesuai dengan program studi yang diminati.</li>
            <li>Tuliskan program studi atau jurusan yang Anda inginkan. Pastikan Anda memilih jurusan yang sesuai dengan minat dan bakat Anda.</li>
            <li>Setelah semua kolom terisi, klik tombol "TAMBAH" untuk menyimpan data diri Anda ke dalam sistem. Pastikan data telah terisi dengan benar sebelum menekan tombol ini.</li>
        </ol>
    </div>


    <div class="input">
        <form action="tambah_proses.php" method="post">
        <table class="tabel2">
            <tr>
                <td>NIS Siswa</td>
                <td>:</td>
                <td><input type="text" name="nis" id="nis" placeholder="*cth: 237006"></td>
            </tr>
            <tr>
                <td>NAMA Siswa</td>
                <td>:</td>
                <td><input type="text" name="nama" id="nama" placeholder="*cth: Fachry"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" id="kelas" placeholder="*cth: semester 1"></td>
            </tr>
            <tr>
                <td>Jurusan / Prodi</td>
                <td>:</td>
                <td><input type="text" name="jurusan" id="jurusan" placeholder="*cth: Informatika"></td>
            </tr>
            <tr>
                <td colspan="3"><input type="submit" name="tambah" value="TAMBAH"></td>
            </tr>
        </table>
    </div>
    
    </div>
    <div class="footer">
        <p class="copy">Copyright 2023.Fachry / 207064516098</p>
    </div>

<script>
    // Set the date we're counting down to
    var countDownDate = new Date("sep 1, 2023 15:37:25").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get today's date and time
    var now = new Date().getTime();

    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";

    // If the count down is finished, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
    }, 1000);
</script>
</body>
</html>
