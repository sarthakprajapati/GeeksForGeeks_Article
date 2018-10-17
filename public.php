<?php

//BaseClass

class pub{
public $tag_line="A Computer Science Portal for Geeks!";
function display(){
echo $this->tag_line."<br/>";
}
}

//SubClass

class child extends pub{
function show(){
echo $this->tag_line;
}
}	

//Object Declaaration

$obj= new child;
 
echo $obj->tag_line."<br/>";	
 
$obj->display();
 
$obj->show();
 
?>