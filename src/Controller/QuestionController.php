<?php


namespace App\Controller;


use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Twig\Environment;

class QuestionController extends AbstractController
{
    /**
     * @return Response
     * @Route("/",name="app_hompage")
     */
    public function homepage(Environment $twigEnvironment)
    {
//        $html = $twigEnvironment->render('question/homepage.html.twig');
//        return new Response($html);
       return  $this->render('question/homepage.html.twig');
    }

    /**
     * @Route("questions/{slug}",name="app_question_show")
     */
    public function show($slug, MarkdownParserInterface $markdownParser)
    {
        $answers = [
            '`Markdown` aliquet quam id dui posuere blandit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
            'Donec rutrum congue leo eget malesuada.'
        ];
        $questionText = "I've been turned into a cat, any thoughts on how to turn back? While I'm **adorable**, I don't really care for cat food.";
        $parsedQuestion = $markdownParser->transformMarkdown($questionText);
        return $this->render('question/show.html.twig',[
            'question' => ucwords(str_replace('-',' ', $slug)),
            'questionText' => $parsedQuestion,
            'answers' => $answers
        ]);
        //return new Response(sprintf('anotation test "%s"', ucwords(str_replace('-',' ', $slug))));
    }
}