
<?php 
$marks=array(75,88,91,79,83); 
$total=0; 
$i=0; 
echo "<b>marks in English: " .$marks[0] .",<br>Marks in Hindi ".$marks[1].", 
<br>Marks in Marathi " .$marks[2] .",<br>Marks in Maths ".$marks[3] .", 
<br>Marks in Information Technology " .$marks[4] . "."; 
 
for($i=0;$i<count($marks);$i++) 
{ 
$total=$total+$marks[$i]; 
} 
$per=$total*100/500; 
echo "<br> Total marks obtained by student: $total"; 
echo "<br> Percentage Obtain is: $per"; 
?> 