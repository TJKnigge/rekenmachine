<?php

echo "sart de berekening; operator zo invoeren + = plus, - = min, * = keer, / = delen";
echo "<br>";

$gtl1 = $_GET['nr1'];
$gtl2 = $_GET['nr2'];
$var3 = $_GET['o'];
//$reken = $var3;
echo $gtl1 . "\n";
echo $gtl2 . "\n";
echo $var3;   
echo "<br>";

echo "<br>";


    
    switch ($var3){
        
        
        case "plus":
                           
            echo $gtl1 . "+" . $gtl2 . "=";
            
            echo $som=$gtl1+$gtl2;
            break;

        case "min":
                           
           echo $gtl1 . "-" . $gtl2 . "=";
            
           echo $som=$gtl1-$gtl2;   
           break; 
            
        case "keer":
                           
           echo $gtl1 . "*" . $gtl2 . "=";
            
           echo $som=$gtl1*$gtl2;  
           break; 

        case "delen":
                           
           echo $gtl1 . "/" . $gtl2 . "=";
            
           echo $som=$gtl1/$gtl2;  
           break;
           
    }


?>