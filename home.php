<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="container">
        <div class="item"> <h1> I'M THE MASTER OF MY DOMAIN </h1></div>
		
</div>

</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>