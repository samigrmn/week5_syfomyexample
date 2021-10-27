<?php
// src/Service/MessageGenerator.php
namespace App\Service;

use App\Service\NumberGenerator;

class MessageGenerator
{
    private $number;

    public function __construct(NumberGenerator $number)
    {
        $this->number = $number;
    }

    public function getHappyMessage(): string
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];

        $index = array_rand($messages);

        return $messages[$index] . " Random Service Number: " . $this->number->getRandomNumber();
    }

    public function getRandomNumber()
    {
        return rand(1,100);
    }
}