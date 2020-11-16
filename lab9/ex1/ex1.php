<?php
echo "<table border= \'1\' style='border-style: double' bordercolor=pink>";
for ($i = 0; $i <= 100; $i++) {
 echo "<tr>";
  for ($j = 0; $j <=100; $j++) {
     if ($j == 0 && $i == 0) {
       echo "<td><em>MULTIPLICATION TABLE</em></td>";
	 }
	 elseif ($i==0 && $j != 0) {
	 echo "<td><strong>"  .( $j ).  "</strong></td>";
     }
	 elseif ($j==0 && $i != 0) {
	 echo "<td><strong>"  .( $i ).  "</strong></td>";
	 }
	 else {
	echo "<td><strong>"  .( $i*$j ).  "</strong></td>";
    }

}
 echo "</tr>";
}
echo "</table>";
?>
