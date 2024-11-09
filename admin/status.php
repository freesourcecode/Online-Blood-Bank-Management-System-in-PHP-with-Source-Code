<?php


?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Blood Available</title>
</head>
<body>


	<section class="listings">
		<div class="wrapper">
		
			<ul class="properties_list">
			<?php
						include '../config.php';
						$sel = "SELECT SUM(unit) FROM bloodgroup";
						$rs = $con->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				
					<center>
						<h2><span style="font-size:25px; color: blue;">Total Blood on bank:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['SUM(unit)'];?></span></h2>
						<a href="bloodupdate.php">Go Back</a>
					</center>
						
					
			</ul>
		</div>
	</section>	<!--  end listing section  -->

</body>
</html>