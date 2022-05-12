<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    #[Route('/sujets', name: 'app_sujets')]
    public function index(): Response
    {
        $sujets = [
            'Sujet1',
            'Sujet2',
            'Sujet3',
            'Sujet4',
            'Sujet5'
        ];

        return $this->render('list/index.html.twig', [
            'sujets' => $sujets,
        ]);
    }
}
