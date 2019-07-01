<?php

// require Calculator class
require_once 'Calculator.php';

// variable for errors
$error = [];
if (!isset($_POST['calculatorData'])) {
    http_response_code(400);
    $error[] = ['calculatorData' => 'Sorry, data for calculator is required'];
} else {
    if (!$_POST['calculatorData']['firstOperand']) {
        http_response_code(400);
        $error[] = ['firstOperand' => 'Field Operand 1 is required'];
    }
    if (!$_POST['calculatorData']['secondOperand']) {
        http_response_code(400);
        $error[] = ['secondOperand' => 'Field Operand 2 is required'];
    }
}

// return errors if exist
if (!empty($error)) {
    exit(json_encode($error));
}

// if all ok, make a calculation
$calculator = new Calculator();
$result = $calculator->calculation(
    $_POST['calculatorData']['firstOperand'],
    $_POST['calculatorData']['operator'],
    $_POST['calculatorData']['secondOperand']
);
echo $result;
