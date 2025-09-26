<?php

 require 'config.php';


            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';


         if (isset($_POST['login'])){
               $verifier = $pdo->prepare("SELECT*FROM t_login WHERE  Username = :username and Password = :password");
               $verifier->execute([
                'username' => $username,
                'password' => $password
               ]);

                if($verifier->rowCount()>0){
                    header("Location: views/about-culture.view.php"); 
                     exit();
                }
           
        
      } else {
          echo "<p style='color: red;'>Nom d'utilisateur ou mot de passe incorrect.</p>";
          echo"<a href='login.php'> Retourn</a>";
      }
     
 ?>
