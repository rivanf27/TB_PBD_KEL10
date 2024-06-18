<?php
session_start();
include("koneksi.php");

if(isset($_POST['logout'])) {
    session_unset();
    session_destroy();
    header('location: index.php');
    }

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

if (isset($_GET['op'])) {
    $op = $_GET['op'];
} else {
    $op = "";
}
if($op == 'delete'){
    $id         = $_GET['id'];
    $sql1       = "delete from iuran where id = '$id'";
    $q1         = mysqli_query($db,$sql1);
    if($q1){
        $sukses = "Berhasil hapus data";
    }else{
        $error  = "Gagal melakukan delete data";
    }
}
if ($op == 'edit') {
    $id         = $_GET['id'];
    $sql1       = "select * from iuran where id = '$id'";
    $q1         = mysqli_query($db, $sql1);
    $r1         = mysqli_fetch_array($q1);
    $nama       = $r1['nama'];
    $kebersihan =$r1['kebersihan'];
    $keamanan =$r1['keamanan'];
    $shodaqoh =$r1['shodaqoh'];
    $air =$r1['air'];
    $total =$r1['total'];

    if ($nama == '') {
        $error = "Data tidak ditemukan";
    }
}
if (isset($_POST['simpan'])) { //untuk create
    $nama       = $_POST['nama'];
    $kebersihan =$_POST['kebersihan'];
    $keamanan =$_POST['keamanan'];
    $shodaqoh =$_POST['shodaqoh'];
    $air =$_POST['air'];
    $total =$_POST['total'];

    if ($nama && $kebersihan && $keamanan && $shodaqoh && $air && $total) {
        if ($op == 'edit') { //untuk update
            $sql1       = "update iuran set nama='$nama',kebersihan = '$kebersihan',keamanan='$keamanan',shodaqoh='$shodaqoh',air='$air',total='$total' where id = '$id'";
            $q1         = mysqli_query($db, $sql1);
            if ($q1) {
                $sukses = "Data berhasil diupdate";
            } else {
                $error  = "Data gagal diupdate";
            }
        } else { //untuk insert
            $sql1   = "insert into iuran(nama,kebersihan,keamanan,shodaqoh,air,total) values ('$nama','$kebersihan','$keamanan','$shodaqoh','$air','$total')";
            $q1     = mysqli_query($db, $sql1);
            if ($q1) {
                $sukses     = "Berhasil memasukkan data baru";
            } else {
                $error      = "Gagal memasukkan data";
            }
        }
    } else {
        $error = "Silakan masukkan semua data";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HALAMAN ADMIN</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Lato"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Montserrat"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        .mx-auto {
            width: 1200px
        }

        .card {
            margin-top: 10px;
        }
    </style>

</head>



<body>
<div class="w3-top">
      <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a
          class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"
          href="javascript:void(0);"
          onclick="myFunction()"
          title="Toggle Navigation Menu"
          ><i class="fa fa-bars"></i
        ></a>
        <a href="dataakun.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white"
          >Data Akun</a
        >
        <a
          href="index.php"
          class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-right w3-hover-white"
          >Logout</a
        >
      </div>
</div>

    <header class="w3-container w3-secondary w3-center" style="padding: 20px 16px">
    
    
      <h1 class="w3-margin w3-jumbo"></h1>
      <p class="w3-xlarge"></p>
      
    </header>
    <div class="mx-auto">

    
        <!-- untuk memasukkan data -->
        <div class="card border-danger mb-3" style="max-width: 1200rem;">
            <div class="card-header text-white bg-danger">
                Create / Edit Data
            </div>
            <div class="card-body">
                <?php
                if ($error) {
                ?>
                    <div class="alert alert-danger" role="alert">
                        <?php echo $error ?>
                    </div>
                <?php
                    header("refresh:5;url=dashboard.php");//5 : detik
                }
                ?>
                <?php
                if ($sukses) {
                ?>
                    <div class="alert alert-success" role="alert">
                        <?php echo $sukses ?>
                    </div>
                <?php
                    header("refresh:5;url=dashboard.php");
                }
                ?>
                <form action="" method="POST">
                    <div class="mb-3 row">
                        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $nama ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="kebersihan" class="col-sm-2 col-form-label">Kebersihan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kebersihan" name="kebersihan" value="<?php echo $kebersihan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="keamanan" class="col-sm-2 col-form-label">Keamanan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="keamanan" name="keamanan" value="<?php echo $keamanan ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="shodaqoh" class="col-sm-2 col-form-label">Shodaqoh</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="shodaqoh" name="shodaqoh" value="<?php echo $shodaqoh ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="air" class="col-sm-2 col-form-label">Air</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="air" name="air" value="<?php echo $air ?>">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="total" class="col-sm-2 col-form-label">Total</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" id="total" name="total" value="<?php echo $total ?>">
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" name="simpan" value="Simpan Data" class="btn btn-outline-danger" />
                    </div>
                </form>
            </div>
        </div>

        <!-- untuk mengeluarkan data -->
        <div class="card">
            <div class="card-header text-white bg-danger">
                Data Iuran
            </div>
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
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql2   = "select * from iuran order by id desc";
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
                                    <a href="dashboard.php?op=edit&id=<?php echo $id ?>"><button type="button" class="btn btn-warning">Edit</button></a>
                                    <a href="dashboard.php?op=delete&id=<?php echo $id?>" onclick="return confirm('Yakin mau delete data?')"><button type="button" class="btn btn-danger">Delete</button></a>            
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                    
                </table>
            </div>
        </div>
    </div>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-8">
      <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
    </div>
   
</body>

</html>
