<!-- Buat fungsi hitungIMT($berat, $tinggi) yang menghitung Indeks Massa Tubuh dan mengembalikan kategorinya 
('Kurus', 'Normal', 'Gemuk', 'Obesitas'). Tampilkan hasilnya di halaman HTML -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator IMT</title>
</head>
<body>
    <h2>Kalkulator IMT</h2>

    <form method="POST" action="">
        <label for="berat">Berat Badan (kg):</label><br>
        <input type="number" id="berat" name="berat" required step="any" placeholder="Contoh: 50" style="margin-bottom: 10px;"><br>

        <label for="tinggi">Tinggi Badan (cm):</label><br>
        <input type="number" id="tinggi" name="tinggi" required step="any" placeholder="Contoh: 170" style="margin-bottom: 10px;"><br>

        <button type="submit" name="hitung">Hitung IMT</button>
    </form>

    <?php
    // Fungsi hitung Indeks Massa Tubuh
    function hitungIMT($berat, $tinggi) {
        // Ubah tinggi dari cm ke meter
        $tinggi_meter = $tinggi / 100;
        
        // IMT = Berat (kg) / (Tinggi (m) * Tinggi (m))
        $imt = $berat / ($tinggi_meter * $tinggi_meter);
        
        // Cek hasil IMT
        if ($imt < 18.5) {
            $kategori = 'Kurus';
        } elseif ($imt >= 18.5 && $imt <= 24.9) {
            $kategori = 'Normal';
        } elseif ($imt >= 25 && $imt <= 29.9) {
            $kategori = 'Gemuk';
        } else {
            $kategori = 'Obesitas';
        }
        
        return array('nilai' => number_format($imt, 1), 'kategori' => $kategori);
    }

    // Cek apakah tombol hitung sudah disubmit
    if (isset($_POST['hitung'])) {
        
        // Ambil data dari input form berdasarkan atribut name
        $berat_badan  = $_POST['berat'];
        $tinggi_badan = $_POST['tinggi'];
        
        // Panggil fungsi dengan data inputan user
        $hasil = hitungIMT($berat_badan, $tinggi_badan);
    ?>
        
        <div>
            <hr>
            <p>Berat Badan: <strong><?php echo htmlspecialchars($berat_badan); ?> kg</strong></p>
            <p>Tinggi Badan: <strong><?php echo htmlspecialchars($tinggi_badan); ?> cm</strong></p>
            <p>Nilai IMT: <strong><?php echo $hasil['nilai']; ?></strong></p>
            <p>Kategori: <strong><?php echo $hasil['kategori']; ?></strong></p>
        </div>

    <?php
    } // Penutup kurung kurawal untuk if(isset(...))
    ?>
</body>
</html>