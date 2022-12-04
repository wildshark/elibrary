<?php
$arr = [
           1 => 'index 0',
           2 => 'index 1',
           3 => 'fffff',
           '3anothersuffix' => 'test'
];

$index1 = array_search('3', array_keys($arr)); // 2
$index2 = array_search('3anothersuffix', array_keys($arr)); //2
print_r($index1);
?>
