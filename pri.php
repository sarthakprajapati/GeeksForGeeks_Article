<?php

class demo

{

private $name="A COmputer Science Portal for Geeks!";

private function show()

{

echo "This is private method of parent class";

}

}	


class child extends demo

{

function display()

{

echo $this->name;

}

}	

$obj= new child;

//$obj->show();

$obj->display();

?>