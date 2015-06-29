<h2>Sejarah Kesbangpol</h2>
<?php
include "koneksi.php";
$data="SELECT * FROM  menu WHERE judulmenu='sejarah'";
$query=mysql_query($data);
$arraytampil=mysql_fetch_array($query);
echo"$arraytampil[2]"; 
?>