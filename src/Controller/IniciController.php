<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IniciController {
    #[Route('/', name:'inici')]
    public function inici() {
        return new Response("Gestio d'equips del projecte de 2n de DAW - Conseguida");
    }
}
?>

