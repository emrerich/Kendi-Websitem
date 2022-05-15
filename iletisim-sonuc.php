<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Emre</title>
    <meta 
    name="description"
    content="Emre Zengin |Kendi sitem"
    />
    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
     <!--Bootstrap-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/main.css">
    <!--Tablet-->
    <link rel="stylesheet" media="(max-width:992px)" href="css/tablet.css">
    <link rel="stylesheet" media="(max-width:500px)" href="css/mobile.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   
</head>
<body class="ap-mor">
    <nav class="navbar navbar-dark ap-dark-purple navbar-expand-md text-white">
        <div class="container py-1">
            <a href="index.html" class="navbar-brand font-weight-bold">Emre Zengin</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-emre"aria-controls="navbar-emre">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar-emre">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-2">
                      <a href="hakkimda.html" class="nav-link text-white">Hakkımda</a>
                  </li>
                  <li class="nav-item px-2">
                      <a href="sehrim.html" class="nav-link text-white">Şehrim</a>
                  </li>
                  <li class="nav-item px-2">
                      <a href="ilgi-alanlarim.html" class="nav-link text-white">İlgi Alanlarım</a>
                  </li>
                  <li class="nav-item pl-2">
                    <a href="takim.html" class="nav-link text-white">Takım</a>
                  </li>
                  <li class="nav-item px-2">
                    <a href="login-check.php" class="nav-link text-white">Login</a>
                  </li>
                  <li class="nav-item pl-2">
                    <a href="iletisim.php" class="nav-link text-white">İletişim</a>
                </li>
            </div>
        </div>
    </nav>
    <h1 class="yan-baslik text-center yr-dark-purple">İletişim Bilgileri<h1>
    <div class="container-lg">
                
                <div class="text-center">
                Ad:
                <?php
                echo $_POST['ad'];
                ?>
                <br>
                <br>
                Mail Adresi:
                <?php
            echo $_POST['email'];
                 ?>
                 <br>
                 <br>
                 Mesaj:
                 <br>
                 <br>
                 
                <?php
            echo $_POST['mesaj'];
                ?>
                </div>
    </div>
    
       

</body>
</html>
        
     
            
   