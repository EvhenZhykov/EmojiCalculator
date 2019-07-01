<?php

/**
 * Class Calculator
 */
class Calculator
{

    /**
     * @param float $firstOperand
     * @param $operator
     * @param float $secondOperand
     * @return float
     */
    public function calculation(float $firstOperand, $operator, float $secondOperand): float
    {
        switch ($operator) {
            case '+':
                return $firstOperand + $secondOperand;
                break;

            case '-':
                return $firstOperand - $secondOperand;
                break;

            case '*':
                return $firstOperand * $secondOperand;
                break;

            case '/':
                return $firstOperand / $secondOperand;
                break;

            default:
                return "Sorry No command found";
        }
    }
}
