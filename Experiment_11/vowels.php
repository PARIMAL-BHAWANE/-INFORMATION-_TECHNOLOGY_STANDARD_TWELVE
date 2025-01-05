<?php 
if(isset($_POST['submit'])) 
{ 
$str=strtolower($_POST['str']); 
$vowels=array('a','e','i','o','u'); 
$len=strlen($str); 
$num=0; 
for($i=0;$i<$len;$i++) 
{ 
if(in_array($str[$i],$vowels)) 
{ 
$num++; 
} 
} 
echo "Number of vowels: $num"; 
} 
?> 