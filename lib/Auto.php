<?php


class Auto
{
    public string $merk;
    public string $type;
    public int $prijs;
    public string $kleur;

    public function __construct($merk, $type, $prijs, $kleur) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->kleur = $kleur;
    }
}