<?php
require_once 'Pays.php';
require_once 'Equipe.php';
require_once 'Joueur.php';

// PAYS
$paysFrance = new Pays("France");
$paysEspagne = new Pays("Espagne");
$paysPortugal = new Pays("Portugal");

// EQUIPE
$psg = new Equipe("Paris Saint-Germain", $paysFrance);
$barca = new Equipe("FC Barcelone", $paysEspagne);
$realmadrid = new Equipe("Real Madrid", $paysEspagne);
$porto = new Equipe("FC Porto", $paysPortugal);

// JOUEUR
$messi = new Joueur("Lionel", "Messi", "24-06-1987", "Argentine");
$cristiano = new Joueur("Cristiano", "Ronaldo", "05-02-1985", "Portugal");
$neymar = new Joueur("Neymar", "JR", "05-02-1992", "Brésil");
$mbappe = new Joueur("Kylian", "Mbappé", "20-12-1998", "France");
$benzema = new Joueur("Karim", "Benzema", "19-12-1987", "France");

// JOUEUR->Equipe
$psg->ajouterJoueur($neymar, 2017);
$psg->ajouterJoueur($mbappe, 2017);
$barca->ajouterJoueur($messi, 2004);
$realmadrid->ajouterJoueur($benzema, 2009);
$realmadrid->ajouterJoueur($cristiano, 2009);

// Carriere->Joueur
$neymar->ajouterCarriere($psg, 2017);
$mbappe->ajouterCarriere($psg, 2017);
$messi->ajouterCarriere($barca, 2004);
$cristiano->ajouterCarriere($realmadrid, 2009);
$cristiano->ajouterCarriere($porto, 2018);
$benzema->ajouterCarriere($realmadrid, 2009);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>POO Football</title>
</head>
<body>

<h1>POO Football</h1>

<div class="container">
    <?php foreach ([$paysFrance, $paysEspagne, $paysPortugal] as $pays) : ?>
        <div class="pays">
            <h3><?php echo $pays->getNom(); ?></h3>
            <?php foreach ($pays->getEquipes() as $equipe) : ?>
                <div class="club-inside"><?php echo $equipe->getNom(); ?></div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="container">
    <?php foreach ([$psg, $barca, $realmadrid] as $club) : ?>
        <div class="club">
            <h3><?php echo $club->getNom(); ?></h3>
            <?php foreach ($club->getJoueurs() as $joueur) : ?>
                <div class="player">
                    <?php echo $joueur['joueur']->getPrenom() . ' ' . $joueur['joueur']->getNom(); ?> 
                    (<?php echo $joueur['joueur']->getAge(); ?> ans)
                </div>
            <?php endforeach; ?>
        </div>
    <?php endforeach; ?>
</div>

<div class="container">
    <?php foreach ([$messi, $cristiano, $neymar] as $joueur) : ?>
        <div class="carriere">
            <h3><?php echo $joueur->getPrenom() . ' ' . $joueur->getNom(); ?></h3>
            <p>Nationalité: <?php echo $joueur->getNationalite(); ?></p>
            <p>Âge: <?php echo $joueur->getAge(); ?> ans</p>
            <p>Carrière: </p>
            <div class="career-details">
                <?php foreach ($joueur->getCarriere() as $carriere) {
                    echo $carriere['equipe']->getNom() . ' (' . $carriere['annee'] . ')<br>';
                } ?>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>
