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
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">


    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Iuran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
        body {font-size:16px;}
        .w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
        .w3-half img:hover{opacity:1}
        .mx-auto {
            width: 400px
        }

        .card {
            margin-top: 10px;
        }
        .card-body{
            width: 100
        }
    </style>
     <a
          href="index.php"
          class="btn btn-success ml-auto"
          >Logout</a
        >
</head>
<header>
<div class="w3-container" style="margin-top:30px" id="showcase">
    <h1 class="w3-xxlarge w3-center"><b>DATABASE</b></h1>
    <h1 class="w3-xlarge w3-text-red w3-center"><b>TRANSPARANSI IURAN</b></h1>
  </div>
</header>
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
        <a class="w3-bar-item w3-button w3-padding-large w3-hover-white" value="export excel" onclick="window.open('downloaddatabase.php')"
          >Download</a
        >
        <a
          href="index.php"
          class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-right w3-hover-white"
          >Logout</a
        >
      </div>
</div>
<div class="card border-danger mb-3" style="max-width: 1200rem;">
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
                </div>
                
       
    
</body>







</html>
                        