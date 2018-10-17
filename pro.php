<?php

class pro

{

protected $x=500;

protected $y=500;
		
function sub()
{

echo $sum=$this->x-$this->y."<br/>";

}
		
}	


class child extends pro

{

function mul()

{

echo $sub=$this->x*$this->y."<br/>";

}

}	

$obj= new child;

$obj->sub();

$obj->mul();

?>