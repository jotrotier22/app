<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MainController extends AbstractController
{
    #[Route('/main', name: 'app_main')]
    public function index(): Response
    {
        $prenoms = ['Thomas', 'Kevin', 'Nathan'];
        return $this->render('main/index.html.twig', [
            'prenoms' => $prenoms,
            // 'prenom' => 'Jonathan',
            // 'affichePrenom' => true
        ]);
    }

    #[Route('/mentions-legales', name: 'app_mentions')]
    public function mentions(): Response
    {

        return $this->render('main/mentions.html.twig');
    }


    #[Route(
        '/multi/{entier1}/{entier2}',
        name: 'multiplication',
        requirements: ['entier1' => '\d+', 'entier2' => '\d+']
    )]
    public function multiplication($entier1, $entier2) : Response {
        $resultat = $entier1 * $entier2;
        return new Response("<h1>$resultat</h1>");
    }



}
