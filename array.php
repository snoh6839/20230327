<?php
    $lunchMen =  array("초밥", "유부초밥", "김밥", "냉면", "라면", "돈까스", "쫄면");
    $randMenu = $lunchMen[array_rand($lunchMen)];
    echo $randMenu;
    
    // for ($i=0; $i < 7; $i++) { 
    //     echo $lunchMen[$i];
    //     echo " ";
    // }
    
?>