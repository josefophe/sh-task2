<?php

#This is a task on backend-development sidehustle
#its a simple task that will produce rechaege cards pins
#Using random nimber generator


#startEd by creating a function
function makePins($p){
    $rechargecard = [];

for ($i=0; $i < 200; $i++) { 
            $cardpin = rand(100000000000,999999999999);
            
            echo "<div class='card_block'>";
            
            echo "Recharge Card PIN: " . $cardpin . "<br>";

            echo "</div>";
            
        }

    return $rechargecard;
}
$cardpins = makePins(200);


?>
