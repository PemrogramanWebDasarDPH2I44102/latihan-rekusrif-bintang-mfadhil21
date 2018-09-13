<?php
$batas=5;
function rekursif($i = 1){
global $batas;
  echo "*";
  $i++;
 
  if($i<=$batas){
  	rekursif($i);
  }else{
  	echo"<br>";
  	$batas--;
  if($batas !=0){
  	rekursif();
 	 }
	}
}
 rekursif();


echo "<br>";

//=============================
$batas1=1;
function rekursif1($t=1){
global $batas1;
echo "$t";
$t++;

if($t<=$batas1){
	rekursif1($t);
}else {
	echo "<br>";
	$batas1++;
	if($batas1<=5){
		rekursif1();
	}
	}
}
rekursif1();
?>
