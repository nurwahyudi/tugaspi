
<?php
include "koneksi.php";
$batas=10;
			$halaman=$_GET['halaman'];
			if(empty($halaman)){
				$posisi=0;
				$halaman=1;
			}else{
				$posisi=($halaman-1)*$batas;
			}
			/*paging2*/
			$tampil="SELECT * FROM kegiatan  ORDER BY id DESC LIMIT $posisi,$batas";
			$sql=mysql_query($tampil) or die(mysql_error());
						
				$no=$posisi+1;
				?>
<div class="table-responsive">
                                <table width="635" rules="all" border="1">
                                    <thead>
                                        <tr>
                                          <th width="96" bgcolor="#CCCCCC">kegiatan </th>
                                          <th width="124" bgcolor="#CCCCCC">waktu</th>
                                          <th width="104" bgcolor="#CCCCCC">Lokasi</th>
                                          <th width="283" bgcolor="#CCCCCC">Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									<?php
									while($arraytampil=mysql_fetch_array($sql))
									{
									?>
                                        <tr class="odd gradeX">
                                          <td><?php echo "<smal>$arraytampil[1]</small>"; ?></td>
                                          <td><?php echo "<smal>$arraytampil[2]</small>"; ?></td>
                                          <td><?php echo "<smal>$arraytampil[3]</small>"; ?></td>
                                          <td><?php echo "<smal>$arraytampil[4]</small>"; ?></td>
                                        </tr>
                                  <?php } ?>
                                    </tbody>
  </table>
</div>

<?php

	$tampil2="SELECT * FROM kegiatan ";
			$sql2=mysql_query($tampil2) or die(mysql_error());
			$jmldata=mysql_num_rows($sql2);
			$jmlhalaman=ceil($jmldata/$batas);
			
			
			echo"<center><br>Halaman : ";
			
			for($i=1;$i<=$jmlhalaman;$i++)
			{
				if($i!=$halaman){
					echo"<a href=index.php?option=agenda&halaman=$i>$i</a> | ";
				}else{
					echo"<b>$i</b> | ";
				}
				
			}
				echo"<p><center>Total Data : <b>$jmldata</b></center></p>";
			?>