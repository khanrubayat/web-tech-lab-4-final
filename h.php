<?php 
	include "hea.php";
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
 	<h1>Welcome.</h1>
 </div>
 </body>
 </html>



 <?php 
 	include "foo.php";
  ?>