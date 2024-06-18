<?php
session_start();
include("koneksi.php");
if (!$db) { //cek koneksi
    die("Tidak bisa terkoneksi ke database");
}
$nama = "";
$kebersihan="";
$keamanan="";
$shodaqoh="";
$air="" ;
$total="";
$sukses     = "";
$error      = "";

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=laporan.excel.xls");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kebersihan</th>
                            <th scope="col">Keamanan</th>
                            <th scope="col">Shodaqoh</th>
                            <th scope="col">Air</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from iuran order by id asc";
                        $q2     = mysqli_query($db, $sql2);
                        $urut   = 1;
                        while ($r2 = mysqli_fetch_array($q2)) {
                            $id         = $r2['id'];
                            $nama       = $r2['nama'];
                            $kebersihan     = $r2['kebersihan'];
                            $keamanan   = $r2['keamanan'];
                            $shodaqoh   = $r2['shodaqoh'];
                            $air   = $r2['air'];
                            $total   = $r2['total'];

                        ?>
                            <tr>
                                <th scope="row"><?php echo $urut++ ?></th>
                                <td scope="row"><?php echo $nama ?></td>
                                <td scope="row"><?php echo $kebersihan ?></td>
                                <td scope="row"><?php echo $keamanan ?></td>
                                <td scope="row"><?php echo $shodaqoh ?></td>
                                <td scope="row"><?php echo $air ?></td>
                                <td scope="row"><?php echo $total ?></td>
                                <td scope="row">
                                </td>
                            </tr>
                            <?php
                        }
                        ?>

                        </tbody>
                    </div>
    
</body>
</html>