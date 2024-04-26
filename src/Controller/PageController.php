<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {

    #[Route('/')]
    public function home(Request $request) {
        
        $search = $request->get('search');
        
        /* return new Response('Welcome, página home ' . $search); */
        return $this->render('home.html.twig', ['search' => $search]);
    }
}