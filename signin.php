<DOCTYPE! html>

<html>
<head>
<link href = "basic.css" type= "text/css" rel ="stylesheet" />
</head>
<body>
<h1>
<img src = "https://turing.manhattan.edu/~kconlon01/GIB/header.png" alt = "Header" />
</h1>
<form action="signin-submit.php" method="post">

<div class = "login">

<fieldset>
<h1> LOGIN </h1>
<p>
<strong>UserName:</strong>
<input type="text" name="username" size="16"  required />

<br />

<strong>Password:</strong>
<input type="password" name="password" size="16" required />
</p>
             
<input class = "button" type="submit" value="LOG IN">

<button class = "signUp">
<a href = "signUp.php"> CREATE A NEW ACCOUNT </a> 
</button>

</fieldset>
</form>

</div>

</body>



</html>

