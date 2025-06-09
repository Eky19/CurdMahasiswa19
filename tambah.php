<?php include 'db.php';
if ($_POST) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    $conn->query("INSERT INTO mahasiswa (nim, nama, jurusan, angkatan) VALUES ('$nim', '$nama', '$jurusan', '$angkatan')");
    header("Location: index.php");
}
?>
<form method="POST">
    NIM: <input type="text" name="nim"><br>
    Nama: <input type="text" name="nama"><br>
    Jurusan: <input type="text" name="jurusan"><br>
    Angkatan: <input type="number" name="angkatan"><br>
    <button type="submit">Simpan</button>
</form>