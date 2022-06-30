<?php
// dans une nouvelle page (nouveau contrôleur),
// affichez un article issu de la liste d'article en fonction
// de l'id de l'article passé en parametre dans l'url de votre page

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController {
    /**
     * @Route("/premierarticle", name="premierarticle")
     */
    public function premierarticle (Request $request){
        $articles = [
            1 => [
                'title' => 'ici, le titre',
                'contenu' => 'son contenu'
            ],
            2 => [
                'title' => 'le second titre',
                'contenu' => 'second contenu'
            ],
            3 => [
                'title' => 'le troisieme titre',
                'contenu' => 'troisieme contenu'
            ]
        ];
            $id = $request->query->get('id');

            $article = $articles[$id];

            return new Response($article['title']);
    }
    /**
     * @Route("/deuxiemearticle/{id}", name="deuxiemearticle")
     * si je veux avoir une url plus "propre" je peux utiliser, au lieu d'un query parameter id,
     * une wildcard dans l'url
     * pour ça je créé mon url en précisant que l'id est variable en le passant entre accolades
     */
    // je demande à Symfony de récupérer la valeur de l'id en passant en parametre de la méthode
    // une variable qui a le même nom que la wildcard
    public function deuxiemearticle($id)
    {

        // fake requête SQL "SELECT * FROM article";
        $articles = [
            1 => [
                'title' => 'La canicule, il fait chaud',
                'content' => 'je transpire'
            ],
            2 => [
                'title' => 'Fin des moteurs thermiques en 2035',
                'content' => 'BROUM'
            ],
            3 => [
                'title' => "L'alcool c'est pas cool",
                'content' => "Pourquoi y'a cool dans alcool ?"
            ]
        ];

        // trouver dans la liste des articles l'article qui correspond à l'id récupéré
        $article = $articles[$id];

        // afficher son titre en réponse
        return new Response($article['title']);



    }

    /**
     * @Route ("/digimon", name="digimon")
     */
    public function digimon(){
        return new Response("digimon");
    }

// Créer une nouvelle page pour enfant "digimon" ou "pokemon" ou "saw"
// Faire hériter PokerController de la classe AbstractController
// (pour bénéficier de ses méthodes dans PokerController)// Utiliser la méthode
// "redirectToRoute" (issue d'AbstractController)
//dans la méthode de la page de poker, pour rediriger l'utilisateur
//vers la page pour enfant, s'il a moins de 18 ans

}