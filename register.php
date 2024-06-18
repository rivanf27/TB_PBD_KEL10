<?php
include "koneksi.php";

$akses="";

if(isset($_POST['daftar'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $akses = $_POST['akses'];

    $sql = "INSERT INTO akun (username, password,akses)  VALUES
    ('$username', '$password','$akses')";

    if($db->query($sql)){
      echo"DATA MASUK";
    }else{
      echo"Data tidak masuk";
    }
    
}

?>

<!DOCTYPE html>
<html lang="en">
  <>
    <title>HALAMAN REGISTER</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
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
    <style>
      body,
      h1,
      h2,
      h3,
      h4,
      h5,
      h6 {
        font-family: "Lato", sans-serif;
      }
      .w3-bar,
      h1,
      button {
        font-family: "Montserrat", sans-serif;
      }
      .fa-anchor,
      .fa-coffee {
        font-size: 200px;
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

      
   
  </body>

  <header class="w3-container w3-red w3-center" style="padding: 128px 16px">

    <div class="w3-top ">
      <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a
          class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"
          href="javascript:void(0);"
          onclick="myFunction()"
          title="Toggle Navigation Menu"
          ><i class="fa fa-bars"></i
        ></a>
        <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
          >Home</a
        >
        <a
          href="#"
          class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white"
          >Register</a
        >
        <a
          href="login.php"
          class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
          >Login</a
        >
        
      </div>

      <!-- Navbar on small screens -->
      <div
        id="navDemo"
        class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large"
      >
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
      </div>
        </div>


     <header class=" w3-red w3-center"
       class="w3-xlarge w3-center">REGISTER ACCOUNT</>
      <form action="register.php" method="POST">

       
       <div class="w3-margin bottom  w3-center w3-red">
      <input type="text" placeholder="username" name="username" />
        </div>
       
      <div class ="w3-margin bottom w3-white">

      
        </div>

        <div class=" w3-center w3-red">
      <input type="password" placeholder="password" name="password" />
        </div>
        <div class="mb-3 row">
                        <label for="akses" class="col-sm-2 col-form-label">Akses</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="akses" id="akses">
                                <option value="">- Pilih Akses -</option>
                                <option value="user" <?php if ($akses == "user") echo "selected" ?>>User</option>
                            </select>
                        </div>
                    </div>

      <button type="submit" name="daftar"
        class="w3-button w3-black w3-padding-large w3-large w3-margin-top"
      >
        DAFTAR SEKARANG
      </button>
    </header>
    </form>

    </header>

</html>
