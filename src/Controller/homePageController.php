<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class QuestionController {
    public function homepage()
    {
        return new Response('Helloo inty!');
    }
}
?>