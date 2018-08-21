<?php

namespace App\Controller;

// reponse is used to routes made via routes.yaml
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
  /**
  *  @Route("/lucky/number")
  */
    public function number()
    {
        $number = random_int(0, 100);
        return $this->render('lucky/number.html.twig', [
          'number' => $number,
        ]);

        // return new Response(
        //   '<html><body>Lucky number: '.$number.'</body></html>'
        // );
    }
}
