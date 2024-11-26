<?php

class Pays {
    private $nom;
    private $equipes;

    public function __construct($nom) {
        $this->nom = $nom;
        $this->equipes = [];
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getEquipes() {
        return $this->equipes;
    }

    public function setEquipes($equipes) {
        $this->equipes = $equipes;
    }

    public function ajouterEquipe($equipe) {
        $this->equipes[] = $equipe;
    }
}
?>
