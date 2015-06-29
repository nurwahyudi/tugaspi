<?php
include "koneksi.php";
$tanggal = date("l, d F Y H:i:s");
$data="SELECT * FROM artikel WHERE judul='$judul'";
$query=mysql_query($data);
$array=mysql_fetch_array($query);
?>
      	
         <h2><?php echo "$array[1]"; ?></h2>
		 <?php echo "<i>$array[4]&nbsp;&curren;&nbsp;$array[6]</i><br><br>"; ?>

         <p align="justify"><?php echo "$array[2]"; ?>.</p>


