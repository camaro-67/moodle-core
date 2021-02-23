<?php

function foo(){
    require('var.php');
    return $foo;
}

for($a=1;$a<=5;$a++){
    echo foo()."\n";
}

//bar
//bar
//bar
//bar
//bar
//The require_once expression is identical to require except PHP will check if the file has already been included, and if so, not include (require) it again.
