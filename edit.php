<?php
include("koneksi.php");


    $nama = "";
    $kebersihan="";
    $keamanan="";
    $shodaqoh="";
    $air="" ;
    $total="";
    $sukses="";
    $gagal="";

    if(isset($_POST['simpan'])){//create
        $nama =$_POST['nama'];
        $kebersihan =$_POST['kebersihan'];
        $keamanan =$_POST['keamanan'];
        $shodaqoh =$_POST['shodaqoh'];
        $air =$_POST['air'];
        $total =$_POST['total'];

        if($nama && $kebersihan && $keamanan && $shodaqoh && $air && $total){
        $sql1 = "INSERT INTO iuran(nama,kebersihan,keamanan,shodaqoh,air,total) VALUES ('$nama','$kebersihan','$keamanan','$shodaqoh','$air','$total')";
        $q1 = mysqli_query($db,$sql1);
        if($q1){
            $sukses = "Berhasil memasukan data baru";

        }
        else
            $gagal = "Gagal memasukan data";
        }
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="card">
            <div class="card-header text white bg-red">
                 Create/Edit Data
            </div>
         <div class="card-body">
            <?php
            if($gagal){

            
            ?>
          <div class="alert alert-danger" role="alert">
            <?php echo $gagal?>
            </div>
            <?php
            }
            ?>

            <?php
            if($sukses){

            
            ?>
          <div class="alert alert-success" role="alert">
            <?php echo $sukses?>
            </div>
            <?php
            }
            ?>
             <form action ="" method="POST">
             <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="nama" name="nama" value ="<?php echo $nama?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="air" class="col-sm-2 col-form-label">Air</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="air" name ="air"value ="<?php echo $air?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="kebersihan" class="col-sm-2 col-form-label">Kebersihan</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="kebersihan" name ="kebersihan"value ="<?php echo $kebersihan?>" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="keamanan" class="col-sm-2 col-form-label">Keamanan</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="keamanan" name ="keamanan" value ="<?php echo $keamanan?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="shodaqoh" class="col-sm-2 col-form-label">Shodaqoh</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="shodaqoh" name ="shodaqoh" value ="<?php echo $shodaqoh?> " placeholder="Shodaqoh" >
                </div>
            </div>
            <div class="mb-3 row">
                <label for="total" class="col-sm-2 col-form-label">Total</label>
                <div class="col-sm-10">
                    <input type="text"  class="form-control" id="total" name ="total"value ="<?php echo $total?>">
                </div>
            </div>
            <div class="col-12">
                <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary"></>
            </div>
             </form>
             

         </div>
    
  </div>
    
</body>

</html>