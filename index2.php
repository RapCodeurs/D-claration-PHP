<?php

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