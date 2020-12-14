<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  
      

  
</head>

<body>
<?php include("ket_noi.php"); ?>
<?php include("xulilogin.php"); ?>
<?php include("xulidangky.php"); ?>
  <div class="login-wrap">
	<div class="login-html">
		
        
		<div class="login-form">
        <form action="login_SignUp.php" method="post" style="text-align:center; ">
        	<div class="sign-in-htm">
            	<div class="group">
                	<label class="label">Username</label>
                    <input name="user" type="text" class="input">
                </div>
                <div class="group">
                	<label class="label">Password</label>
                    <input name="pass" type="password" class="input">
                </div>
                <div class="group">
					<input type="submit" class="button" name="btn_dangnhap" value="Sign In">
				</div>
				<div class="hr"></div>
            </div>
        </form>
        
        <form action="login_SignUp.php" method="post" style="text-align:center;" >    
          <div class="sign-up-htm">
            	<div class="group" style="margin-top: 100px">
                	<label class="label">Username</label>
                    <input name="user" type="text" class="input">
                </div>
                <div class="group">
                	<label class="label">Password</label>
                    <input name="pass" type="password" class="input">
                </div>
                <div class="group">
                	<label class="label">Nhap lai Password</label>
                    <input name="pass" type="password" class="input">
                </div>
                
                <div class="group">
                	<label class="label">Email cua ban</label>
                    <input name="email" type="text" class="input">
                </div>
                <div class="group">
                	<label class="label">Ho ten</label>
                    <input name="ten" type="text" class="input">
                </div>
                
                <div class="group">
					<input type="submit" class="button" name="btn_dangki" value="Sign Un">
				</div>
				<div class="hr"></div>
                </div>
                </form>
          </div>
        </div>
	</div>
</div>
  
  
</body>
</html>
