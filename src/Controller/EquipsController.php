<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class EquipsController extends AbstractController{
    
    
    #[Route('/equip/{codi?1}', name:'dades_equips', requirements: ['codi' => '\d+'])]
    public function equip($codi){

        $equips = array(
        array(
            "codi" => "1",
            "nom" => "Equip Roig",
            "cicle" => "DAW",
            "curs" => "22/23",
            "membres" => array("Elena", "Vicent", "Joan", "Maria")
        ),
        array(
            "codi" => "2",
            "nom" => "Equip Blau",
            "cicle" => "DAM",
            "curs" => "22/23",
            "membres" => array("Carlos", "Ana", "Luis", "Sofia")
        ),
        array(
            "codi" => "3",
            "nom" => "Equip Verd",
            "cicle" => "ASIX",
            "curs" => "22/23",
            "membres" => array("Pedro", "Julia", "Marcos", "Irene")
        ),
        array(
            "codi" => "4",
            "nom" => "Equip Groc",
            "cicle" => "SMX",
            "curs" => "22/23",
            "membres" => array("Sergio", "Marta", "David", "Nuria")
        )
    );


        $equipSeleccionat = null;
        foreach ($equips as $equip) {
            if($equip['codi'] == $codi) {
                $equipSeleccionat = $equip;
                break;
            }
        }

        if ($equipSeleccionat === null) {
            $equipSeleccionat = reset($equips);
        }

        return $this->render('dades_equip.html.twig', ['equip' => $equipSeleccionat]);
        


        
    }
}

?>