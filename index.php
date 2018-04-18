<?php
error_reporting(-1);
require_once 'classes/Product.php';


function debug($data) 
{
   echo'<pre>'.print_r($data, 1).'<pre>';

}

$book = new Product('Три мушкетера', 20, null, 1000);

$nootebook = new PrProductoduct('Dell', 1000, 'Intel', 3);

var_dump($book);
var_dump($notebook);






