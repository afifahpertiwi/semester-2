<?php
require_once "class_persegipanjang.php";
$persegiPanjang1 = new persegipanjang(5,3);
$persegiPanjang2 = new persegipanjang(7,5);
echo"luas persegi panjang  I".$persegiPanjang1->getluas();
echo"<br>luas persegi panjang II".$persegipanjang2->getluas ();
echo "<br>keliling persegi panjang I".$persegiPanjang1->getkeliling();
echo "<br>keliling persegi panjang II".$persegipanjang2->getkeliling();
?>