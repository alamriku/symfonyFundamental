<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController extends AbstractController
{
    /**
     * @return Response
     * @Route("/",name="app_hompage")
     */
    public function homepage()
    {
        return  $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("questions/{slug}",name="app_question_show")
     */
    public function show($slug)
    {
        $ans = ['fak','fak'];

        return $this->render('question/show.html.twig',[
            'question' => ucwords(str_replace('-',' ', $slug)),
            'answers' => ['fak','fak']
        ]);
        //return new Response(sprintf('anotation test "%s"', ucwords(str_replace('-',' ', $slug))));
    }
}