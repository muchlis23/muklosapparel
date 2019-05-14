<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">

    <title>Muklos Apparel</title>

    <!-- Bootstrap core CSS -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="cover.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background: url(bg.jpg);">

    <div class="site-wrapper">

      <div class="site-wrapper-inner">

        <div class="cover-container">

          <div class="masthead clearfix">
            <div class="inner">
              <h3 class="masthead-brand">Muklos Apparel</h3>
              <ul class="nav masthead-nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="information.php">Information</a></li>
                <li class="active"><a href="order.php">Order</a></li>
                <li><a href="contact.php">Contact</a></li>
              </ul>
            </div>
          </div>

          <?php
          // define variables and set to empty values
          $namaErr = $kerahErr = $ukuranErr = $jumlahErr = $alamatErr = $nomorErr = "";
          $nama = $kerah = $ukuran = $jumlah = $alamat = $nomor = "";



          function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
          }
          ?>

          <h2>Order Form</h2>
          <form method="POST" action="actioncreat.php">

          <table width="50%" align="center" cellspacing="5" cellpadding="5">
            <br>
            <tr>
             <td>Name</td>
             <td style="color:black;"> <input type="text" name="nama" value="<?php echo $nama;?>">
            <span class="error"> <?php echo $namaErr;?></span></td>
            </tr>
            
            <tr>
             <td>Collar Type</td>
             <td>   
            <input type="radio" name="kerah" value="O-Neck">O-Neck
            <input type="radio" name="kerah" value="V-Neck">V-Neck
            <input type="radio" name="kerah" value="Polo">Polo
            <span class="error"> <?php echo $kerahErr;?></span>
             </td>
            </tr>
            
            <tr>
             <td>Size</td>
             <td>   
            <input type="radio" name="ukuran" value="XS">XS
            <input type="radio" name="ukuran" value="S">S
            <input type="radio" name="ukuran" value="M">M
            <input type="radio" name="ukuran" value="L">L
            <input type="radio" name="ukuran" value="XL">XL
            <input type="radio" name="ukuran" value="XXL">XXL
            <input type="radio" name="ukuran" value="XXXL">XXXL
            <span class="error"> <?php echo $ukuranErr;?></span>
             </td>
            </tr>
            
            <tr>
             <td>Order Amount</td>
             <td style="color:black;">   <input type="text" name="jumlah" value="<?php echo $jumlah;?>">
            <span class="error"> <?php echo $jumlahErr;?></span></td>
            </tr>
        
            <tr>
             <td>Email Address</td>
             <td style="color:black;">   <input type="text" name="alamat" value="<?php echo $alamat;?>">
            <span class="error"> <?php echo $alamatErr;?></span></td>
            </tr>

            <tr>
             <td>Phone Number</td>
             <td style="color:black;">   <input type="text" name="nomor" value="<?php echo $nomor;?>">
            <span class="error"> <?php echo $nomorErr;?></span></td>
            </tr>

            <tr>
             <td style="color:black; align="center" colspan="2"><input type="submit" name="submit" value="Submit">
              <input type="reset" name="reset" value="reset">
             </td>
            </tr>
          </table>
          </form>
          

        </div>

      </div>

    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>
  </body>
</html>
