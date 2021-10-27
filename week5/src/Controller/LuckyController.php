<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Service\MessageGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
     * @Route("/lucky/number")
     */
    public function number(MessageGenerator $messageGenerator)
    {
        $number = random_int(0, 100);
        $message = $messageGenerator->getHappyMessage();

        return $this->render('lucky/number.html.twig', [
            'number' => $number,
            'message' => $message
        ]);
    }
}