<!-- Buat file PHP yang menampilkan profil dirimu (nama, NIM, prodi, asal kota) dalam 
tabel HTML yang rapi menggunakan variabel PHP.  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil</title>
    <style>
        body {
            margin: 10%;
        }

        table { 
            border-collapse: collapse; 
            width: 100%; 
            margin-top: 15px; 
        }

        th, td { 
            border: 1px solid #dddddd; 
            text-align: left; 
            padding: 10px; 
        }

        th { background-color: #007BFF; color: white; }
    </style>
</head>
<body>
    <main>
        <?php
        $nama = "Muhammad Naufal Fitriarto";
        $kelas = "TRPL BB";
        $nim = "25/567748/SV/27252";
        $kota = "Yogyakarta";
        ?>

        <table>
            <tr>
                <th width="40%">DATA</th>
                <th>KETERANGAN</th>
            </tr>
            <tr>
                <td>NAMA</td>
                <td><?php echo $nama?></td>
            </tr>
            <!-- <tr>
                <td>KELAS</td>
                <td><?php echo $kelas?></td>
            </tr> -->
            <tr>
                <td>NIM</td>
                <td><?php echo $nim?></td>
            </tr>
            <tr>
                <td>PRODI</td>
                <td><?php echo $kelas?></td>
            </tr>
            <tr>
                <td>ASAL</td>
                <td><?php echo $kota?></td>
            </tr>
        </table>

        <!-- ========================= TUGAS 1 ========================= -->
    <!-- <h2>1. Profil Diri</h2>
    <?php
    // Variabel PHP untuk profil diri
    $nama      = "Muhammad Naufal Fitriarto"; 
    $nim       = "25/567748/SV/27252";  
    $prodi     = "Teknologi Rekayasa Perangkat Lunak"; 
    $asal_kota = "Sleman"; 
    ?>
    <table>
        <tr>
            <th width="30%">Data</th>
            <th>Keterangan</th>
        </tr>
        <tr>
            <td>Nama</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td><?php echo $nim; ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td><?php echo $prodi; ?></td>
        </tr>
        <tr>
            <td>Asal Kota</td>
            <td><?php echo $asal_kota; ?></td>
        </tr>
    </table> -->
    </main>
</body>
</html>