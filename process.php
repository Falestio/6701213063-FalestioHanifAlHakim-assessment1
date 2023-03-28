<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $operator = $_POST['operator'];
    
    if ($operator == '+') {
        $result = $number1 + $number2;
    } else if ($operator == '-') {
        $result = $number1 - $number2;
    } else if ($operator == '/') {
        $result = $number1 / $number2;
    } else if ($operator == '*') {
        $result = $number1 * $number2;
    }
    
    echo "Hasil operasi $number1 $operator $number2 adalah $result";
}
?>