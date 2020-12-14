<?php
	session_start();
	if(isset($_SESSION['username'])){
		echo "Xin chao ".$_SESSION['username'];
		header("location:index.php");
		
		}
	else{	
		
		if(isset($_POST['btn_dangnhap'])){
			$sql=mysql_query('select* from users where username="'.$_POST['user'].'"and password="'.$_POST['pass'].'"');
			$count=mysql_num_rows($sql);
			
			if($count>0){
				$_POST['user'];
				$_SESSION['username']=$_POST['user'];
				header('Location: index.php');
				
			}
			else{
				echo "Đăng Nhập thất bại.";
			}
		}
	}
		function trang_truoc(){
		?>
			<html><head>
			  <meta charset="UTF-8">
			  <title>Đang chuyển về trang trước</title></head>
			<body>
				<script type="text/javascript">
					window.history.back();
				</script>	
			</body>
			</html>
		<?php 
	}
?>