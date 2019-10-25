<?php include("top.html"); ?>

<?php
  	$fname = $_GET["fname"];
	$lname = $_GET["lname"];
	$data = file("checkout.txt");
?>
<h1>Orders by <?= $fname ?></h1>
  
	<?php 	  
	//go through each line of the data looking for orders of that person
	foreach ($data as $file){
		$info = explode(",", $file);
			
		if(strcmp($info[0], $fname)==0){
		$user = $info;
			}
			?>
			<div class = "ship">
	  
	  
			<img class = "buy" src = "img/<?=$user[9]?>.png" alt = "Ordered Item"/> <!-- picture of item--> 
	  
			<!--unordered list of user's checkout info-->
	  	  	<ul>
				<li><strong>first-name:</strong> <?= $user[0] ?></li>
				<li><strong>last-name:</strong> <?= $user[1] ?></li>
				<li><strong>address:</strong> <?= $user[2] ?></li>
				<li><strong>city:</strong> <?= $user[3] ?></li>
				<li><strong>state:</strong> <?= $user[5] ?></li>
				<li><strong>zip code:</strong> <?= $user[6] ?></li>
				<li><strong>number:</strong> <?= $user[7] ?></li>
				<li><strong>shipping method:</strong> <?= $user[8] ?></li>
				</ul>
			</div>
	<?php } ?>	 
	  
	  	
	
<?php include("bottom.html"); ?>

