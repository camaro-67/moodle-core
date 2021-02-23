<?php

function foo(){
    require('var.php');
    return $foo;
}

for($a=1;$a<=5;$a++){
    echo foo()."\n";
}
