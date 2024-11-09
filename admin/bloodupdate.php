<?php 
require 'functions/functions.php';
session_start();
if (!isset($_SESSION['user'])) {
    header("location:index.php");
}
$user = $_SESSION['user'];
session_destroy();
session_start();
$_SESSION['user'] = $user;
ob_start(); 
$conn = connect();
?>

<!DOCTYPE>
<html>
<head>
<title>Blood Bank</title>

<style>
  body
{
  margin: 0;
  padding: 0;
  color:blue;
}
ul
{
  list-style-type: none;
  background-color: blue;
  height: 40px;
  width:98%;

  
  
}
a
{
  text-decoration: none;
  font-size: 25px;
  color:white;
  position: relative;
  top: 4px;
}
li
{
  display: inline;
  font-style: 15px;
  padding: 38px;
  margin-left: 20 px;
  position: relative;
  left: 70px;


}

p
{
  text-align: justify;
  max-width: 1000px;
  max-height: 80px;
  position: absolute;
  left: 60px;
  font-size: 20px;
  top: 350px;
  margin-left: 95px;
}
h6
{
  position: relative;
  top: 180px;
  left:60px;
  font-size: 20px;
  margin-left: 95px;
}

.bloodquery
{
  position: relative;
  top:160px;
  left: 60px;
  font-size: 20px;
  margin-left: 95px;

}
.ongoingcamps
{
  position: relative;
  top: 180px;
  left: 60px;
  font-size: 20px;
  margin-left: 95px;

}
.saap{
  position: relative;
  top:160px;
  left: 60px;
  font-size: 20px;
  margin-left: 40px;
  color:black;

}
</style>
</head>

<body>


  


<br>
<br>






  
<ul>
  

<li><a href="blood/om.html"style="font-size:20px">Update Blood</a></li>
<li><a href="status.php"style="font-size:20px">Total Blood In Stock</a></li>
<li><a href="viewrequest.php"style="font-size:20px">Blood Requested</a></li>

<li><a href="adminhome.php"style="font-size:20px">Back to Home</a></li>
</ul>

<center><img src="homepage.png" alt="" height="400px" width="600px">
<h3 style="color:black;font-size: 20px;text-align:center">Copyright@2021 Blood Blood Management System</h3>

</body>
</html>