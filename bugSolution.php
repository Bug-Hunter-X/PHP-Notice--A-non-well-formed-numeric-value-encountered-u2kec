```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    // Use type checking to ensure we only add numeric values
    if (is_numeric($number)) {
      $sum += (int)$number; // Cast to int for accurate summation
    } else {
      // Handle non-numeric values as needed, such as logging an error or throwing an exception
      trigger_error('Non-numeric value encountered in array', E_USER_WARNING);
    }
  }
  return $sum;
}

$numbers = [1, 2, '3', 4.5, 'abc']; // Mixed array type
$result = calculateSum($numbers);
echo $result; // Output: 10 (ignores the 'abc')
```