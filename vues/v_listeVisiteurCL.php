<?php
$affiche = $pdo->selectVisiteur();
?>
<body>
<h2> Voici la liste des visiteurs Cloturé (CL) : </h2><br/>
<table border="unset">
	<tr>
		<th> Code visiteur</th>
		<th> Nom</th>
		<th> Prenom</th>
		<th> Date</th>
	</tr>
<?php foreach ($affiche as $value){
$annee = substr ($value['mois'], 0, 4); // Sous-chaîne de la valeur mois, mis dans année en prenant les 4 premiers caractères
$mois = substr ($value['mois'], 4, 2); // Sous-chaîne de la valeur mois, mis dans mois en prenant les 2 derniers caractères
$time = $mois."/".$annee; // Concaténation des deux variables
?>
	<tr>
		<td><?php echo $value['id']; ?></td>
		<td><?php echo $value['nom']; ?></td>
		<td><?php echo $value['prenom'];?></td>
		<td><?php echo $time;?></td>
		<!-- index.php?choisirVisiteurCL.php -->
	</tr>
<?php	} ?>

</table>
<frame>
<a style="text-decoration: none;" href="index.php?uc=validerFicheFrais&action=afficheFrais&idVisiteur=
			<?php echo $value['id'].'&mois='.$value['mois']; ?>">Détails des fiches de frais </a> 
</frame>
</body>