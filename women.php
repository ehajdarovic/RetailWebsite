<?php include("top.html"); ?>

<form action = "cart.php" method = "get">
<center><table class = "item">
	<tr>
	<?php
	for ($i = 1;$i <= 3;$i++){
	?>
	<td>
		<img class = "buy" src = "img/F<?=$i?>.png"/>
		<input type="radio" name="id" value="F<?=$i?>"> I want this!
	</td>
	<?php } ?>
	</tr>
	
	<tr>
	<?php
	for ($i = 4;$i <= 6;$i++){
	?>
	<td>
		<img class = "buy" src = "img/F<?=$i?>.png"/>
		<input type="radio" name="id" value="F<?=$i?>"> I want this!
	</td>
	<?php } ?>
	</tr>
	
	<tr>
	<?php
	for ($i = 7;$i <= 9;$i++){
	?>
	<td>
		<img class = "buy" src = "img/F<?=$i?>.png"/>
		<input type="radio" name="id" value="F<?=$i?>"> I want this!
	</td>
	<?php } ?>
	</tr>
	
	<tr><td>
		<img class = "buy" src = "img/F10.png"/>
		<input type="radio" name="id" value="F10"> I want this!
	</td></tr>
	
<input class = "button" type = "submit" value = "Checkout"/>
	</table></center>
</form>

<?php include("bottom.html"); ?>