<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use function rand;

class CommentController extends AbstractController
{
    public function commentVote(
        string $id,
        string $direction,
        LoggerInterface $logger
    ): JsonResponse {
        // TODO: Use id to query database

        if ('up' === $direction) {
            $logger->info('Voting up');
            return new JsonResponse(['votes' => rand(7, 100)]);
        }

        $logger->info('Voting down');
        return new JsonResponse(['votes' => rand(0, 5)]);
    }
}
