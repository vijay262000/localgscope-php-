<?php

echo "Welocme scope and global vars in php<br>";
$a = 98; //global variable
$a = 9;

function printvalue(){
    //$a = 97; //local variable
    global $a, $b; //give me the access to this variable
    $a = 100;
    $b =1000;
    echo "<br> the value of variable a is $a and b is $b";
}
echo "$a";
printvalue();
echo "<br> the value of variable a is $a and b is $b";


?>