```php
function calculate_sum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    //Type check before summation
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      //Handle non-numeric values appropriately (e.g., log an error, skip, or throw an exception)
      error_log("Non-numeric value encountered: " . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 3, '4a'];
$sum = calculate_sum($numbers);
echo "Sum: " . $sum; 
```