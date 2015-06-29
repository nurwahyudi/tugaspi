<h2>Profil</h2>
<?php
include "koneksi.php";
$data="SELECT * FROM  menu WHERE judulmenu='Profil'";
$query=mysql_query($data);
$arraytampil=mysql_fetch_array($query);
echo"$arraytampil[2]"; 
?>