<?php

class Equipe {
    private string $nom;
    private Pays $pays;
    private array $carrieres; 

    public function __construct(string $nom, Pays $pays) {
        $this->nom = $nom;
        $this->pays = $pays;
        $this->carrieres = [];
        $this->pays->ajouterEquipe($this); 
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom($nom) {
        $this->nom = $nom;
    }

    public function getCarrieres(): array {
        return $this->carrieres;
    }

    public function setCarrieres($carrieres) {
        $this->carrieres = $carrieres;
    }

    public function getPays(): Pays {
        return $this->pays;
    }

    public function setPays($pays) {
        $this->pays = $pays;
    }

    public function ajouterCarriere(Carriere $carriere) {
        $this->carrieres[] = $carriere;
    }
}
?>
