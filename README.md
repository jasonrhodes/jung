jung
====

Fast signatures for PHP variables, useful for making cache keys, based on node sigmund.

```php
use \rhodesjason\Jung as jung;

jung::sign(55);             // "55"
jung::sign([3,4,5])         // "{031425"
jung::sign(null);           // ""
jung::sign(function () {}); // ""

$a = new stdClass;
$a->fruit = "apple";
$a->list = [1,3,4];
$a->obj = new stdClass;
$a->obj->words = "a cool thing";

jung::sign($a);             // "{fruitapplelist{011324obj{wordsa cool thing"
