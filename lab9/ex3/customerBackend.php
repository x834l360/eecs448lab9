<html>
  <head>
    <title>Reciept</title>
  </head>
  <body>
  <style>
      body {
        font-family: fantasy;
		
      }
	 table{
		
		
	 }
	 table, th, td {
		border: 6px solid lightseagreen;
		border-style: double;
	  }
      .centerContent {
        width: 500px;
        margin: 0 auto;
      }

      .tableContent {
        background-color: pink;
      }

      .tableHeading {
        background-color: pink;
      }
    </style>
    <?php
     echo "<div class='centerContent' style='border: 2px  blue;'> ";
     echo "<h2>Welcome user " .$_POST['email']. " to SHOP </h2>";
     echo "<h3>Your password is " .$_POST['password']. "</h3>";

	 echo "<table class='centerContent' border= \'1\' style='border-collapse: collapse'>";
     for ($i = 0; $i < 6; $i++){
       echo "<tr>";
       for ($j = 0; $j < 4; $j++){
         if ($i==0 && $j ==0) { echo "<td class='tableHeading'></td>"; }
         if ($i==0 && $j ==1) { echo "<td class='tableHeading'><strong>  Quantity  </strong></td>"; }
         if ($i==0 && $j ==2) { echo "<td class='tableHeading'><strong> Cost Per Item </strong></td>"; }
         if ($i==0 && $j ==3) { echo "<td class='tableHeading'><strong>Sub Total </strong></td>"; }

         if ($i==1 && $j ==0) { echo "<td class='tableHeading'><strong>Heart-shaped watermelon </strong></td>"; }
         if ($i==1 && $j ==1) { echo "<td class='tableContent'>" .$_POST['heart'].  "</td>"; }
         if ($i==1 && $j ==2) { echo "<td class='tableContent'> $15.00 </td>"; }
         if ($i==1 && $j ==3) { echo "<td class='tableContent'><em> $" .(15*$_POST['heart']). "</em></td>"; }

         if ($i==2 && $j ==0) { echo "<td class='tableHeading'><strong>Square watermelon </strong></td>"; }
         if ($i==2 && $j ==1) { echo "<td class='tableContent'>" .$_POST['squre'].  "</td>"; }
         if ($i==2 && $j ==2) { echo "<td class='tableContent'> $10.00 </td>"; }
         if ($i==2 && $j ==3) { echo "<td class='tableContent'><em> $" .(10*$_POST['squre']). "</em></td>"; }

         if ($i==3 && $j ==0) { echo "<td class='tableHeading'><strong>Yellow flesh watermelon </strong></td>"; }
         if ($i==3 && $j ==1) { echo "<td class='tableContent'>" .$_POST['yellow'].  "</td>"; }
         if ($i==3 && $j ==2) { echo "<td class='tableContent'> 8.00 </td>"; }
         if ($i==3 && $j ==3) { echo "<td class='tableContent'><em> $" .(8*$_POST['yellow']). "</em></td>"; }

         if ($i==4 && $j ==0) { echo "<td class='tableHeading'><strong>Shipping </strong></td>"; }
         if ($i==4 && $j ==1) { echo "<td  class='tableContent'colspan=2>" .$_POST['shipping'].  "</td>"; }

         $shippingPrice = 0 ;
         if ($_POST['shipping'] == "7") {$shippingPrice = 0 ;}
         if ($_POST['shipping'] == "50") {$shippingPrice = 50 ;}
         if ($_POST['shipping'] == "5") {$shippingPrice = 5 ;}
         if ($i==4 && $j ==3) { echo "<td class='tableContent'><em> $" .$shippingPrice. "</em></td>"; }

         $total = 15*$_POST['heart'] + 10*$_POST['squre'] + 8*$_POST['yellow'] +$shippingPrice ;
         if ($i==5 && $j ==0) { echo "<td class='tableHeading'colspan=3 align='center'><strong>Total Cost</style> </strong></td>"; }
         if ($i==5 && $j ==3) { echo "<td  class='tableHeading'><strong> $".$total."</strong></td>"; }

       }
       echo "</tr>";
     }

     echo "</table>";
     echo "</div>";


     ?>
  </body>
</html>
