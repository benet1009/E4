<?php
include('db_connect.php');



    if($_POST['nom'] !== "" && $_POST['mdp'] !== ""){

	    try {
		        $sql = $bdd->query("SELECT * FROM login WHERE nom = '".$_POST['nom']."'");
		        $response = $sql->fetch();//Execute la requete
		       // $output = $response->fetchAll(PDO::FETCH_ASSOC);//cherche toute les données
		  
	    } catch (Exception $e) {
	        die('Erreur : ' . $e->getMessage());
	    }
	    if (password_verify($_POST['mdp'], $response['mdp'])) {
	    	if ($response['admin'] == 1){
	    		header('location: LesAges.php');
	    		echo "réussi";
	    	}else{
	    		header('location: LesAgesProf.php');
	    		echo "test";
	    	}
		}else{
			header('location: login.php');
		}

	
	}else{
		header('location: login.php');
		echo "echec";
}

?>