<?php

namespace App\Controller;

use DateTime;
use App\Entity\Sujet;
use App\Entity\Message;
use App\Form\MessageType;
use App\Repository\SujetRepository;
use App\Repository\MessageRepository;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MessageController extends AbstractController
{
    public function __construct( private ManagerRegistry $doctrine)
    {
    }

    #[Route('/message/{idSujet}', name: 'form_message')]
    public function index(Request $request,int $idSujet,SujetRepository $sujetRepository): Response
    {
    $message = new Message(); // Création d'un article vide
    // Création d'un objet formulaire spécifique à un article
    $form = $this->createForm(MessageType::class, $message);
    // Récupération du $_GET ou du $_POST
    $form->handleRequest($request);
    // Récupération de l'utilisateur connecté
    $user = $this->getUser();
    // Récupération du sujet
    $sujet = $sujetRepository->find($idSujet);
    // Si le formulaire est envoyé
    if ($form->isSubmitted() && $form->isValid()) {
    // Ajout de la date de l'article
    $message->setDate(new DateTime());
    // Ajout de l'identifiant de l'utilisateur
    $message->setIdUser($user);
    // Ajout de l'identifiant du sujet
    $message->setIdSujet($sujet);
    // Sauvegarde dans la base de données
    $em = $this->doctrine->getManager();
    $em->persist($message);
    $em->flush();
    $this->addFlash('success', 'Votre message est ajouté');
    // Redirection vers la page login
    return $this->redirectToRoute("show_sujets");
    }
    return $this->render('message/index.html.twig', [
    'form' => $form->createView(),
    ]);
    }

    #[Route('/messages/{idSujet}', name: 'show_messages')]
    public function show(MessageRepository $messageRepository,int $idSujet): Response
    {

        // Récupération des messages du sujet choisi
        $messages = $messageRepository->findBy(['id_sujet'=>$idSujet],['date'=>'ASC']);
        return $this->render('message/show.html.twig', [
            'messages' => $messages,
            'idSujet' => $idSujet
        ]);
    }
}
