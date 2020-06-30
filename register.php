<?php include('functions.php') ?>
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
        <?php
        // put your code here
        ?>
        <div class="login-clean" style="background-color: #dfe7f1;">
         <h1 class="text-center">Sistem Akses Pintu</h1>
        <form action="register.php" method="post">
            
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
            
            <div class="form-group text-center">
            <button class="btn btn-primary btn-block" type="submit" name="register_btn" style="background-color: rgb(71,130,244);">Daftar</button>
        </form>
    </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/smart-forms.min.js"></script>
    </body>
</html>
