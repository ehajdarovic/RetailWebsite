<?php include("top.html"); ?>

<?php
	#search for user in file
	$id = $_GET["id"];
?>

<div class = "ship">
<img class = "buy" src = "F/<?=$id?>.png"/>
<form action = "checkout-submit.php" method = "post">
	<fieldset>
		<legend>Complete Order:</legend>
		
		<label><strong>First Name:</strong></label>
		<input type = "text" name = "fname" size = "30"/> 
		
		<label><strong>Last Name:</strong></label>
		<input type = "text" name = "lname" size = "30"/>
		<br/><br/>
		
		<label><strong>Shipping Address:</strong></label>
		<input type = "text" name = "address" size = "30"/> 
		<br/><br/>
		
		<label><strong>City:</strong></label>
		<input type = "text" name = "city" size = "30"/> 
		<br/><br/>
		
		<label><strong>Country/Region:</strong></label>
		<input type = "text" name = "country" size = "15"/> 
		
		<label><strong>State</strong></label>
		<input type = "text" name = "state" size = "10"/>
		
		<label><strong>ZIP Code:</strong></label>
		<input type = "text" name = "zip" size = "10"/> 
		<br/><br/>
		
		<label><strong>Phone number:</strong></label>
		<input type = "text" name = "number" size = "30"/> 
		<br/><br/>
		
		<label><strong>Shipping Method:</strong></label>
		<select name= "method">
			<option selected="selected">Standard (5-7 Business Days)</option>
			<option>Express (3-4 Business Days)</option>
			<option>Next Day (1 Business Day)</option>
		</select>
		<br/><br/>
		
		<label><strong>Card Type:</strong></label>
		<label><input type = "radio" name = "card" value = "M" checked = "checked"/>Visa</label>
		<label><input type = "radio" name = "card" value = "M"/>MasterCard</label>
		<label><input type = "radio" name = "card" value = "M"/>American Express</label>
		<label><input type = "radio" name = "card" value = "M"/>Discover</label>
		<br/><br/>
		
		<label><strong>Card Number:</strong></label>
		<input type = "text" name = "cnumber" size = "30"/> 
		<br/><br/>
		
		<input type="hidden" name="f" value="<?=$id?>" /> 
		
		<input class = "button" type = "submit" value = "Checkout"/>
	</fieldset>
</form>

</div>

<?php include("bottom.html"); ?>