<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelanggan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="text-white">Form Data Pelanggan</h4>
            </div>

            <div class="card-body">
                <?php
                if (isset($_GET["id_pelanggan"])) {
                    // memeriksa ketika load file ini
                    // apakah membawa data GET dg nama "id_anggota"
                    // jika true, maka form anggota digunakan utk edit

                    # mengakses data anggota dari id_anggota yg dikirim
                    include "connection.php";
                    $id_pelanggan = $_GET["id_pelanggan"];
                    $sql = "select * from anggota where id_pelanggan='$id_pelanggan'";
                    # eksekusi perintah sql
                    $hasil = mysqli_query($connect, $sql);
                    # konversi hasil query ke bentuk array
                    $pelanggan = mysqli_fetch_array($hasil);
                    ?>

                <form action="process-pelanggan.php" method="post">
                    ID Pelanggan
                    <input type="text" name="id_pelanggan"
                    class="form-control mb-2" required
                    value="<?=$pelanggan["id_pelanggan"] ?>" readonly>

                    Nama Pelanggan
                    <input type="text" name="nama_pelanggan"
                    class="form-control mb-2" required
                    value="<?=$pelanggan["nama_pelanggan"] ?>">

                    Alamat Pelanggan
                    <input type="text" name="alamat_pelanggan"
                    class="form-control mb-2" required
                    value="<?=$pelanggan["alamat_pelanggan"] ?>">

                    Kontak
                    <input type="text" name="kontak"
                    class="form-control mb-2" required
                    value="<?=$pelanggan["kontak"] ?>">

                    <button type="submit" class="btn btn-danger btn-block"
                    name="edit_pelanggan">
                        Save
                    </button>
                </form>

                    <?php
                }else {
                    // jika false, maka form anggota digunakan utk insert
                    ?>

                <form action="process-pelanggan.php" method="post">
                    ID Pelanggan
                    <input type="text" name="id_pelanggan"
                    class="form-control mb-2" required>

                    Nama Pelanggan
                    <input type="text" name="nama_pelanggan"
                    class="form-control mb-2" required>

                    Alamat Pelanggan
                    <input type="text" name="alamat_pelanggan"
                    class="form-control mb-2" required>

                    Kontak
                    <input type="text" name="kontak"
                    class="form-control mb-2" required>

                    <button type="submit" class="btn btn-danger btn-block"
                    name="simpan_pelanggan">
                        Save
                    </button>
                </form>

                    <?php
                }
                ?>
                
            </div>
        </div>
    </div>
</body>
</html>