<?php

namespace Hexlet\Code\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

/**
 * @param string   $description          Game description shown to the user.
 * @param callable $makeQuestionAndAnswer Function that returns [question, correctAnswer].
 */
function runGame(string $description, callable $makeQuestionAndAnswer): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line('Hello, %s!', $name);
    line($description);

    for ($round = 0; $round < ROUNDS_COUNT; $round++) {
        [$question, $correctAnswer] = $makeQuestionAndAnswer();

        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($answer !== $correctAnswer) {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return;
        }

        line('Correct!');
    }

    line('Congratulations, %s!', $name);
}
