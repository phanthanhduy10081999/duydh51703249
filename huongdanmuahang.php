<?php
	session_start();
    include("ket_noi.php");	
    include("chuc_nang/ham/ham.php");	
	if(isset($_POST['thong_tin_khach_hang']))
	{
		include("chuc_nang/gio_hang/thuc_hien_mua_hang.php");
	}
	if(isset($_POST['cap_nhat_gio_hang']))
	{
		include("chuc_nang/gio_hang/cap_nhat_gio_hang.php");
		trang_truoc();
	}	
?> 
<html>
	<head>
		<meta charset="UTF-8">
		<title>Web bán hàng</title>
		<link rel="stylesheet" type="text/css" href="giao_dien/giao_dien.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>
    	
		<center>
        	<div class="header">
            	<div class="header_left">
                	<ul>
                    	<li><span  style="color:red;"class="glyphicon glyphicon-earphone"></span> 0905.692.314 hoặc 0906.333.666</li>
                        
                    </ul>
                </div>
                <div class="header_center">
                	<?php include("chuc_nang/tim_kiem/vung_tim_kiem.php");?>
                </div>
                <div class="header_right">
                	<ul>
                    	
                		<?php
							
							if(isset($_SESSION['username'])){
								echo"<li>";
								echo "Chào ".$_SESSION['username'];?><a href="index.php"><b><i> thoát</i></b></a></li>
							<?Php
								session_destroy();
								}else{
								echo "";?><li> <a href="login_SignUp.php"><span class="glyphicon glyphicon-user"></span></a></li>
							<?Php
							}	
						?>		
                    	
                    </ul>  
                    
                </div>
        	</div>
            <div style=" text-align:center; margin-top:25px; margin-bottom:15px;">
            	<img src="hinh_anh/banner/Logo2.png">
            </div>
			<div class="menu">
           				<?php
							include("chuc_nang/menu_ngang/menu_ngang.php");
						?> 
                        
			</div>
            <div class="conten">
            		<div class="conten_left">
                        <div class="nhungdanhmuc">
                        	<div class="tendanhmuc">Danh mục sản phẩm </div>
                            <div class="noidung" style="text-align:left;">
                            	<?php include("chuc_nang/menu_doc/menu_doc.php"); ?>
                             </div>   
                        </div>   
                        
                        <div class="nhungdanhmuc">
                        	<div class="tendanhmuc">Sản Phẩm Nổi Bật </div> 
                            
                        	<?php include("chuc_nang/san_pham/noi_bat.php");?>
                            </div>
						</div>		
                        
                    </div>
                    
                    <div class="conten_right">
                    		<div style="border:1px solid #000; color:#000; text-align:justify; padding:5px;">
                            	<h4>Hướng dẫn mua hàng</h4>

                                       <b><i style="color:#090;">Khuyến khích các bạn qua trực tiếp shop mặc thử và mua hàng.</i></b><br>
                                 Shop mở cửa từ 8h - 21h hàng ngày<br>
                                Số nhà 180 Cao Lỗ , TP.HCM, Việt Nam<Br>
                            </div>
                			<br>
                            <div style=" width:780">
                            	<iframe src="" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                            
                	</div>		
            </div>
            <!-- end conten--->
				<?php include('footer.php');?>	
					
                    
				
		</center>
	</body>
</html>