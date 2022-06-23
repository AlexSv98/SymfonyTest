<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage(): Response
    {
        return new Response('OMG! My first page already! WOOO!');
    }

    /**
     * @Route("/news/{slug}")
     */
    public function show(string $slug): Response
    {
        return new Response(sprintf(
            'Future page to show the article: "%s"',
            $slug
        ));
    }
}
