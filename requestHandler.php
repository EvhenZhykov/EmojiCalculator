<?php

require_once 'Calculator.php';

if (!isset($_POST['calculatorData'])) {
    echo 'Sorry, have not data';
} else {
    if(!$_POST['calculatorData']['firstOperand']){
        http_response_code(400);
        echo 'Field Operand 1 is required';
        exit;
    }
    if(!$_POST['calculatorData']['operator']){
        http_response_code(400);
        echo 'Field Operator is required';
        exit;
    }
    if(!$_POST['calculatorData']['secondOperand']){
        http_response_code(400);
        echo 'Field Operand 2 is required';
        exit;
    }
    $calculator = new Calculator();
    $result = $calculator->calculation(
        $_POST['calculatorData']['firstOperand'],
        $_POST['calculatorData']['operator'],
        $_POST['calculatorData']['secondOperand']
    );
    echo $result;
}
