<?php

$age = 59;

if ($age === 64) {
        echo "C'est bon, Jean-Claude vous pourrez prendre votre retraite cette année ";
    } elseif ( $age >= 60 && $age < 64 ) {
            echo "Dernière ligne droite avant la retraite";
    } elseif ( $age < 60 && $age > 0 ) {
            echo "La retraite, c'est pas pour cette année";
    } else {
            echo "Jean-Claude, stoppez le travail tout de suite, et en avant la retraite !";
    }


// Avec la methode swtich


$age = 59;
 
switch ($age) {
    case 64:
        echo "C'est bon, Jean-Claude, vous pourrez prendre votre retraite cette année.";
        break;
    case ($age >= 60 && $age < 64):
        echo "Dernière ligne droite avant la retraite.";
        break;
    case ($age < 60 && $age > 0):
        echo "La retraite, ce n'est pas pour cette année.";
        break;
    default:
        echo "Jean-Claude, stoppez le travail tout de suite, et en avant la retraite !<br><br>";
        break;
        }
?>	

<?php

$notes = [] ;
for ($e=0 ; $e<1000 ; $e++){
	$notes[$e] = [] ;
	for ($n=0 ; $n<8 ; $n++){
		$notes[$e][$n]=random_int(0,20);
	}
}

$recu = 0 ; # initialisation d'une variable pour le nombre de reçus
foreach ($notes as $e){ # pour chaque étudiant
	$moyenne = 0 ; # initialisation d'une variable pour chaque étudiant
	foreach ($e as $n){ # pour chaque note
		$moyenne += $n ; # on ajoute la note à cette variable
	}
	# on est maintenant sortie de la boucle des notes pour un étudiant
	$moyenne = $moyenne / 8 ; # on divise la somme des notes par le nombre de notes
	if($moyenne>=10){ # si la moyenne est au moins de 10
		$recu++ ; # alors cet étudiant est reçu
	}
}
echo $recu ; # à la sortie de la boucle des étudiants, on affiche le nombre de reçus
?>

<?php
function multiply(int $x, int $y): int
{
	return $x  * $y;
}

//Affiche 2
echo multiply(1, 2);

//Affiche 2 aussi: le tableau est "déballé" en deux valeurs, une pour chaque chaque argument $x et $y 
echo multiply(...[1, 2]);

//Et dans ce cas ? Essayer, cela affiche toujours 2 ! Les valeurs suivantes, faute de paramètres correspondants, sont simplement ignorées !
echo multiply(...[1, 2, 3]);
?>