<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use function sprintf;
use function str_replace;

class QuestionController
{
    public function homepage(): Response
    {
        return new Response('What a bewitching controller we have conjured!');
    }

    public function show(string $slug): Response
    {
        return new Response(
            sprintf('Future page to show the question "%s"!', str_replace('-', ' ', $slug))
        );
    }
}
