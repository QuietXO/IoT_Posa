<?php
        echo '<h1>index2.php web page with parameters</h1>';

        echo '<h1>href="https://phpipaiot.azurewebsites.net">
      	Home Page</h1>';

        echo '<p> https://phpipaiot.azurewebsites.net/index2.php?A=10&B=2 </p>';

        $sn1 = $_GET["A"];
        $sn2 = $_GET["B"];

        $text = "A = " . $sn1 . " B = " . $sn2;
        $sum = $sn1 + $sn2;

        echo $text;
        echo "<br>";
        echo "Sum: " . $sum;
?>
