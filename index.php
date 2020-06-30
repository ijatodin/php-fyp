<?php 
	include('functions.php');
        if (!isLoggedIn()) {
	$_SESSION['msg'] = "You must log in first";
        header('location: logmasuk.php');}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html style="background-color: #dfe7f1;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Sistem Akses Pintu</title>
        <link rel="icon" href="https://bit.ly/2A3DrTQ"/>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
    </head>
    <body style="width: 100%;height: 100%;background-color: #dfe7f1;">
    <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
        <div class="container"><a class="navbar-brand" style="color: rgb(0,0,0);" href="#"><strong>Sistem Akses Pintu</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background-color: #000000;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgba(255,255,255,0);"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="../profile.php" style="color: rgb(0,0,0);"><strong>Profil</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(0,0,0);"><strong>Menu</strong>&nbsp;</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="index.php">Status Penuh</a>
                            <a class="dropdown-item" role="presentation" href="index.php">Tambah Pintu</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
                <a class="btn btn-primary border rounded shadow-sm action-button" type="submit" style="background-color: rgba(173,0,255,0.52);color: rgb(0,0,0);" href="index.php?logout='1'">Log Keluar</a></div>
        </div>
    </nav>
    <div class="col-md-8 offset-md-2">
        <h4 class="text-center">Welcome, <?php  if (isset($_SESSION['user'])) : ?>
					<strong><?php echo $_SESSION['user']['username']; ?></strong>
        <?php endif ?></h4>
        <h1 class="text-center">Laporan Ringkas</h1>    <div class="container py-5">
        <div class="row">
            <div class="col-lg-7 mx-auto bg-white rounded shadow">

                <!-- Fixed header table-->
                <div>
                    <?php $results = mysqli_query($db, "SELECT * FROM a1b1 ORDER BY entry_time LIMIT 1"); $resultss = mysqli_query($db, "SELECT * FROM a1b2 ORDER BY entry_time LIMIT 1"); ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th >ID</th>
                                <th >Lokasi</th>
                                <th >Voltan</th>
                                <th >Status</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            <tr>
                                <?php while ($row = mysqli_fetch_array($results)) { ?>
                                <td >a1b1</td>
                                <td >Aras 1 Bilik 1</td>
                                <td ><?php echo $row['voltage']; ?></td>
                                <td ><?php echo $row['status']; ?>%</td>
                                <?php } ?>
                            </tr>
                            <tr>
                                <?php while ($roww = mysqli_fetch_array($resultss)) { ?>
                                <td >a1b2</td>
                                <td >Aras 1 Bilik 2</td>
                                <td ><?php echo $roww['voltage']; ?></td>
                                <td ><?php echo $roww['status']; ?>%</td>
                                <?php } ?>
                            </tr>                          
                        </tbody>
                    </table>
                </div><!-- End -->
                
            </div>
        </div>
    </div>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/smart-forms.min.js"></script>
</body>
</html>
