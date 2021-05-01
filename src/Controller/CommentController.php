<?php


namespace App\Controller;


use Psr\Log\LoggerInterface;
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

    public function commentVote($id, $direction, LoggerInterface $logger)
    {
        //user real login here to save this to the database
        if($direction === "up"){
            $logger->info('Voting up');
            $currentVoteCount = rand(7, 100);
        } else {
            $logger->info('Voting down');
            $currentVoteCount = rand(0, 5);
        }

        return $this->json(['votes' => $currentVoteCount]);
    }
}