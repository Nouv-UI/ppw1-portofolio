<?php
include "koneksi.php";

if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];

    mysqli_query($conn, "INSERT INTO mahasiswa(nama,nim)
                         VALUES('$nama','$nim')");
}

if(isset($_GET['hapus'])){
    $id = $_GET['hapus'];
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id=$id");
}

$data = mysqli_query($conn, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Data Mahasiswa</h3>

    <form method="post">
        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>
        <input type="text" name="nim" class="form-control mb-2" placeholder="NIM" required>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
    </form>

    <hr>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Aksi</th>
        </tr>

        <?php while($row=mysqli_fetch_assoc($data)){ ?>
        <tr>
            <td><?= $row['id']; ?></td>
            <td><?= $row['nama']; ?></td>
            <td><?= $row['nim']; ?></td>
            <td>
                <a href="?hapus=<?= $row['id']; ?>" class="btn btn-danger btn-sm">
                    Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

</body>
</html>