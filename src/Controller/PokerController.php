<?php
// Créez un nouveau contrôleur PokerController
// Créez à l'intérieur une nouvelle route pour la page de poker
// Dans cette page, récupérez le parametre d'âge que l'utilisateur peut mettre dans l'url
// Si l'âge est supérieur à 18, mettez un message de bienvenue
// Sinon mettez un message de refus

namespace App\Controller ;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PokerController extends AbstractController {
    /**
     * @Route("/poker/{id}", name="poker")
     */
    public function poker($id){
        $age = $id;

        if($age >= 18) {
            return new Response('Bienvenue');
        }
        else{
            return $this->redirectToRoute('digimon');
        }
    }
}