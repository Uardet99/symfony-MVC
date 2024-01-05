<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipsController {
    private $equips = array(
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
    
    #[Route('/equip/{codi}', name:'equip', requirements: ['codi' => '\d+'])]
    public function equip($codi) {

        foreach ($this->equips as $equip) {
            if($equip["codi"] == $codi) {
                return new Response("<ul><li>" . $equip["codi"] . "</li>" . "<li>" . $equip["nom"]  . "</li>" .  "<li>" . $equip["cicle"]  . "</li>" .  "<li>" . $equip["curs"]  . "</li>" .  "<li>" . $equip["membres"][0]  . "</li>" .  "<li>" . $equip["membres"][1]  . "</li>".  "<li>" . $equip["membres"][2]  . "</li>".  "<li>" . $equip["membres"][3]  . "</li>");
            }
        }
        return new Response("Equip no trobat");


        
    }
}

?>