<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CommentAdminController extends AbstractController
{
    /**
     * @Route("/comment/admin", name="app_comment_admin")
     */
    public function index(): Response
    {
        return $this->render('comment_admin/index.html.twig', [
            'controller_name' => 'CommentAdminController',
        ]);
    }
}
