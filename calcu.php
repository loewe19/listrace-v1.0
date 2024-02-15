<?php
$a = 11;
$b = 10;
$c = 3;
function solve quadratic($a,$b,$c){

    $discriminant =$b*$b-4*$a*$c;
    if ($discriminant<0) {
        echo"l'equation n'a pas de solution reelles.";
    }else{
        $sol1=(-$b+sqrt($discriminant))/(2*$a);
        $sol2=(-$b-sqrt($discriminant))/(2*$a);

        echo"les solutions sont $sol1 et $sol2";
    }
}
solve quadratic(-1,-3,2);
?>