<?php
session_start();
$hello=$_SESSION['user'];
include 'config.php';

?>
<!DOCTYPE>
<html>
<head>

<title>Blood Request</title>
       <link rel = "icon" href =  
"images/logo.png" 
        type = "image/x-icon"> 
  <style type="text/css">
  body{
  	 background-color:skyblue;
  }
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body style="background-color: skyblue">
<p style="text-align:center;font-size:60px;font-family:cursive;color:black;border-radius:0.5px">Blood Bank Management System</p>
 <center><section id="main-content">
          <section class="wrapper">
				<div class="row">     
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>
	                  	  	  <hr>
                              <thead>
                              <tr>
                                  <th>Id</th>
                                  <th class="hidden-phone">Massage</th>
                                 
                                
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              
                              
                              $ret1=mysqli_query($con,"select * from requestblood where user='$hello'");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret1))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['message'];?></td>
                                 
                              </tr>
                              <?php  }?>
                             
                              </tbody>
                          </table>
                      </div>
                  </div>
              </div>
		</section>
	</div>
</div>
	<footer class="footer-distributed">
 <center>
 	<br>
 	<br>
 	 <h3 style="color:black;font-size: 20px">Copyright@2021 Blood Blood Management System</h3>
                <a href="profile.php"style="color:black;font-size: 20px">Back to home</a>
                <br>
                <br>
 </center>
            
               
               



               

</body>
</html>
