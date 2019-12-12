<?php
//CONNECT DB
require 'Function.php';

//AGAR SEBELUM MASUK FORM, LOGIN DULU
session_start();

if (!isset($_SESSION ["login"])) {

    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
  body {
  font-family: Arial, Poppins, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: black;
}

.navbar a {
  float: right;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;  

}


.dropdown {
  float: right;
  overflow: hidden;

}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;

}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: orange;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}
.container {
  position: relative;
  width: 100%;
  max-width: 400px;
}

.container img {
  width: 100%;
  height: auto;
}

.container .btn {
  position: absolute;
  top: 35%;
  left: 65%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: black;
  color: white;
  font-size: 16px;
  padding:10px 0px;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  text-align: center;
  width: 200px;
  height: 225px;
}

.container .btn1 {
  position: absolute;
  top: 35%;
  left: 118%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: black;
  color: white;
  font-size: 16px;
  padding:10px 0px;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  text-align: center;
  width: 200px;
  height: 225px;
}

.container .btn2 {
  position: absolute;
  top: 35%;
  left: 171%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: black;
  color: white;
  font-size: 16px;
  padding:10px 0px;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  text-align: center;
  width: 200px;
  height: 225px;
}
.container .btn3 {
  position: absolute;
  top: 35%;
  left: 224%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  background-color: black;
  color: white;
  font-size: 16px;
  padding:10px 0px;
  border: none;
  cursor: pointer;
  border-radius: 20px;
  text-align: center;
  width: 200px;
  height: 225px;
}
.container .btn:hover {
  background-color: black;
}
</style>
</head>
<body>
<div class="navbar">
  <a href="#home"></a>
  <div class="dropdown">
    <button class="dropbtn">User
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="#">Bill</a>
      <a href="Logout.php" onclick="return confirm('Are you sure to logout?')">Logout</a>
    </div>
  </div> 
</div>
<div class="container">
  <img src="img/ListMenu.png" style="width:349%">
  <button class="btn"><img src="img/meatball.jpg" style="width:75%"><br>Meat Ball<br> Rp. 25.000</button>
  <button class="btn1"><img src="img/pancake.jpg" style="width:75%"><br>Pancake <br> Rp. 23.000</button>
  <button class="btn2"><img src="img/mie.jpg" style="width:75%"><br>Mie <br> Rp. 21.000</button>
  <button class="btn3"><img src="img/steak.jpg" style="width:75%"><br>Steak<br> Rp. 52.000</button>
</div>

</body>
</html>
