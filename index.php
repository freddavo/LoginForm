<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="login.php" method="post">
	 <div class="flex-row">
	 
     	
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		
		
     	
     	<input type="text" name="uname" placeholder="Username"><br>
		
	   
     	
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">LOGIN</button>
     </form>
</body>
</html>