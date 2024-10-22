<?php
function reverseString($str) {
    return strrev($str);
}

function capitalizeWords($str) {
    return ucwords($str);
}

function countVowels($str) {
    preg_match_all('/[aeiou]/i', $str, $matches);
    return count($matches[0]);
}

function findMaxValue($array) {
    return max($array);
}

function filterEvenNumbers($array) {
    return array_filter($array, fn($num) => $num % 2 === 0);
}

function sumArray($array) {
    return array_sum($array);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f0f8ff; color: #333; padding: 20px; }
        strong { color: #007BFF; }
        p { background-color: #ffffff; border: 1px solid #007BFF; border-radius: 5px; padding: 10px; }
    </style>
</head>
<body>

<?php
echo "<p>Reversed String: <strong>" . reverseString("Kaira Technologies") . "</strong></p>";
echo "<p>Capitalized Words: <strong>" . capitalizeWords("kaira technologies") . "</strong></p>";
echo "<p>Number of Vowels: <strong>" . countVowels("Kaira Technologies") . "</strong></p>";

$array = [1, 3, 5, 7, 9];
echo "<p>Maximum Value: <strong>" . findMaxValue($array) . "</strong></p>";

$numbers = [1, 2, 3, 4, 5, 6];
echo "<p>Even Numbers: <strong>" . implode(", ", filterEvenNumbers($numbers)) . "</strong></p>";
echo "<p>Sum of Array: <strong>" . sumArray($numbers) . "</strong></p>";
?>

</body>
</html>
