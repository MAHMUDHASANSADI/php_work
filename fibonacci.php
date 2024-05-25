<?php
$veryOld=0;
$old=1;
$new=1;

//loop

for($i=0;$i<=10;$i++){
    echo $veryOld." ";

    $old=$new;
    $new=$veryOld+$old;
    $veryOld=$old;

   
}