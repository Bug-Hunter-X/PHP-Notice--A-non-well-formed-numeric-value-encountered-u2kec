```php
function calculateSum(array $numbers): int {
  $sum = 0;
  foreach ($numbers as $number) {
    $sum += $number;
  }
  return $sum; // Return type is explicitly defined as int
}

$numbers = [1, 2, '3']; // Mixed array type
$result = calculateSum($numbers);
echo $result; // This will cause a warning or error
```