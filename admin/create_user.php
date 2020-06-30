<?php include('../functions.php');
if (!isAdmin()) {
	$_SESSION['msg'] = "You must log in first";
	header('location: ../logmasuk.php');
}
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
        <link rel="stylesheet" href="assets/css/styles.min.css">
    </head>
    <body style="background-color: #dfe7f1;">
        <nav class="navbar navbar-dark navbar-expand-lg navigation-clean-search">
        <div class="container"><a class="navbar-brand" style="color: rgb(0,0,0);" href="#"><strong>Sistem Akses Pintu</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1" style="background-color: #000000;"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon" style="background-color: rgba(255,255,255,0);"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="profile.php" style="color: rgb(0,0,0);"><strong>Profil</strong></a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#" style="color: rgb(0,0,0);"><strong>Menu</strong>&nbsp;</a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="#">Status Penuh</a>
                            <a class="dropdown-item" role="presentation" href="#">Tambah Pintu</a>
                            <a class="dropdown-item" role="presentation" href="create_user.php">Tambah Pengguna</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"></label></div>
                </form>
                <a class="btn btn-primary border rounded shadow-sm action-button" type="submit" style="background-color: rgba(173,0,255,0.52);color: rgb(0,0,0);" href="create_user.php?logout='1'">Log Keluar</a></div>
        </div>
    </nav>
        <?php
        // put your code here
        ?>
        <div class="login-clean" style="background-color: #dfe7f1;">
         <h1 class="text-center">Sistem Akses Pintu</h1>
         <form action="create_user.php" method="post">
            
            <h2 class="sr-only">Login Form</h2>
            <h3 class="text-center">Daftar Pengguna</h3>
            <div class="illustration"></div>
            <div class="form-group">
                <label>Nama</label>
                <input class="form-control" type="text" name="username" placeholder="Nama" required="" value="<?php echo $username; ?>">
            </div>
            <div class="form-group">
		<label>Emel</label>
                <input class="form-control" type="email" name="email" placeholder="Emel" required="" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
                <label>Katalaluan</label>
                <input class="form-control" type="password" name="password" required="">
            </div>
            <div class="form-group">
                <label>Jenis Pengguna</label>
                <select class="form-control" name="user_type" id="user_type" >
                    <option value="user">User</option>
                    <option value="admin">Admin</option>    
		</select>
            </div>
            
            <div class="form-group text-center">
            <button class="btn btn-primary btn-block" type="submit" name="register_btn" style="background-color: rgb(71,130,244);">Daftar</button>
        
    </div></form>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/smart-forms.min.js"></script>
    </body>
</html>
