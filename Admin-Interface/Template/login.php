<html>
<head>
<title>Login Admin</title>
    <link rel="stylesheet" type="text/css" href="../../css/styleLogin.css"></head>
	
	
	<script type="text/javascript" src="login.js"></script> 
	<script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
<body>
<div class="error">
			<?php session_start(); 
			if(isset($_SESSION['error'])==1){
				echo $_SESSION['error'];
			} ?>
			<div id="p"></div>
			<div id="p1"></div>
			<div id="p2"></div>
			</div>

    <div class="loginbox">
    <img src="../../pic/avatar.png" class="avatar">
        <h1>Welcome</h1>
        <form name="myForm1" onsubmit="return LoginvalidateForm()" action="insert.php"  method="post" >

            <p>Email</p>
            <input type="text" name="email"  id="mailid" placeholder="Enter Email" />
			
            <p>Password</p>
            <input type="password" name="password1" id="passwordKey" placeholder="Enter Password" />
			
            <input type="submit" name="submit" value="submit"  />
			
        </form>
    </div>

</body>
</head>
</html>