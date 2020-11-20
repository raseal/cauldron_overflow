<?php

declare(strict_types=1);

namespace App\Controller;

use Knp\Bundle\MarkdownBundle\MarkdownParserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use function str_replace;

class QuestionController extends AbstractController
{
    public function homepage(): Response
    {
        return $this->render('question/homepage.html.twig');
    }

    public function show(string $slug, MarkdownParserInterface $markdown_parser): Response
    {
        $answers = [
            '`Answer` 1',
            'Answer 2',
            'Answer 3',
        ];

        $question_text = "I've been turned into a cat, any thoughts on how to turn back? While I'm **adorable**, I don't really care for cat food.";
        $parsed_question_text = $markdown_parser->transformMarkdown($question_text);

        return $this->render(
            'question/show.html.twig',
            [
                'question' => str_replace('-', ' ', $slug),
                'answers' => $answers,
                'question_text' => $parsed_question_text,
            ]
        );
    }
}
