<?php include 'db.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM mahasiswa WHERE id=$id")->fetch_assoc();

if ($_POST) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $angkatan = $_POST['angkatan'];
    $conn->query("UPDATE mahasiswa SET nim='$nim', nama='$nama', jurusan='$jurusan', angkatan='$angkatan' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method="POST">
    NIM: <input type="text" name="nim" value="<?= $data['nim'] ?>"><br>
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    Jurusan: <input type="text" name="jurusan" value="<?= $data['jurusan'] ?>"><br>
    Angkatan: <input type="number" name="angkatan" value="<?= $data['angkatan'] ?>"><br>
    <button type="submit">Update</button>
</form>