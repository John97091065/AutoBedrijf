<?php


class Auto
{
    public string $merk;
    public string $type;
    public int $prijs;
    public string $kleur;
    public string $image;

    public function __construct($merk, $type, $prijs, $kleur, $image) {
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
        $this->kleur = $kleur;
        $this->image = $image;
    }
}