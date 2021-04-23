<?php


namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class QuestionController
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
        return new Response(sprintf('anotation test "%s"', ucwords(str_replace('-',' ', $slug))));
    }
}