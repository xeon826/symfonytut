<?php

namespace App\Controller;

// reponse is used to routes made via routes.yaml
// use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /**
    *  @Route("/lucky/number")
    */
    public function number()
    {
        // $number = random_int(0, 100);
        $item = array(
          'rand' => random_int(0, 100),
          'rand2' => random_int(0, 100),
          'rand3' => random_int(0, 100),
          'rand4' => random_int(0, 100),
          'rand5' => random_int(0, 100),
          'rand6' => random_int(0, 100),
          'rand7' => random_int(0, 100),
          'rand8' => random_int(0, 100),
          'rand9' => random_int(0, 100)
        );
        return $this->render('lucky/number.html.twig', [
          'item' => $item,
        ]);

        // return new Response(
        //   '<html><body>Lucky number: '.$number.'</body></html>'
        // );
    }
    /**
    *  @Route("/supercoolblogpost")
    */
    public function base()
    {
        return $this->render('posts/about.html.twig');
    }
    /**
    *  @Route("/articles")
    */
    public function articles()
    {
      $articles = array(
        array(
          'title' => 'book1',
          'authorName' => 'joe',
          'body' => 'a book about stuff'
        ),
        array (
          'title' => 'book2',
          'authorName' => 'bob',
          'body' => 'a book about bob'
        )
      );
      return $this->render('articles/list.html.twig', [
        'articles' => $articles
      ]);
    }
}
