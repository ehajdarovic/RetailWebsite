<!DOCTYPE html>

<html>

<head>
<link href = "basic.css" type = "text/css" rel = "stylesheet" />
</head>


<body>
<h1>
<img  src = "https://turing.manhattan.edu/~kconlon01/GIB/header.png" />
</h1>
<?php

$username = $_POST["username"];
$user = $username;


foreach($_POST as $key => $value){
	if($key != "username"){
		$user = $user.",".$value." ";
	}
	
}

file_put_contents("users.txt","\n".$user,FILE_APPEND);
?>


<div>
<h1>
THANK YOU!
</h1>
<center>
<form action = "main.php" method = "post" >
<input class = "button" type = "submit" value = "CLICK HERE TO START SHOPPING">
</form>
</center>
</div>


</body>





</html>

