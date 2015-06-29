
<form method="post" action="#">
		<table>
			<?php
			include "koneksi.php";
			/*Paging*/
			$batas=12;
		
			//menampilkan kategori
			$show="SELECT * FROM galeri ORDER BY id ASC LIMIT $batas";
			$showdata=mysql_query($show);
			/*paging2*/
			
			
				$j=3;
					echo"<tr>";
					$i=1;
		while($data=mysql_fetch_array($showdata)){
	
		
				$gambar=$data[gambar];
					echo"<td>
						<div class='hovergallery'>
						
							<table width=110 height=120>
							<tr>
				<td align=center><a href='#'><h4>$data[judul]</h4></a></td>
							</tr>
							<tr>
								<td align=center>
								<a  class='thumbnail' href='#'><h4>
								<img src='imgdata/$gambar' title='image' width=130px height=135px></h4></a></td>
							</tr>
							<tr>
								<td align=center>&nbsp;</td>
							</tr>
							</table>
						</div>
					</td>";
		
			if($i==$j){
				echo"</tr>";
				$j+=3;
				}
		$i+=1;
		}
		echo"</table>";
		echo"<hr color='#CCCCCC'";
	
			/*paging - jml halaman paging*/
			$tampil2="SELECT * FROM galeri LIMIT $batas";
			$sql2=mysql_query($tampil2) or die(mysql_error());
			$jmldata=mysql_num_rows($sql2);

				echo"<p><center>Total Data : <b>$jmldata</b></center></p>";
			?>
			
	</form>
