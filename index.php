<?php
$host = "localhost";
$user = "root";
$pass = "";
$database = "akademik";



$koneksi = mysqli_connect($host, $user, $pass, $database);
if (!$koneksi) { //cek koneksi
    die("tidak bisa Tekoneksi Ke Data Base");
} else {
}

$nim = "";
$nama = "";
$T_lahir = "";
$alamat = "";
$jk = "";
$agama = "";
$prodi = "";
$error = "";
$sukses = "";


if (isset($_POST['simpan'])) {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $t_lahir = $_POST['Ttl'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jk'];
    $agama = $_POST['agama'];
    $prodi = $_POST['prodi'];

    if ($nim && $nama && $t_lahir && $alamat && $jk && $agama && $prodi) {
        $sql1 = "INSERT INTO datamahasiswa Values('$nim','$nama','$t_lahir','$alamat','$jk','$agama','$prodi')";
        $q1 = (mysqli_query($koneksi, $sql1));
        if ($q1) {
            $sukses = "Selamat Berhasil Masukkan Data";
        } else {
            $error = "Gagal Memasukkan Data";
        }
    } else {
        $error = "Silahkan Masukkan Data Yang Benar";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        .mx-auto {


            width: 800px;
        }

        .card {
            margin-top: 30px;
        }

        body {
            background: lightblue;
        }
    </style>

</head>

<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header bg-primary text-white">
                Create /Edit Data
            </div>
            <div class="card-body">

                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php

                }
                ?>

                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-primary" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php

                }
                ?>

                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="Nim" class="col-sm-2 col-form-label">Nim</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nim" name="nim" value="<?php echo $nim ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Ttl" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-10">
                            <input type="Date" class="form-control" id="Ttl" name="Ttl" value="<?php echo $t_ ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Alamat" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="agama" class="col-sm-2 col-form-label">agama</label>
                        <div class="col-sm-10">
                            <select class="agama" id="agama" name="agama">
                                <option value="">--Pilih Agama</option>
                                <option value="islam" <?php if ($agama == "Islam") echo "Selected" ?>>
                                    islam
                                </option>
                                <option value="Kristen" <?php if ($agama == "Kristen") echo "Selected" ?>>
                                    Kristen
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="jk" class="col-sm-2 col-form-label">jenis kelamin</label>
                        <div class="col-sm-10">
                            <select class="jk" id="jk" name="jk">
                                <option value="">--Pilih jenis Kelamin</option>
                                <option value="Laki-laki" <?php if ($jk == "Laki-laki") echo "Selected" ?>>Laki-laki
                                </option>
                                <option value="Perempuan" <?php if ($jk == "Perempuan") echo "Selected" ?>>
                                    Perempuan
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="Agama" class="col-sm-2 col-form-label">Prodi</label>
                        <div class="col-sm-10">
                            <select class="Agama" id="prodi" name="prodi">
                                <option value="">--Pilih Prodi</option>
                                <option value="Broadcasting" <?php if ($prodi == "Broadcasting") echo "Selected" ?>>
                                    Broadcasting
                                </option>
                                <option value="Teknik Informatika" <?php if ($prodi == "Kristen") echo "Selected" ?>>
                                    Teknik Informatika

                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-13">
                        <input type="submit" name="simpan" class=" btn btn-primary">

                    </div>
                </form>
            </div>
        </div>

        <div class="card text-center">
            <div class="card-header text-white  bg-secondary">
                Data Mahasiswa
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr class="table-danger">
                            <th scope="col">#</th>
                            <th scope="col">Nim</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Ttl</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Agama</th>
                            <th scope="col">Prodi</th>
                        </tr>
                    <tbody>
                        <?php

                        $sql2 = "SELECT * FROM  'datamahasiswa' order by id desc";
                        $q2 = mysqli_query($koneksi, $sql2);
                        $urut = 1;
                        while ($row = mysqli_fetch_assoc($q2)) {
                            echo "nim" . $row["nim"] . "nama" . $row["nama"] . "alamat" . $row["alamat"] . "Tanggal Lahir" . $row["Ttl"] . "agama" . $row["agama"] . "prodi" . $row["prodi"] . "<br>";
                        ?>
                            <tr>
                                <th scope="row"><?php echo  $urut++ ?></th>
                                <td scope="row"><?php echo $nim ?></td>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $alamat ?></td>
                                <td scope="row"><?php echo $T_lahir ?></td>
                                <td scope="row"><?php echo $agama ?></td>
                                <td scope="row"><?php echo $prodi ?></td>
                                <td scope="row">
                                    <button type="button" class="btn btn-warning">Edit</button>
                                    <button type="button" class="btn btn-danger">Hapus</button>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>

                    </tbody>
                    </thead>
                </table>

            </div>
        </div>
    </div>

</body>

</html>