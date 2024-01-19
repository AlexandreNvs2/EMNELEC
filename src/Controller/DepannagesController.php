<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DepannagesController extends AbstractController
{
    #[Route('/depannages', name: 'app_depannages')]
    public function index(): Response
    {
        return $this->render('depannages/index.html.twig', [
            'controller_name' => 'DepannagesController',
        ]);
    }
}
