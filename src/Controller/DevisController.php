<?php

namespace App\Controller;

use App\Entity\Devis;
use App\Form\FormulaireDevisType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DevisController extends AbstractController
{
    #[Route('/devis', name: 'app_devis')]

    public function index(Request $request): Response
    {
        $devis = new Devis();
        $form = $this->createForm(FormulaireDevisType::class,$devis);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            dd($form->getData());
        }



        return $this->render('devis/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
