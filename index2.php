<?php
        echo '<h1>index2.php web page with parameters</h1>';

        echo '<h2> https://phpipaiot.azurewebsites.net/index2.php?a=10&b=2 </h2>';
        
        $sn1 = $_GET["A"];
        $sn2 = $_GET["B"];
        
        $text = "A = " . $sn1 . " B = " . $sn2;
        $sum = $sn1 + $sn2;
        
        echo $text;
        echo "<br>";
        echo "Sum: " . $sum;
?>