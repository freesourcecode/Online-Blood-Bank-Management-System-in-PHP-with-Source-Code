<?php
session_start();
include '../config.php';

// for deleting user
if(isset($_GET['id']))
{
$adminid=$_GET['id'];
$msg=mysqli_query($con,"delete from requestblood where id='$adminid'");
if($msg)
{
echo "<script>alert('Data deleted');</script>";
}
}
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
  	 background-color: skyblue;
  }
<!-- /*  body{

  	color:black;
    background-image:url("seamless.jpg");
    text-align: center;
    font-size:10px;
    
  	}




div
{
	position:relative;
	left:7cm;

}

table, td, th {  
  border: 5px solid black;
  text-align: center;
  font-size:20px;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th{
	
	font-size: 24px;
	color:blue;
	font-style: bold;
} 
td {
  padding: 20px;
}
h1{

	color:black;
	font-size:30px;
}
</style>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body>
<p style="text-align:center;font-size:60px;font-family:cursive;color:black;background-color: blue;color: white; border-radius:0.5px">Blood Bank Management System</p>
 <center><section id="main-content">
      <section class="wrapper">
				<div class="row">     
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
	                  	  	  <h4><i class="fa fa-angle-right"></i> All User Details </h4>
	                  	  	  <hr>
                              <thead style="background-color: blue; color: white;">
                              <tr>
                                  <th>Id</th>
                                  <th class="hidden-phone">First Name</th>
                                  <th> Address</th>
                                  <th> Bloodgroup</th>
                                  <th>Contact no.</th>
                                  <th>unit</th>
                                  <th>What date & time </th>
                                  <th> time</th>
                                  <th> Action</th>
                              </tr>
                              </thead>
                              <tbody>
                              <?php 
                              
                              $ret=mysqli_query($con,"select * from requestblood");
							  $cnt=1;
							  while($row=mysqli_fetch_array($ret))
							  {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['user'];?></td>
                                  <td><?php echo $row['Address'];?></td>
                                  <td><?php echo $row['bloodgroup'];?></td>
                                  <td><?php echo $row['phno'];?></td>
                                  <td><?php echo $row['unit'];?></td> 
                                  <td><?php echo $row['time-for-flood'];?></td>
                                  <td><?php echo $row['time'];?></td>  
                                  <td>
                                     
                                     <a href="massage.php?uid=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-primary btn-sm">Message<i class="fa fa-envelope"></i></button></a>
                                     <a href="viewrequest.php?id=<?php echo $row['id'];?>"> 
                                     <button class="btn btn-danger btn-sm" onClick="return confirm('Do you really want to delete');">Delete<i class="fa fa-trash-o "></i></button></a>
                                  </td>
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                             
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
  <a href="adminhome.php"style="color:black;font-size: 20px;" class="btn btn-primary">Back to home</a>
 	 <h3 style="color:black;font-size: 20px">Copyright@2021 Online Blood Management System</h3>
                
                <br>
                <br>
 </center>
            
               
               



               

</body>
</html>
