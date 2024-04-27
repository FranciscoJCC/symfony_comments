<?php

namespace App\Controller;

use App\Entity\Comment;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
//use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {

    #[Route('/')]
    public function home(EntityManagerInterface $entityManager): Response {
        
        $comments = $entityManager->getRepository(Comment::class)->findBy([], [
            'id' => 'DESC'
        ]);

        /* return new Response('Welcome, página home ' . $search); */
        return $this->render('home.html.twig', [
            'comments' => $comments
        ]);
    }
}