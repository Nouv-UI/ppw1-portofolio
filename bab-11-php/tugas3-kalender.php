<!-- Buat halaman yang menampilkan nama bulan sekarang dan berapa hari tersisa di bulan ini menggunakan fungsi date(). -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalender</title>
</head>
<body>
    <!-- <h2 style="margin-top: 40px;">Sisa Hari di Bulan Ini</h2>
    <?php
    // 1. Mengambil nama bulan sekarang dalam bahasa Inggris
    // $bulan_inggris = date('F'); 
    
    // // Array untuk menerjemahkan bulan ke bahasa Indonesia
    // $terjemahan_bulan = [
    //     'January' => 'Januari', 'February' => 'Februari', 'March' => 'Maret',
    //     'April' => 'April', 'May' => 'Mei', 'June' => 'Juni', 'July' => 'Juli',
    //     'August' => 'Agustus', 'September' => 'September', 'October' => 'Oktober',
    //     'November' => 'November', 'December' => 'Desember'
    // ];
    // $bulan_sekarang = $terjemahan_bulan[$bulan_inggris];

    // // 2. Mengambil total hari di bulan ini (t) dan tanggal hari ini (j)
    // $total_hari_sebulan = date('t');
    // $tanggal_hari_ini   = date('j');
    
    // // 3. Menghitung sisa hari
    // $sisa_hari = $total_hari_sebulan - $tanggal_hari_ini;
    ?>
    
    <div class="result-box">
        <p>Bulan saat ini: <strong><?php echo $bulan_sekarang; ?></strong></p>
        <p>Hari ini tanggal: <strong><?php echo $tanggal_hari_ini; ?></strong></p>
        <p>Total hari bulan ini: <strong><?php echo $total_hari_sebulan; ?> hari</strong></p>
        <hr style="border-top: 1px solid #ccc;">
        <p>Sisa waktu di bulan <?php echo $bulan_sekarang; ?> adalah: <strong><?php echo $sisa_hari; ?> hari lagi.</strong></p>
    </div> -->




    <?php
    // Ambil nama bulan, total hari, dan tanggal hari ini
    $bulan     = date('F');
    $tanggal = date('j');
    $banyak_hari = date('t');
    $sisa_hari = $banyak_hari - $tanggal;

    ?>
    <div>
        <h2>Informasi Bulan Ini</h2>
        <p>Bulan sekarang: <strong><?php echo $bulan; ?></strong></p>
        <p>Total hari di bulan ini: <strong><?php echo $banyak_hari; ?> hari</strong></p>
        <p>Tanggal hari ini: <strong><?php echo $tanggal; ?></strong></p>
        <hr>
        <p>Sisa hari di bulan ini: <strong style="color: red;"><?php echo $sisa_hari; ?> hari</strong></p>
    </div>
    
</body>
</html>