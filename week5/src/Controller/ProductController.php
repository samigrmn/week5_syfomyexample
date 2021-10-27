<?php
// src/Controller/ProductController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MessageGenerator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Product;

class ProductController extends AbstractController

{
    /**
     * @Route("/products")
     */
    public function list(LoggerInterface $logger): Response
    {
        $logger->info('Look, I just used a service!');

        die("fsd");
        // ...
    }

    /**
     * @Route("/products/{id}",name="detay")
     */



     public function id($id){
        $productrepo=$this->getDoctrine()->getRepository(Product::class);
        $urunbilgisi=$productrepo->find($id);
        return $this->render('task/new.html.twig',[
       'name' => $urunbilgisi->getName(),
       'price' => $urunbilgisi->getPrice(),


         ]);



     }
    public function new(MessageGenerator $messageGenerator): Response
    {
        // thanks to the type-hint, the container will instantiate a
        // new MessageGenerator and pass it to you!
        // ...

        $message = $messageGenerator->getHappyMessage();
        $number = $messageGenerator->getRandomNumber();

        echo "$number $message"; exit;
        // ...
    }
}