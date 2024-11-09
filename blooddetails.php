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
<title>Blood Bank Management</title>

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
  width:100%;

  
  
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
  position: center;
  right: 70px;


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
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

<body> 
<ul>
  

<center><li><a href="request.php"style="font-size:20px; color: white" >Send Blood Request</a></li>
<li><a href="home.php"style="font-size:20px; color: white">Back to Home</a></li></center>
</ul>




  <style type="text/css">
  body{
     
  }
  table{
    background-color: skyblue;
  
  }
</style>
<center> <section id="main-content">
          <section class="wrapper">
        <div class="row">     
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover" style="width: 50%;">
                            <h4><i class="fa fa-angle-right"></i> All Blood Details </h4>
                            <hr>
                              <thead>
                              <tr>
                                
                                  <th class="hidden-phone">Bloodgroup</th>
                                  <th>Unit(in l)</th>
                                  <th>Availability</th>
                                  
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              include 'config.php';
                              $ret=mysqli_query($con,"select * from bloodgroup"); 
                while($row=mysqli_fetch_array($ret))
                {?>
                              <tr>
                              
                                  <td><?php echo $row['Bloodname'];?></td>
                                  <td><?php echo $row['unit'];?></td>
                                  <td><?php echo $row['Availibility'];?></td>
                                 
                              
                              </tr>
                              <?php }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
    </section>

 
 
               
               



               


</section>
<h3 style="color:black;font-size: 20px;text-align:center">Copyright@2021 Blood Blood Management System</h3>

</body>
</html>