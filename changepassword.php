<?php 
session_start();
	include "hea.php";
	include "db.php";

	
	$uname=$_SESSION["uname"];
	if(!isset($_SESSION["uname"]))
	{
		header("location:h.php");
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
 			

 			<div class="content_left">
			<h3>Account</h3>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profile.php">View Profile</a></li>
				<li><a href="editprofile.php">Edit Profile</a></li>
				<li><a href="changepicture.php">Change Profile Picture</a></li>
				<li><a href="changepassword.php">Change Password</a></li>
			</ul>
		</div>



		<div class="content_right">
			<h3>Change Password</h3>
			<?php
				

				$sql = "SELECT id, name, username, email,password FROM users WHERE username='".$_SESSION["uname"]."'";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
					// output data of each row
					
					while($row = $result->fetch_assoc()) {
						$eid=$row["id"];
						$ename=$row["name"];
						$eemail=$row["email"];
						$uuname=$row["username"];
						$epass=$row["password"];
					}
					
				} else {
					echo "0 results";
				}

				
				
				
			 ?>
		<form method="post">
		<table>
			<tr>
				<td><b>Current password :</b></td>
				<td><input type="text" name="oldpass" /></td>
				
			</tr>
			<tr>
				<td><b>New password :</b></td>
				<td><input type="text" name="newpass"/></td>
				
			</tr>
			
			<tr>
				<td><b>Retype New Password :</b></td>
				<td><input type="text" name="renewpass"/></td>
				
			</tr>
			
			
			
			
			<tr>
				<td align="center" colspan="2"><input type="submit" value="Submit" /></td>
				
			</tr>
			
		</table>
		
			
		
	</form>
			
		</div>


 </div>
 </body>
 </html>



 <?php 

 echo $eid;
	if ($_SERVER["REQUEST_METHOD"] == "POST"){
			if($epass==$_POST["oldpass"]){
				if($_POST["newpass"]==$_POST["renewpass"]){
					
					$sql="UPDATE users SET password='".$_POST["newpass"]."' WHERE username='".$uname."'";
					

					if ($conn->query($sql) === TRUE) {
						echo "New record created successfully";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();
					header("Location:profile.php");	
				}
				else{
					$error="Password don't match";
				}
			}
			else{
				$error="Incorrect Password";
			}
					
			
			//header("Location:profile.php");	
		}
 	include "foo.php";
  ?>