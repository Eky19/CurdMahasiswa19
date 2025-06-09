<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<a href="tambah.php">Tambah Mahasiswa</a>
<table border="1">
    <tr><th>ID</th><th>NIM</th><th>Nama</th><th>Jurusan</th><th>Angkatan</th><th>Aksi</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM mahasiswa");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['nim']}</td>
            <td>{$row['nama']}</td>
            <td>{$row['jurusan']}</td>
            <td>{$row['angkatan']}</td>
            <td>
                <a href='edit.php?id={$row['id']}'>Edit</a> |
                <a href='hapus.php?id={$row['id']}' onclick='return confirm(\"Yakin?\")'>Hapus</a>
            </td>
        </tr>";
    }
    ?>
</table>
</body>
</html>