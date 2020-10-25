<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use function str_replace;

class QuestionController extends AbstractController
{
    public function homepage(): Response
    {
        return $this->render('question/homepage.html.twig');
    }

    public function show(string $slug): Response
    {
        $answers = [
            'Answer 1',
            'Answer 2',
            'Answer 3',
        ];

        return $this->render(
            'question/show.html.twig',
            [
                'question' => str_replace('-', ' ', $slug),
                'answers' => $answers,
            ]
        );
    }
}
