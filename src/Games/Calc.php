<?php

namespace Hexlet\Code\Games\Calc;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'What is the result of the expression?';

function calculate(int $firstNumber, int $secondNumber, string $operator): int
{
    switch ($operator) {
        case '+':
            return $firstNumber + $secondNumber;
        case '-':
            return $firstNumber - $secondNumber;
        case '*':
            return $firstNumber * $secondNumber;
        default:
            throw new \InvalidArgumentException("Unknown operator: {$operator}");
    }
}

function run(): void
{
    $makeQuestionAndAnswer = function (): array {
        $firstNumber = random_int(1, 100);
        $secondNumber = random_int(1, 100);
        $operators = ['+', '-', '*'];
        $operator = $operators[array_rand($operators)];

        $question = "{$firstNumber} {$operator} {$secondNumber}";
        $correctAnswer = (string) calculate($firstNumber, $secondNumber, $operator);

        return [$question, $correctAnswer];
    };

    runGame(DESCRIPTION, $makeQuestionAndAnswer);
}
