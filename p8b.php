<?php
$trans = array(
    array(1, 2,8),
    array(3, 4,4),
    array(5, 6,5)
);
echo "<h3> Matrix </h3>";
for ($row = 0; $row < 3; $row++) {
     echo "<br>";
   for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$row][$col];
  }
}
echo "<h3> Transposed Matrix </h3>";
for ($row = 0; $row < 3; $row++) {
echo "<br>";
   for ($col = 0; $col < 3; $col++) {
    echo " ".$trans[$col][$row];
  }
}
?>
