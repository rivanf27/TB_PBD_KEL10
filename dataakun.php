<?php
    session_start();
    include("koneksi.php");
    if(isset($_POST['logout'])) {
        session_unset();
        session_destroy();
        header('location: index.php');
        }

        ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA AKUN</title>
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <style>
      .mx-auto {
            width: 1200px
        }

        .card {
            margin-top: 60px;
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
        <a href="dashboard.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white"
          >Halaman Admin </a
        >
      </div>
</div>
<div class="mx-auto">
<div class="card border-danger mb-3" style="max-width: 1200rem;">
            <div class="card-header text-white bg-danger">
                 Data Akun
            </div>
         <div class="card-body">
            <table class="table">
            <thead>
                <tr>
                    <th scope ="col"#>No</th>
                    <th scope ="col"#>username</th>
                    <th scope ="col"#>password</th>
                    <th scope ="col"#>Dibuat</th>
                    <th scope ="col"#>Akses</th>
                    
                    
                </tr>
                <tbody>
                    <?php
                    $sql3 = "SELECT * from akun order by id asc";
                    $q3   = mysqli_query($db,$sql3);
                    $urut2 = 1;
                    while($r2= mysqli_fetch_array($q3)){
                        $id =$r2['id'];
                        $username =$r2['username'];
                        $password =$r2['password'];
                        $Dibuat =$r2['Dibuat'];
                        $akses =$r2['akses'];
                    
                    

                        ?>

                        
                        <tr>
                            <td scope ="row"><?php echo $urut2++ ?></td>
                            <td scope ="row"><?php echo $username ?></td>
                            <td scope ="row"><?php echo $password ?></td>
                            <td scope ="row"><?php echo $Dibuat ?></td>
                            <td scope ="row"><?php echo $akses ?></td>
                            <td scope ="row"></td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </thead>

                  </div>
  </div>
</div>
        
    </body>
    
    </html>