<?php
include "koneksi.php";

//paging
			$batas=5;
			$halaman=$_GET['halaman'];
			if(empty($halaman)){
				$posisi=0;
				$halaman=1;
			}else{
				$posisi=($halaman-1)*$batas;
			}

$data="SELECT * FROM artikel ORDER BY id DESC LIMIT $posisi,$batas";
$query=mysql_query($data);
$i=1;
while($array=mysql_fetch_array($query)){
 $isi = $array['isi']; 
 $isi = substr($isi,0,310); 
?>
<?php 
echo "<h4><i>$array[1]</i></h4>"; 
//echo "<h3><a href='index.php?option=show-art&amp;id_artikel=$array[0]'><i>$array[1]</i></a></h3>";
//echo "<small><i><font color='#FF0000'>posted by : $array[4] &curren; $array[6]</font></i></small>";
?>

<p align="justify">
<?php echo "$isi..,<a href='index.php?option=show-art&amp;judul=$array[1]'>read more</a>"; ?>
	</p>
<br />	
<hr color="#9999CC" />
<br />	
<?php 
		}

		$tampil2="SELECT * FROM  artikel";
			$sql2=mysql_query($tampil2) or die(mysql_error());
			$jmldata=mysql_num_rows($sql2);
			$jmlhalaman=ceil($jmldata/$batas);
			
			
			echo"<center><br>Halaman : ";
			
			for($i=1;$i<=$jmlhalaman;$i++)
			{
				if($i!=$halaman){
					echo"<a href=index.php?option=art&halaman=$i>$i</a> | ";
				}else{
					echo"<b>$i</b> | ";
				}
				
			}
				echo"<p><center>Total Data : <b>$jmldata</b></center></p>";
	?>