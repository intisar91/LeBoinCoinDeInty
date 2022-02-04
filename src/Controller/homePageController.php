<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Annonce;

class HomePageController extends AbstractController
{
    /**
    * @Route("/")
    */
    public function homepage(Request $request)
    {
        return $this->render('base.html.twig');

    }
}
?>
