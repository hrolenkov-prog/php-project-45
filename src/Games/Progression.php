<?php

namespace Hexlet\Code\Games\Progression;

use function Hexlet\Code\Engine\runGame;

const DESCRIPTION = 'What number is missing in the progression?';
const MIN_LENGTH = 5;
const MAX_LENGTH = 10;

function generateProgression(int $start, int $step, int $length): array
{
    $progression = [];

    for ($index = 0; $index < $length; $index++) {
        $progression[] = $start + $index * $step;
    }

    return $progression;
}

function run(): void
{
    $makeQuestionAndAnswer = function (): array {
        $length = random_int(MIN_LENGTH, MAX_LENGTH);
        $start = random_int(1, 50);
        $step = random_int(1, 10);

        $progression = generateProgression($start, $step, $length);
        $hiddenIndex = random_int(0, $length - 1);
        $correctAnswer = (string) $progression[$hiddenIndex];

        $progressionWithHidden = $progression;
        $progressionWithHidden[$hiddenIndex] = '..';

        $question = implode(' ', $progressionWithHidden);

        return [$question, $correctAnswer];
    };

    runGame(DESCRIPTION, $makeQuestionAndAnswer);
}
