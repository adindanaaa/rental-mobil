<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pelanggan</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header bg-info">
                <h4 class="text-white">Data Pelanggan Rental Mobil</h4>
            </div>
            <div class="card-body">
                <div class="card-body">
                    <a href="form-pelanggan.php">
                        <button class="btn btn-outline-success btn-block">
                            Daftar Menjadi Pelanggan
                        </button>
                    </a>
                </div>
                <hr>
                <ul class="list-group">
                    <?php
                    include("connection.php");
                    $sql = "select * from pelanggan";
                    
                    //eksekusi perintah sql
                    $query = mysqli_query($connect, $sql);
                    while($anggota = mysqli_fetch_array($query)){ ?>
                        <li class="list-group-item">
                        <div class="row">
                            <!-- bagian data anggota-->
                            <div class="col-lg-10 col-md-10">
                                <h5>Nama Pelanggan : <?php echo $anggota["nama_pelanggan"];?></h5>
                                <h6>ID Pelanggan : <?php echo $anggota["id_pelanggan"];?></h6>
                                <h6>Alamat : <?php echo $anggota["alamat_pelanggan"];?></h6>
                                <h6>Kontak : <?php echo $anggota["kontak"];?></h6>
                            </div>

                            <!-- bagian tombol pilihan-->
                            <div class="col-lg-2 col-md-2">
                                <a href="form-pelanggan.php?id_pelanggan=<?=$pelanggan["id_pelanggan"]?>">
                                <button class="btn btn-block btn-outline-primary">
                                    Edit
                                </button></a>
                                <a href="delete.php?id_pelanggan=<?=$pelanggan["id_pelanggan"]?>">
                                <button class="btn btn-block btn-danger"
                                onclick="return confirm('Apakah anda yakin?')">
                                    Remove
                                </button></a>
                            </div>
                        </div>
                        </li>
                    <?php
                    }
                    ?>
                    
                </ul>
            </div>
        </div>
    </div>
</body>
</html>