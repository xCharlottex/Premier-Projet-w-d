<?php

namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// je créé une classe avec le meme nom que le fichier
// suffixée par controller

class PageController extends AbstractController {

    /**
     * @Route("/", name="home")
     *
     * je créé une route, en utilisant des commentaires PHP
     * et "@Route" pour spécifier l'url de la page que je veux créer
     * La route est situé au dessus de la méthode à appeler
     * pour la page
     */
    public function home()
    {
        //var_dump('test accueil'); die;

        //je renvoie une réponse HTTP grâce à l'objet Response
        //(du composant http foundation de Symfony)
        //Ca affichera donc 'hello accueil' quand
        // l'url "/" sera demandé
        return new Response('');
    }

    // - Créez une page contact qui affiche une chaine de caractère "contact"

    // créer une route + lui donner un nom
    // appeler la fonction et METS TON PUTIN DE MSG
    // var_dump => type de contenu + le nombre de caractere a l'interieur+ message affiché
    // return new reponse => afficher exclusivement ton msg
    /**
     * @Route("contact", name="contact")
     */
    public function contact(){
        return new Response('contact');
    }
}




