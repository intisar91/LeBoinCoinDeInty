<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class AdsController {
    /**
    * @Route("/")
    */
    public function showAnnonce()
    {
        return new Response('This is my Annonce! :)');
    }
}
?>