jung
====

Fast signatures for PHP variables, useful for making cache keys, based on [node sigmund](https://github.com/isaacs/sigmund).

```php
require "vendor/autoload.php";

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
```

Note: Just like isaacs' sigmund, these signatures are fast and great for cache keys, but you can't get the original value back so it's not useful for much else.

<img src="http://robohash.org/rhodesjason.png?size=600x600" width="300" height="300" />
