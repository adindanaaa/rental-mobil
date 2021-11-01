<?php
include ("connection.php");

$id = $_GET["id_pelanggan"];

// membuat perintah sql utk menghapus
$sql = "
delete from pelanggan 
where id_pelanggan = '".$id_pelanggan."';
";

// eksekusi perintah sql
$result = mysqli_query($connect, $sql);

if ($result) {
    header("location: list-pelanggan.php");
} else{
    echo("Gagall".mysqli_error($connect));
    exit();
}

?>