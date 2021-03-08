<?php
include __DIR__ . '/Bebras.php';
include __DIR__ . '/Udra.php';

$object1 = new Bebras;

$object2 = $object1;
// $object2 = new Bebras;

$object3 = new Udra;

echo '<pre>';
$object1->tail = 'SMALL';
echo $object1->tail;
$object1->sayTail();
$object1->getAge();

echo '<pre>';
$object3->tail = 'SHORT';
echo $object3->tail;
$object3->sayTail();
$object3->getAge();
echo '<br>';

var_dump($object1);
var_dump($object2);
var_dump($object3);
echo '</pre>';
?>