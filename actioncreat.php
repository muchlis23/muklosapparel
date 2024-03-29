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
	include 'koneksi.php';


	session_start();
	$nama = $_POST['nama'];
	$kerah = $_POST['kerah'];
	$ukuran = $_POST['ukuran'];
	$jumlah = $_POST['jumlah'];
	$alamat = $_POST['alamat'];
	$nomor = $_POST['nomor'];
	
	
	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama','$kerah','$ukuran','$jumlah','$alamat','$nomor')");

	
	

 ?>

 		<h2>Thanks for your order.</h2>      

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