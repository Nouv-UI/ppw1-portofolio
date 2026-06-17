<?php
$grade = "";
$ket = "";
$warna = "";

if(isset($_POST['proses'])){
    $nilai = $_POST['nilai'];

    if($nilai >= 85){
        $grade = "A";
        $ket = "Sangat Baik";
        $warna = "green";
    }
    elseif($nilai >= 70){
        $grade = "B";
        $ket = "Baik";
        $warna = "blue";
    }
    elseif($nilai >= 60){
        $grade = "C";
        $ket = "Cukup";
        $warna = "orange";
    }
    elseif($nilai >= 50){
        $grade = "D";
        $ket = "Kurang";
        $warna = "brown";
    }
    else{
        $grade = "E";
        $ket = "Gagal";
        $warna = "red";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Konversi Nilai</title>
</head>
<body>

<form method="post">
    Nilai:
    <input type="number" name="nilai" min="0" max="100" required>
    <button type="submit" name="proses">Proses</button>
</form>

<?php if($grade!=""){ ?>
    <h3 style="color:<?= $warna ?>">
        Grade <?= $grade ?> - <?= $ket ?>
    </h3>
<?php } ?>

</body>
</html>