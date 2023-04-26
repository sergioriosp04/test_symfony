<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends AbstractController
{

   /**
    * @Route("/lucky/number")
    */
    public function number(LoggerInterface $logger): Response
    {
        $logger->info('I am using a service, in this case logger');
        $number = random_int(0, 100);

//        return new Response(
//            '<html><body>Lucky number: '.$number.'</body></html>'
//        );
        return $this->render('lucky/number.html.twig', [
            'number' => $number,
        ]);
    }

}