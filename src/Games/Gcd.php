<?php

namespace Hexlet\Code\Games\Gcd;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'Find the greatest common divisor of given numbers.';

function gcd(int $firstNumber, int $secondNumber): int
{
    $a = $firstNumber;
    $b = $secondNumber;

    while ($b !== 0) {
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }

    return abs($a);
}

function run(): void
{
    $makeQuestionAndAnswer = function (): array {
        $firstNumber = random_int(1, 100);
        $secondNumber = random_int(1, 100);

        $question = "{$firstNumber} {$secondNumber}";
        $correctAnswer = (string) gcd($firstNumber, $secondNumber);

        return [$question, $correctAnswer];
    };

    runGame(DESCRIPTION, $makeQuestionAndAnswer);
}
