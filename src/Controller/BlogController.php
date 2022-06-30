<?php

//- Créez, dans un controleur BlogController une page "article"
// qui affiche le titre d'un article (au choix)

namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends AbstractController {


    /**
    *@Route("/@article", name="article")
    */
    public function article(){
        // oui oui nous mettons du html ici
        return new Response('LE TITRE ICI');
    }
}