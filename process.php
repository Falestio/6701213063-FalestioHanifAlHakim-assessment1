<?php
if(isset($_POST['submit'])) {
    $num1 = $_POST['number1'];
    $num2 = $_POST['number2'];
    $operator = $_POST['operator'];
    
    switch($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            $result = $num1 / $num2;
            break;
        default:
            $result = 'Invalid operator';
            break;
    }
    
    echo 'Result: ' . $result;
}
?>