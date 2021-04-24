<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @return Response
     * @Route("/")
     */
    public function homepage()
    {
        return new Response("what a reposene from response");
    }

    /**
     * @Route("questions/{slug}")
     */
    public function show($slug)
    {
        $ans = ['fak','fak'];
        return $this->render('question/show.html.twig',[
            'question' => ucwords(str_replace('-',' ', $slug)),
            'ans' => $ans
        ]);
        //return new Response(sprintf('anotation test "%s"', ucwords(str_replace('-',' ', $slug))));
    }
}