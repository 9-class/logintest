<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
    <style>
        .button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  border-radius: 25px;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}




.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button2:hover {
  background-color: #008CBA;
  color: white;
}

   
   </style>
<body>
        <center>

<br><br><br><br>
<img src="images/success.gif" width=120px height=120px>
<h1>You are successfully logged in</h1>
<br><br>

<button class="button button2" onclick="location.href='logout.php'" type="button">
         Logout</button>

</center>
</body>
</html>
