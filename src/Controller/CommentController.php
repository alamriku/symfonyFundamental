<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class CommentController extends AbstractController
{
    /**
     * @param $id
     * @param $direction
     * @return JsonResponse
     * @Route("/comments/{id}/vote/{direction<up|down>}", methods="POST") smart routes
     */

    public function commentVote($id, $direction)
    {
        //user real login here to save this to the database
        if($direction === "up"){
            $currentVoteCount = rand(7, 100);
        } else {
            $currentVoteCount = rand(0, 5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}