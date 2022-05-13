<?php

namespace App\Controller;

use DateTime;
use App\Entity\Sujet;
use App\Form\SujetType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SujetController extends AbstractController
{
    public function __construct(private ManagerRegistry $doctrine)
    {
    }


    #[Route('/new_sujet', name: 'new_sujet')]
    public function index(Request $request): Response
    {
        $sujet = new Sujet(); // Création d'un article vide
        // Création d'un objet formulaire spécifique à un article
        $form = $this->createForm(SujetType::class, $sujet);
        // Récupération du $_GET ou du $_POST
        $form->handleRequest($request);
        // Récupération de l'utilisateur connecté
        $user = $this->getUser();
        // Si le formulaire est envoyé
        if ($form->isSubmitted() && $form->isValid()) {
            // Ajout de la date de l'article
            $sujet->setDate(new DateTime());
            // Ajout de l'identifiant de l'utilisateur
            $sujet->setIdUser($user);
            // Sauvegarde dans la base de données
            $em = $this->doctrine->getManager();
            $em->persist($sujet);
            $em->flush();
            $this->addFlash('success', 'Votre sujet a été créé');
            // Redirection vers la page login
            return $this->redirectToRoute('show_sujets');
        }
        return $this->render('sujet/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
    #[Route('/sujets', name: 'show_sujets')]
    public function show(ManagerRegistry $doctrine): Response
    {
        // Récupération de l'utilisateur connecté
        $user = $this->getUser();
        // Récupération des articles de l'utilisateur connecté
        $sujets = $doctrine
        ->getManager()
        ->getRepository('Sujet::class')
        ->findAll();
        return $this->render('sujet/show.html.twig', [
            'sujets' => $sujets,
        ]);
    }
}
