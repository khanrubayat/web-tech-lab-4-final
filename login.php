<?php 

	include "hea.php";
	include"db.php";

session_start();



	if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
		   
		  
		  $sql = "SELECT * FROM users WHERE username = '".$_POST["uname"]."' and password = '".$_POST["pass"]."'";
		  $result = $conn->query($sql);
		  if ($result->num_rows > 0)
		  {
			  $_SESSION["uname"]=$_POST["uname"];
			  header("location: dashboard.php");
		  }
			  
		  else
			  echo "wrong email or password";
   }



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

		.content_left{

border: 1px solid black;
			float:left;
			width:39%;

		}

		.content_right{
			
			float: right;
			width:59%; 
		}


 		

 	</style>
  </head>
 <body>
 <div class="body">

 	<h1>LOGIN</h1>
		<form method="post">
			<table>
				
				<tr>
					<td><b>Username :</b></td>
					<td><input type="text" name="uname"/></td>
					
				</tr>
				
				<tr>
					<td><b>Password :</b></td>
					<td><input type="password" name="pass"/></td>
					
				</tr>
				

				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
					
				</tr>
				
			</table>

		
		</form>
 	
 </div>
 </body>
 </html>



 <?php 
 	include "foo.php";
  ?>