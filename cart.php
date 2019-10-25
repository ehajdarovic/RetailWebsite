<?php include("top.html"); ?>

<?php
	#search for user in file
	$id = $_GET["id"];
	$files = file("cart.txt");
	
	#pull users information to prepare for comparison
		foreach ($files as $file){
			$info = explode(",", $file);
			
			if(strcmp($info[0], $id)==0){
				$item = $info;
			}
		}

?>
<div class = "ship">
	<img class = "buy" src = "img/<?=$item[0]?>.png"/>
	<h1><?=$item[1]?>: $<?=$item[2]?> </h1>
	
	<form action="shipping.php" method="GET">
		<input type="hidden" name="id" value="<?=$id?>" /> 
		<input class = "button" type = "submit" value = "Proceed"/>
	</form>
	

</div>
<?php include("bottom.html"); ?>