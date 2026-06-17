<?php
$hasil = "";

if(isset($_POST['submit'])){

    $nama = htmlspecialchars(trim($_POST['nama']));
    $nim = htmlspecialchars(trim($_POST['nim']));
    $prodi = htmlspecialchars($_POST['prodi']);
    $ipk = $_POST['ipk'];
    $semester = $_POST['semester'];

    if(empty($nama) || empty($nim) || empty($prodi) || empty($ipk) || empty($semester)){
        $hasil = "Semua field wajib diisi!";
    } else {

        if($ipk >= 3.50){
            $predikat = "Cumlaude";
        }
        elseif($ipk >= 3.00){
            $predikat = "Sangat Memuaskan";
        }
        elseif($ipk >= 2.50){
            $predikat = "Memuaskan";
        }
        else{
            $predikat = "Cukup";
        }

        $hasil = "
        <h3>Data Mahasiswa</h3>
        Nama : $nama <br>
        NIM : $nim <br>
        Prodi : $prodi <br>
        IPK : $ipk <br>
        Semester : $semester <br>
        Predikat : <b>$predikat</b>
        ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendataan Mahasiswa</title>
</head>
<body>

<form method="post">
    Nama :
    <input type="text" name="nama" required><br><br>

    NIM :
    <input type="text" name="nim" required><br><br>

    Prodi :
    <select name="prodi" required>
        <option value="">--Pilih Prodi--</option>
        <option>Informatika</option>
        <option>Sistem Informasi</option>
        <option>Teknik Komputer</option>
    </select><br><br>

    IPK :
    <input type="number" step="0.01" min="0" max="4" name="ipk" required><br><br>

    Semester :
    <input type="number" min="1" max="14" name="semester" required><br><br>

    <button type="submit" name="submit">Simpan</button>
</form>

<hr>

<?= $hasil ?>

</body>
</html>