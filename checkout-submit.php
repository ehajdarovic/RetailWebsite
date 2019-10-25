<?php include("top.html"); ?>

	<?php
		#break apart user info into multiple variables, then written to file
		$fname = $_POST["fname"];
		$lname = $_POST["lname"];
		$address = $_POST["address"];
		$city = $_POST["city"];
		$country = $_POST["country"];
		$state = $_POST["state"];
		$zip = $_POST["zip"];
		$number = $_POST["number"];
		$method = $_POST["method"];
		$id = $_POST["f"];
		
		$new = "$fname,$lname,$address,$city,$country,$state,$zip,$number,$method,$id \n";
		
		#write user preferences into text doc for later access
		file_put_contents("checkout.txt",$new,FILE_APPEND); 
	?>

	<div class = "ship">
	<p><strong>Thank You for shopping with GIB!</strong></p>
	<p>
		You've successfully completed your purchase, <?= $fname?>!
	</p>
	
	<p>
		Click here to view the status of your order!
	</p>
	</div>
	
<?php include("bottom.html"); ?>