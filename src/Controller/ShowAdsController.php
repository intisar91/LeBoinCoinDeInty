<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Form\CreateAnnonceType;
use App\Entity\Annonce;

class ShowAdsController extends AbstractController
{
    /**
     * @Route("/addAds", name="add_ads")
     */
    public function createAction(Request $request) {
        $annonce = new Annonce();

        $form = $this -> createForm(CreateAnnonceType::class, $annonce);
        
        //j'enleve le fields
        $form->remove('photo');
        
        return $this->render('form/index.html.twig', [
            'post_form' => $form->createView()
        ]);
    }
}

?>