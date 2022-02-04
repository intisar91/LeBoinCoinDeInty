<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomePageController {
    /**
    * @Route("/")
    */
    public function homepage()
    {
        return new Response('Helloo intisaroo!');
    }
}
?>
