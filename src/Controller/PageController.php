<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController {

    #[Route('/')]
    public function home(Request $request) {
        
        $search = $request->get('search');
        
        return new Response('Welcome, página home ' . $search);
    }
}