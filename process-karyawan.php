<?php
include ("connection.php");
if (isset($_POST["simpan_karyawan"])) {
    # data input dari user
    $nama_karyawan = $_POST["nama_karyawan"];
    $kontak = $_POST["kontak"];
    $username = $_POST["username"];

    // insert ke tabel petugas
    $sql = "insert into petugas values
    ('','$nama_petugas','$kontak','$username')";

    //eksekusi perintah sql
    if (mysqli_query($connect, $sql)){
        //menuju halaman list petugas
        header("location:list-karyawan.php");
    }else {
        //gagal
        echo mysqli_error($connect);
    }
}
else if (isset($_POST["edit_karyawan"])) {
    # data yg akan diupdate
    $id_karyawan = $_POST["id_karyawan"];
    $nama_karyawan = $_POST["nama_karyawan"];
    $kontak = $_POST["kontak"];
    $username = $_POST["username"];
    
    if (empty($_POST["password"])) {
        #pass tdk diedit 
        $sql = "update karyawan set nama_karyawan='$nama_karyawan',
        kontak ='$kontak', username='$username' where id_karyawan='$id_karyawan'";
    }else {
        # pass diedit
        $password = sha1($_POST["password"]);
        $sql = "update karyawan set nama_karyawan='$nama_karyawan',
        kontak ='$kontak', username='$username', password='$password'";
    }
    # eksekusi perintah sql
    if(mysqli_query($connect, $sql)){
        header("location:list-karyawan.php");
    }else {
        //gagal
        echo mysqli_error($connect);
    }
}
?>