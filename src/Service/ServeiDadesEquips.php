<?php
namespace App\Service;
class ServeiDadesEquips {
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

    public function get() {
        return $this-> equips;
    }
}
?>