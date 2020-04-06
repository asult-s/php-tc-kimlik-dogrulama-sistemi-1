<?php include 'tckn.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Animated Login Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
</head>
<body>
<img class="wave" src="img/wave.svg">
<div class="container">
    <div class="img">
        
    </div>
    <div class="login-content">
        <form action="index.php" method="POST">
            <img src="img/avatar.svg">
            <h2 class="title"> Tc kimlik doğrulama</h2>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Tc kimik no</h5>
                    <input type="text" class="input" name="tckn" placeholder="" >
                </div>


            </div>

            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Ad</h5>
                    <input type="text" class="input"  name="ad" placeholder="" >
                </div>


            </div>
            <div class="input-div one">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Soyad</h5>
                    <input type="text" class="input" name="soyad" placeholder="" >
                </div>


            </div>

            <div class="input-div pass">
                <div class="i">
                    <i class="fas fa-user"></i>
                </div>
                <div class="div">
                    <h5>Doğum yılı</h5>
                    <input type="şifre" class="input"  name="dy" placeholder="" " >
                </div>
            </div>

            <input type="submit" class="btn" name="sorgula" value="Sorgula">
        </form>
    </div>
</div>
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
