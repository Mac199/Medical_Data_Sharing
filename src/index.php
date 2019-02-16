<?php 
include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medical Data Sharing</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/font.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <!-- Fixed navbar -->
    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="./index.php"><b><span demo-msg="index.title">SELECT ACTOR</span></b></a>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <div class="container" style="margin-top : 80px;">
        <div class="row centered">
            <div class="col-lg-6 col-lg-offset-3">
                <a class="btn btn-warning btn-lg top-button" href="hospital.php" demo-msg="common.actor.hospital">HEALTH PROVIDER</a>
            </div>
 <!--            <div class="col-lg-6 col-lg-offset-3">
                <a class="btn btn-warning btn-lg top-button" href="doctor.html" demo-msg="common.actor.doctor"></a>
            </div> -->
            <div class="col-lg-6 col-lg-offset-3">
                <a class="btn btn-warning btn-lg top-button" href="patient.php" demo-msg="common.actor.patient">PATIENT</a>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/web3.min.js"></script>
    <script src="js/truffle-contract.js"></script>
    
    <!-- <script src="js/db.js"></script> -->
  </body>
</html>
