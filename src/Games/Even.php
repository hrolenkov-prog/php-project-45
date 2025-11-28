<?php

namespace Hexlet\Code\Games\Even;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'Answer "yes" if the number is even, otherwise answer "no".';

function isEven(int $number): bool
{
    return $number % 2 === 0;
}

function run(): void
{
    $makeQuestionAndAnswer = function (): array {
        $number = random_int(1, 100);
        $question = (string) $number;
        $correctAnswer = isEven($number) ? 'yes' : 'no';

        return [$question, $correctAnswer];
    };

    runGame(DESCRIPTION, $makeQuestionAndAnswer);
}
