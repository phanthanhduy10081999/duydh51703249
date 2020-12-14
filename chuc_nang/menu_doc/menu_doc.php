<?php 
	$tv="select * from menu_doc order by id";
	$tv_1=mysql_query($tv);
	echo "<div class='menu_doc' >";
	$i=0;

	while($tv_2=mysql_fetch_array($tv_1))
	{
		$link="?thamso=xuat_san_pham&id=".$tv_2['id'];
		echo "<a href='$link'>";
			echo $tv_2['ten'];
		echo "</a>";
		$i++;

	}
	
	echo "</div>";
?>