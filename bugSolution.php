```php
function my_function_fixed($array) {
  // Use array_filter to create a new array without null values
  return array_filter($array, function ($value) {
    return $value !== null;
  });
}

$myArray = [1, 2, null, 4, null, 6];
$result = my_function_fixed($myArray);
print_r($result);

//Alternative solution using foreach and a new array
function my_function_fixed2($array) {
  $newArray = [];
  foreach ($array as $value) {
    if ($value !== null) {
      $newArray[] = $value;
    }
  }
  return $newArray;
}

$myArray = [1, 2, null, 4, null, 6];
$result2 = my_function_fixed2($myArray);
print_r($result2);
```