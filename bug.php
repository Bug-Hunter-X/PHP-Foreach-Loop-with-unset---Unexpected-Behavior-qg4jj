```php
function my_function($array) {
  foreach ($array as $key => $value) {
    if ($value === null) {
      unset($array[$key]);
    }
  }
  return $array;
}

$myArray = [1, 2, null, 4, null, 6];
$result = my_function($myArray);
print_r($result);
```