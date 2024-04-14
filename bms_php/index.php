<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../bms_css/stylebms.css">
    <link rel="stylesheet" type="text/css" href="../bms_css/navbar.css">

    <title>Basic Banking System</title>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h2>Welcome to</h2>
                  <h1>BANKING MANAGEMENT SYSTEM</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="../img/bg_img.jpg" style="height: 200px;" class="img-fluid pt-2">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="../img/user.jpg" class="img-fluid">
                    <br>
                    <a href="allusers.php"><button class="index">Customers</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="../img/transfer.jpg" class="img-fluid">
                    <br>
                    <a href="transfermoney.php"><button class="index">Make a Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="../img/transfer1.jpg" style="width: 200px; height: 200px; margin-top: 45px;" class="img-fluid">
                    <br>
                    <a href="transactionhistory.php"><button class="index">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <?php
  include 'footer.php';
  ?>