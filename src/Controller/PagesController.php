<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route('/pages', name: 'app_pages')]
    public function index(): Response
    {
        $this->addFlash('success', 'Bienvenue sur la page ! 🎉');

        return $this->render('pages/index.html.twig'); 
    }
    #[Route('/about', name: 'app_about')]
    public function about(): Response
    {
        $this->addFlash('info', 'Vous êtes sur la page À Propos.');

        return $this->render('pages/about.html.twig');
       
    }
    #[Route('/connexion', name: 'app_connexion')]
    public function connexion(): Response
    {
        $this->addFlash('info', 'Vous êtes sur la page Connexion.');

        return $this->render('pages/Connexion.html.twig');
       
    }
    #[Route('/inscription', name: 'app_inscription')]
    public function inscription(): Response
    {
        $this->addFlash('info', 'Vous êtes sur la page Inscription.');

        return $this->render('pages/Inscription.html.twig');
       
    }
}
