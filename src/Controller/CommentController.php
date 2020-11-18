<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use function rand;

class CommentController extends AbstractController
{
    public function commentVote(
        string $id,
        string $direction
    ): JsonResponse {
        // TODO: Use id to query database

        if ('up' === $direction) {
            return new JsonResponse(['votes' => rand(7, 100)]);
        }

        return new JsonResponse(['votes' => rand(0, 5)]);
    }
}
