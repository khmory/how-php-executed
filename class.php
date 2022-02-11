<?php
class SimpleClass
{
    public $var = 'a default value';

    public function displayVar() {
        echo $this->var;
    }
}

$obj = new SimpleClass();
echo $obj->displayVar();
