<?php
session_start();
//require_once('login.php');
if(isset($_GET['sige'])){
  $email = $_GET['email'];
  $password = $_GET['password'];
  // 1-create DB connection
  include('confi.php');

  // 3-prepare query

  $sql ="SELECT *
          FROM user
          WHERE email = '$email' AND password = '$password'" ;


          $result = mysqli_query($con , $sql);
          echo  $email ;
          if(mysqli_num_rows($result) == 1 ){
              // fetch the resulting rows as an array

              if($email == 'y99@gmail.com'& $password==112233){
                  header('location:ad.php');
              }else{
             
                header('location:inbo.php');
              }

          }else{
              echo 'Incorrect email or password';
          }
          
 


    }

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="login.css">

    <title></title>
  </head>
  <body>
<div class="container">
  <form>
    <div class="we"><span>w</span><span>e</span><span>l</span><span>c</span><span>o</span><span>m</span><span>e</span> </div>
    <input type="email" name="email" placeholder="Email"required><br><br>
    <input type="password" name="password" placeholder="password"required>
    <br><br>
    <input type="submit" value="Sige in" name="sige"></input>
     <a href="create accont.php"><input type="button" name="create accont" value="create accont"></a>

  </form>
  <div class="drops">
    <div class="drop-1"></div>
    <div class="drop-2"></div>
    <div class="drop-3"></div>
     <div class="drop-4"></div>
    <div class="drop-5"></div>
    <div class="drop-6">

    </div>


  </div>
</div>
<!--  <div class="cont">
  <span>Book quickly</span>

</div>-->

  </body>
</html>
