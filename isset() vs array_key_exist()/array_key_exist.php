<?php 
$array = array(
  'name' => null
);
// Prints: "array key exists" because $array['name'] exists, even if it is null.
echo array_key_exists('name', $name) ? 'array key exists' : 'array key does not exist';
?>