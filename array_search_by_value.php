<?php 
//Multi-Dimensional Array
$array = array(
    array(
        'name' => 'Sarthak',
        'city' => 'Bareilly',
        'state' => 'Uttar Pradesh'
    ),
    array(
        'name' => 'Uday',
        'city' => 'Roorkee',
        'state' => 'Uttarakhand'
    ),
    array(
        'name' => 'Aakash',
        'city' => 'Moradabad',
        'state' => 'Uttar Pradesh'
    )
);

//User Defined Function
/*
function searchForName($name, $array) {
   foreach ($array as $key => $val) {
       if ($val['name'] == $name) {
           return $key;
       }
   }
   return null;
}
*/
//Output
/*echo "Index of Element having value Sarthak is " . searchForName('Sarthak',$array);*/

$key = array_search('Sarthak', array_column($array, 'name'));
echo "<h1>Index of Element having value Sarthak is $key</h1>";
?>