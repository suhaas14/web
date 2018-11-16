<?php

$a1 = array(
    array(1, 2,8),
    array(3, 4,4),
    array(5, 6,5)
);
$a2 = array(
    array(1, 2,8),
    array(3, 5,4),
    array(5, 9,5)
);

$result=array();





for ($i = 0; $i < 3; $i++) {

    
   for ($j = 0; $j < 3; $j++) {
for($k=0;$k<3;$k++){
              $result[$i][$j]+=$a1[$i][$k]*$a2[$k][$j];
}
}
}
for ($row = 0; $row < 3; $row++) {
echo "<br>";
   for ($col = 0; $col < 3; $col++) {
    echo " ".$a1[$row][$col];
  }
}
echo"<br>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";
   for ($col = 0; $col < 3; $col++) {
    echo " ".$a2[$row][$col];
  }
}


echo "<h3> Resultant Matrix </h3>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";
   for ($col = 0; $col < 3; $col++) {
    echo " ".$result[$row][$col];
  }
}
?>
