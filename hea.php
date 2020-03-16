<link rel="stylesheet" type="text/css" href="style.css">
<div class="header">
	<div class="logo">
		<img src="logo.png" alt="logo">
	</div>
	<div class="right">
		<ul>
			<li><a href="h.php">Home</a></li>
			<?php 
			if(isset($_SESSION["uname"]))
				{
					 echo "<li><a href='logout.php'>Logout</a></li>";
					 echo "<li>login as ".$_SESSION['uname']."</li>";
					}				

					else{
						echo"<li><a href='login.php'>Login</a></li>";
						echo"<li><a href='Registration.php'>Registration</a></li>";
					}

			 ?>


			 
			
			
		</ul>
	</div>
</div>