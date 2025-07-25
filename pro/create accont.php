<?php

 if(isset($_GET['create'])){
   $username = $_GET['username'];
   $email = $_GET['email'];
   $password =$_GET['password'];
   $con = mysqli_connect('localhost','root','','fli');

   // 2-check connection
   if(!$con){
     die('connection failed');
   }
   // 3-prepare query
   $sql = "INSERT INTO user VALUES ('', '$username', '$email' , '$password')";

         //4-execute query
         $result = mysqli_query($con,$sql);

 }
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="create.css">
    <title></title>
  </head>
  <body>
    <form class="container">
      <input type="text" name="username" value="" placeholder="User Name"required><br>
      <input type="email" name="email" value=""placeholder="Email"required><br>
      <input type="password" name="password" value=""placeholder="Passowrd"required><br>
      <input type="submit" name="create" value="create accont">

    </form>
  </body>
</html>
