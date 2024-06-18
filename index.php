<!DOCTYPE html>
<html lang="en">
  <head>
    <title>DATABASE IURAN WARGA</title>
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
    <!-- Navbar -->
    <div class="w3-top">
      <div class="w3-bar w3-red w3-card w3-left-align w3-large">
        <a
          class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red"
          href="javascript:void(0);"
          onclick="myFunction()"
          title="Toggle Navigation Menu"
          ><i class="fa fa-bars"></i
        ></a>
        <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white"
          >Home</a
        >
        <a
          href="register.php"
          class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
          >REGISTER</a
        >
        <a
          href="login.php"
          class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
          >LOGIN</a
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

    <!-- Header -->
    <header class="w3-container w3-red w3-center" style="padding: 128px 16px">
      <h1 class="w3-margin w3-jumbo">SELAMAT DATANG</h1>
      <p class="w3-xlarge">DATABASE IURAN WARGA</p>
     <a href="login.php"
        class="w3-button w3-black w3-padding-large w3-large w3-margin-top"
        >MASUK SEKARANG</a>
    </header>

    <!-- First Grid -->
    <div class="w3-row-padding w3-padding-64 w3-container">
      <div class="w3-content">
        <div class="w3-twothird">
          <h1>Informasi mengenai Database</h1>
          <h5 class="w3-padding-32">
          Iuran warga merupakan sejumlah uang yang dikumpulkan masyarakat di sebuah. pemukiman untuk keperluan lingkungan maupuan kebutuhan RT/RW
          </h5>

          <p class="w3-text-grey">
          Retribusi kebersihan adalah iuran atau pemungutan yang dikenakan pada pemakai jasa kebersihan yang dipungut berdasarkan undang-undang yang dapat pula dipaksakan dengan memperoleh imbalan yang memperoleh imbalan yang dapat dinikmati secara langsung.
          
          Iuran Kebersihan merupakan Iuran yang digunakan untuk mengelola kebersihan seperti untuk mengelola sampah dan sebagainya.
          Iuran Keamanan merupakan Iuran yang diperuntukkan untuk biaya keamanan seperti dalam melakukan kegiatan pos ronda dan siskamling.
          Iuran Air merupakan iuran yang diperuntukkan untuk pengelolaan air.
          </p>
        </div>

        <div class="w3-third w3-center">
          <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
        </div>
      </div>
    </div>

    <!-- Second Grid -->
    <div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
      <div class="w3-content">
        <div class="w3-third w3-center">
          <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
        </div>

        <div class="w3-twothird">
          <h1>Teknik Informatika</h1>
          <h5 class="w3-padding-32">
            Web ini diprakarsai oleh mahasiswa Teknik Informatika Institut Teknologi Garut dengan tujuan unutk memenuhi Tugas Besar mata kuliah Praktikum Basis Data
          </h5>

          <p class="w3-text-grey">
          
          </p>
        </div>
      </div>
    </div>

    <div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
      <h1 class="w3-margin w3-xlarge">Quote of the day: live life</h1>
    </div>

    <!-- Footer -->
    <footer class="w3-container w3-padding-64 w3-center w3-opacity">
      <div class="w3-xlarge w3-padding-32">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
      </div>
      <p>
        Powered by
        <a href="https://www.itg.ac.id/teknik-informatika" target="_blank"
          >Institut Teknologi Garut</a
        >
      </p>
    </footer>

    <script>
      // Used to toggle the menu on small screens when clicking on the menu button
      function myFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
        } else {
          x.className = x.className.replace(" w3-show", "");
        }
      }
    </script>
  </body>
</html>
