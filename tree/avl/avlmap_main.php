<?php
require_once "./AvlMap.php";
use avl\Node;
$map = new AvlMap();
$node = new \avl\Node("sfsd","sdfsd");
$startTime = time();

foreach(range(1,300000) as $key => $value)
{
    $map->add($key , $node);
}
foreach(range(1,300000) as $key => $value)
{
    $map->contains($key);
}
foreach(range(1,300000) as $key => $value)
{
    $map->remove($key);
}
echo time()-$startTime;
print_r($map);

/**
$map->preOrder();
var_dump($map->get(99));
**/

