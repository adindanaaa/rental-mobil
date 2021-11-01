<?php
include("connection.php");

# untuk insert anggota
if (isset($_POST["simpan_pelanggan"])) {
    // tampubg data input anggota dari user
    $id_pelanggan = $_POST["id_pelanggan"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $alamat = $_POST["alamat_pelanggan"];
    $kontak = $_POST["kontak"];

    // membuat perintah sql utk insert data ke tbl anggota
    $sql = "insert into anggota values ('$id_pelanggan', 
    '$nama_pelanggan', '$alamat_pelanggan', '$kontak')";

    // eksekusi perintah sql
    mysqli_query($connect, $sql);

    // direct ke halaman list anggota
    header("location: list-pelanggan.php");
}

# untuk edit anggota
if (isset($_POST["edit_pelanggan"])) {
    // tampung data yg akan diupdate
    $id_pelanggan = $_POST["id_pelanggan"];
    $nama_pelanggan = $_POST["nama_pelanggan"];
    $alamat = $_POST["alamat_pelanggan"];
    $kontak = $_POST["kontak"];

    // membuat perintah sql untuk update data
    $sql = "update anggota set nama_pelanggan='$nama_pelanggan',
    alamat_pelanggan='$alamat',
    kontak='$kontak' where id_pelanggan='$id_pelanggan'";

    // eksekusi perintah sql
    mysqli_query($connect, $sql);

    // direct ke halaman list anggota
    header("location: list-pelanggan.php");
}

?>