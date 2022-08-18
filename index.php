<?php 

require __DIR__.'/vendor/autoload.php';
use Rafayrty\LinkedListPhp\SinglyList;

$linked_list = new SinglyList();
$linked_list->push(5);

$linked_list->remove(0);
$linked_list->push(5);
$linked_list->push(6);

// $linked_list->remove(1);
$linked_list->pop();


var_dump($linked_list);
