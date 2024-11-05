<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    #[Route('/produits', name: 'app_product')]
    public function index(): Response
    {
        $products = $this->entityManager->getRepository(Product::class)->findAll();

        // --- APPEL API PRINTFULL : ----

        // Utiliser un token d'accès valide ici
        /*$accessToken = 'ydQ41i2kPt5uFboA0imJw2iY9jXjlbv0nsn7dSk9';

        // Appel direct à l'API Printful pour récupérer les informations des produits
        $ch = curl_init('https://api.printful.com/products');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . $accessToken,
            'Content-Type: application/json'
        ]);

        // Exécuter la requête
        $productResponse = curl_exec($ch);
        $httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Vérifier si la requête a réussi (HTTP 200 OK)
        if ($httpStatusCode === 200) {
            $productData = json_decode($productResponse, true);
            // Afficher les données du produit
            return new Response('<pre>' . print_r($productData, true) . '</pre>');
        } else {
            // Gérer les erreurs (statut HTTP non 200)
            return new Response('Erreur lors de la récupération des informations du produit. Statut HTTP : ' . $httpStatusCode);
        }*/
        
        return $this->render('product/index.html.twig', [
            'products' => $products,
            //'form' => $form->createView()
        ]);
    }
}


