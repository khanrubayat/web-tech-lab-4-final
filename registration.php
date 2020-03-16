<?php 
	include "hea.php";
	include "db.php";


	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$sql = "INSERT INTO users (name, email,username,password)
		VALUES ('".$_POST["name"]."','".$_POST["email"]."','".$_POST["username"]."','".$_POST["pass"]."')";

		if ($conn->query($sql) === TRUE) {
			echo "New record created successfully";
		} 
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
	

	$conn->close();

 ?>

 <!DOCTYPE html>
 <html>
 <head>

 	<title>Home page</title>

<style type="text/css">
 			*{
 				margin: 0;
 				padding: 0;
 			}

 		.footer{
 			text-align: center;
 			background-color: white;
 			padding: 25px 0 ;
 			color: black;

 		}

 		.header{
 			width: 100%;
 			border: 1px solid black;
 			//background-color: white;
 			
 			
 		}
 		.header .left{
 			width: 20%;
 			float: left;

 		}

 		.header .right{
 			width: 60%;
 			float: right;

 		}

 		.header .right ul{
 			list-style: none;
 			text-align: right;
 			
 		}

 		.header .right ul li{
 			display: inline-block;
 			padding: 15px;
 			color:red;
 			background-color: white;

 		}
		a{
			color:blue;
		}
		.body{
			height: 500px;
		
		}

 		

 	</style>
  </head>
 <body>
 <div class="body">


 		<h3> REGISTRATION</h3>
		<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
			<table>
				<tr>
					<td><b>Name :</b></td>
					<td><input type="text" name="name"/></td>
				
				</tr>
				<tr>
					<td><b>Email :</b></td>
					<td><input type="email" name="email"/></td>
				
				</tr>
				<tr>
					<td><b>UserNmae :</b></td>
					<td><input type="text" name="username"/></td>
				
				</tr>
				<tr>
					<td><b>Password :</b></td>
					<td><input type="password" name="pass"/></td>
				
				</tr>
				
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
				</tr>
			
			</table>
		
		</form


 	
 </div>
 </body>
 </html>



 <?php 
 	include "foo.php";
  ?>