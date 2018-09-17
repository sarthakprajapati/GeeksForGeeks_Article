<?php 
$array = array(
    33 => 'geeks', 
    36 => 'for', 
    42 => 'computer'
);

foreach($array as $name) {
    echo $name;
    break; // break loop after first iteration
}
?>