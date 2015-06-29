<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Kesbangpol Kota Semarang</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<center>
  <div id="main_block">
    <!--Top Block Starts -->
    <div id="top_block">
      <div class="navi"> <a href="index.php" class="navi_tx">Home</a> <a href="index.php?option=profil" class="navi_tx">Profil</a> <a href="index.php?option=sejarah" class="navi_tx">Sejarah </a> <a href="index.php?option=images" class="navi_tx">Galeri</a> <a href="index.php?option=art" class="navi_tx">Lasida(SMG) </a></div>
      <div class="tp_img1"></div>
    </div>
    <!--Top Block Ends -->
  </div>
  <div id="sub_block1">
    <!--Content Block Starts -->
    <div id="content_block">
      <!--Left Block Starts -->
      <div id="left_block"><span class="blk2_lp"> 
	    <span class="nws">Agenda Kegiatan</span> 
	  <?php
include "koneksi.php";
$data="SELECT * FROM  kegiatan";
$query=mysql_query($data);
while($arraytampil=mysql_fetch_array($query)){

 
?>
	<span class="dat" style="margin-top:22px;"><span><?php echo"$arraytampil[1]"; ?></span> | <?php echo"$arraytampil[2]"; ?><br />
        <?php echo"$arraytampil[4]"; ?></span>
		
		<?php } ?>
		<span class="dat"><br />
        <br />
        <a href="index.php?option=agenda">Lihat semua agenda
        </a></span> </span> </div>
      <!--Left Block Ends -->
      <!--Right Block Starts -->
      <div id="right_block"> 
	  
	  <span class="modul"> 
	 	<?php
		extract ($_POST);
		extract ($_GET);
		
		if (isset($option))
		{
			include "$option.php";
			}
			else
			{
    ?>
	  <span class="wel">Selamat Datang</span> <span class="inr_bllk"><span class="txt"><?php
include "koneksi.php";
$data="SELECT * FROM  menu WHERE judulmenu='beranda'";
$query=mysql_query($data);
$arraytampil=mysql_fetch_array($query);
echo"$arraytampil[2]"; 
?> <br />
        <br />
	  </span>
			<?php } ?>
		
		 </span> <a href="http://all-free-download.com/free-website-templates/"></a> </span> <img src="images/rp_ln.gif" alt="" class="rp_ln" /><span class="spcl_blk"> <img src="images/rp_ln.gif" alt="" class="rp_ln" /></span>
		
	 </div>
      <!--Right Block Ends -->
      <!--Content Block Ends -->
    </div>
  </div>
  <div id="sub_block2">
    <div id="footer_block"><span class="cpy">Copyright &copy; 2015, All rights reserved.</span> </div>
  </div>
</center>
</body>
</html>
