<?php 
   include("KullaniciBilgileri.php");
   if (($_POST["email"] == $user) and ($_POST["password"] == $pass))
   {
     $_SESSION["user"] = $user;
     $_SESSION["pass"] = $pass;
     
     echo ' <a style="text-decoration: none" href="index.html"><div class="alert alert-success ">Başarılı bir şekilde giriş yaptınız! <sub>Anasayfaya gitmek için tıklatın </sub></div></a>';
   }
   else 
   {           
     echo ' <a style="text-decoration: none" href="Login.php"><div class="alert alert-danger ">"HATALI GİRİŞ <sub>Tekrar denemek için tıklatın </sub>"</div></a>';
   }
  ?>
  
</div>