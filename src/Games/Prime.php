<?php

namespace Hexlet\Code\Games\Prime;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime(int $number): bool
{
    if ($number < 2) {
        return false;
    }

    for ($divisor = 2, $limit = (int) sqrt($number); $divisor <= $limit; $divisor++) {
        if ($number % $divisor === 0) {
            return false;
        }
    }

    return true;
}

function run(): void
{
    $makeQuestionAndAnswer = function (): array {
        $number = random_int(1, 100);
        $question = (string) $number;
        $correctAnswer = isPrime($number) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    runGame(DESCRIPTION, $makeQuestionAndAnswer);
}
