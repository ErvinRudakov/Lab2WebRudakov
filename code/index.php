<?php
//1. Доступ по ссылке
//$very_bad_unclear_name="15 chicken wings";
//
//$reference = &$very_bad_unclear_name;
//$reference = '2 number 9s a number 9 large a number 6 with extra dip, a number 7 two numbers 45s one with cheese and a large soda.';
//
// echo("Your order is: $very_bad_unclear_name");

// 2. Числа
$number = 3;
echo("\$number: $number\n");

echo("\n");
$float = 3.3;
echo("\$float: $float\n");
echo(6+6);
$last_month = 1187.23;
$this_month = 1089.98;
echo($last_month - $this_month);
$languages_amount = 4;
echo("\n");
$months = 11;
$days = $months * 16;
$days_per_language = $days/$languages_amount;
echo("\$days_per_language: $days_per_language\n");

echo("8^2 = " . 8**2 ."\n");

$my_num = 14;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo("\$answer: ".$answer."\n");

$a = 10; $b = 3;
echo("\$a%\$b = " . ($a % $b)."\n");
$result = $a % $b;
if ($result === 0) {
    echo("Делится " . $a / $b."\n");
}
else {
    echo("Делится с остатком " . $result."\n");
}

$st = pow(2,10);
echo(sqrt(245)."\n");
$arr = [4, 2, 5, 19, 13, 0, 10];
$result = 0;
foreach ($arr as $item) {
    $result += $item;
}
echo(sqrt($result)."\n");

$sqrt = sqrt(379);
echo(round($sqrt)."\n");
echo(round($sqrt, 1)."\n");
echo(round($sqrt, 2)."\n");
$sqrt = sqrt(587);
$arr = [];
$arr['floor'] = floor($sqrt);
$arr['ceil'] = ceil($sqrt);
print_r($arr);

$arr = [4, -2, 5, 19, -130, 0, 10];
echo("max: " . max($arr)."\n");
echo("min: " . min($arr)."\n");

echo(random_int(1, 100)."\n");

$arr = [];
for ($i = 0; $i < 10; $i++) {
    $arr[$i] = random_int(1,100);
}
print_r($arr);

$a = 5;
$b = 3;
echo(abs(3-5)."\n");

$arr =  [1, 2, -1, -2, 3, -3];
foreach ($arr as &$item) {
    $item = abs($item);
}
print_r($arr);

$number = 30;
$arr = [];
for ($i = 1; $i < ($number / 2) + 1; $i++) {
    if ($number % $i === 0) {
        $arr[] = $i;
    }
}
echo("\n");
print_r($arr);
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
unset($item);
$sum = 0;
$n = 0;
foreach ($arr as $item) {
    $n++;
    $sum += $item;
    if($sum > 10) {
        break;
    }
}
echo($n."\n");

function printStringReturnNumber(int $number): int{
    echo($number."\n");
    return $number;
}
$my_num = printStringReturnNumber(3);
echo($my_num."\n");

$length = 5;
for ($i = 0; $i < $length; $i++) {
    echo(str_repeat('x', $i+1)."\n");
}

function arrayFill($value, int $times): array{
    $result = [];
    for ($i = 0; $i < $times; $i++) {
        $result[$i] = $value;
    }
    return $result;
}
echo("\n");
print_r(arrayFill('x', 5));

$array = [[1, 2, 3], [4, 5], [6]];
$sum = 0;
foreach ($array as $subArray) {
    foreach ($subArray as $item) {
        $sum += $item;
    }
}
echo($sum."\n");

$arr = [];
for ($i = 0; $i < 3; $i++) {
    for ($j = 1; $j < 4; $j++) {
        $arr[$i][] = $i * 3 + $j;
    }
}
echo("\n");
print_r($arr);
$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo($result."\n");

$user = ['name' => 'Alexey', 'surname' => 'Alexeyev', 'patronimic' => 'Alexeyevich'];
echo($user['surname'] . ' ' . $user['name'] . ' ' . $user['patronimic']."\n");

$date = ['year' => '2022', 'month' => '09', 'day' => '17'];
echo($date['year'] . '-' . $date['month'] . '-' . $date['day']."\n");

$arr = ['a', 'b', 'c', 'd', 'e'];
echo(count($arr)."\n");

$arr = ['a', 'b', 'c', 'd', 'e'];
echo($arr[count($arr) - 1]."\n");
echo($arr[count($arr) - 2]."\n");

function twoNumbers(int $first, int $second): bool{
    return $first + $second > 10;
}

function twoNumberEqual(int $first, int $second): bool{
    return  $first === $second;
}

echo("\n");
$test = 1;
echo ($test == 0 ? 'верно':'\n');
$age = 10;
if ($age < 10 || $age > 99) {
    echo('число меньше 10 или больше 99\n');
}
else {
    $sum = 0;
    while ($number > 0) {
        $digit = (int)$number % 10;
        $number /= 10;
        $sum += $digit;
    }
    if ($sum <=9) {
        echo('сумма цифр однозначна\n');
    }
    else
    {
        echo('сумма цифр двузначна\n');
    }
}

$arr = [1, 2, 3];
if (count($arr) === 3) {
    $sum = 0;
    foreach ($arr as $item) {
        $sum += $item;
    }
    echo($item."\n");
}

echo("\n");

$length = 20;
for ($i = 0; $i < $length; $i++) {
    echo(str_repeat('x', $i+1)."\n");
}
echo ("\n");

$arr = [1, 2, 3];
echo(array_sum($arr) / count($arr)."\n");

echo(array_sum(range(1, 100))."\n");

$arr = [4, 16, 25];
echo("\n");
print_r(array_map(static function($item) {return sqrt($item);}, $arr));

$keys = range('a', 'z');
$items = range(1, 26);
print_r(array_combine($keys, $items));
$str = "1234567890";
$arr = str_split($str, 2);
echo(array_sum($arr));