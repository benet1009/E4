<?php
include('db_connect.php');
if (isset($_POST['choix']) && $_POST['choix'] == 'envoi'){
	if (isset($_POST['surface']) && isset($_POST['botteT']) && isset($_POST['culture']) && isset($_POST['nom']) && isset($_POST['annee']) && isset($_POST['typeSol']) && isset($_POST['travailSol']) && isset($_POST['Semis']) && isset($_POST['compost']) && isset($_POST['N']) && isset($_POST['P']) && isset($_POST['K']) && isset($_POST['S']) && isset($_POST['CA']) && isset($_POST['phytos']) && isset($_POST['phytos2']) && isset($_POST['IFT']) && isset($_POST['coupe1']) && isset($_POST['coupe2']) && isset($_POST['coupe3']) && isset($_POST['coupe4']) && isset($_POST['poidsBotte']) && isset($_POST['kgTotal']) && isset($_POST['tauxMS']) && isset($_POST['MSR'])&& isset($_POST['RMS'])) {

	 try {
	    $surface =$_POST['surface'];
	    $botteT = $_POST['botteT'];
	    $culture = $_POST['culture'];
	    $nom = $_POST['nom'];
	    $annee = $_POST['annee'];
	    $typeSol = $_POST['typeSol'];
	    $travailSol = $_POST['travailSol'];
	    $Semis = $_POST['Semis'];
	    $compost = $_POST['compost'];
	    $N = $_POST['N'];
	    $P = $_POST['P'];
	    $K = $_POST['K'];
	    $S = $_POST['S'];
	    $CA = $_POST['CA'];
	    $phytos = $_POST['phytos'];
	    $phytos2 = $_POST['phytos2'];
	    $IFT = $_POST['IFT'];
	    $coupe1 = $_POST['coupe1'];
	    $coupe2 =$_POST['coupe2'];
	    $coupe3 =$_POST['coupe3'];
	    $coupe4 =$_POST['coupe4'];
	    $poidsBotte = $_POST['poidsBotte'];
	    $kgTotal = $_POST['kgTotal'];
	    $tauxMS = $_POST['tauxMS'];
	    $MSR = $_POST['MSR'];
	    $RMS = $_POST['RMS'];

	    $sql = "INSERT INTO parcelle(surface, botteT, culture, nom, annee, typeSol, travailSol, Semis, compost, N, P, K, S, CA, phytos, phytos2, IFT, coupe1, coupe2, coupe3, coupe4, poidsBotte, kgTotal, tauxMS, MSR, RMS) VALUES ('" . $surface . "','" . $botteT . "','" . $culture . "','" . $nom . "','" .  $annee . "','" . $typeSol . "','" . $travailSol . "','" . $Semis . "','" . $compost . "','" . $N . "','" . $P . "','" . $K . "','" . $S . "','" . $CA . "','" . $phytos . "','". $phytos2 . "','" . $IFT . "','" . $coupe1 . "','"  . $coupe2 . "','" . $coupe3 . "','". $coupe4 . "','". $poidsBotte . "','". $kgTotal . "','". $tauxMS . "','". $MSR . "','". $RMS . "')";
	    $bdd->exec($sql);//Execute la requete

	}catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
	} 
}         
}	 
?>