<?php
include('db_connect.php');

?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Les Ages</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="col-12 text-center text-primary">
    <br><br>
    <h1>Les Ages</h1></div><br>
  
    
    <?php
      $donnees;
      if (isset($_POST['annee']) && isset($_POST['nom'])){

        $reponse = $bdd->query("SELECT * FROM parcelle WHERE annee = '".$_POST['annee']."' AND nom = '".$_POST['nom']."' ORDER BY id DESC");
        $donnees = $reponse->fetch();
        
      }
    ?>
    <div class="col-12 text-center">

    <p>
      <img src="http://sc1chfl1498.universe.wf/Equ26K7z/site/carte2.PNG" width="30%" height="30%">
      <img src="http://sc1chfl1498.universe.wf/Equ26K7z/site/carte3.PNG">
      <img src="http://sc1chfl1498.universe.wf/Equ26K7z/site/carte4.PNG">
    </p>
    </div>

  <form method="post" class="row">
    <div class="col-6 row ">
      <div class="col-12 row">

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Nom</label>
          </div>
          <div class="col-auto">
            <select class="form-select" name="nom" id="nom">
              <option value="La Talle">La Talle</option>
              <option value="Les Classes">Les Classes</option>
              <option value="Le Triangle">Le Triangle</option>
              <option value="Le Hangar">Le Hangar</option>
              <option value="Fish Brenne">Fish Brenne</option>
              <option value="Vieille Fetuque">Vieille Fétuque</option>
              <option value="Le Rocher">Le Rocher</option>
              <option value="Petit Bassin">Petit Bassin</option>
              <option value="Aerodrome">Aérodrome</option>
              <option value="Lacombe">Lacombe</option>
            </select>
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Année</label>
          </div>
          <div class="col-auto">
            <select class="form-select" name="annee" id="annee">
              <?php
                $text= '';
                for($i=21; $i<=30; $i++){
                  $text .= '<option value="20'.$i.'">20'.$i.'</option>';
                }
                echo $text;
              ?>
            </select>
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Surface</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="surface" value="<?=(isset($donnees['surface']))?$donnees['surface']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Type de Sol</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="typeSol" value="<?=(isset($donnees['typeSol']))?$donnees['typeSol']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Culture</label>
          </div>
          <div class="col-auto">
            <select class="form-select" name="culture" id="culture">
            <option value="Luzerne">Luzerne</option>
            <option value="Trefle violet">Trèfle violet</option>
            <option value="RGI">RGI</option>
            <option value="Fetuque">Fétuque</option>
            <option value="Autre prairie">Autre prairie</option>
            <option value="Autre culture">Autre culture</option>
            <option value="Jachere">Jachère</option>
          </select>
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Travail du Sol</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="travailSol" value="<?=(isset($donnees['travailSol']))?$donnees['travailSol']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Semis</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="Semis" value="<?=(isset($donnees['travailSol']))?$donnees['Semis']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Compost</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="compost" value="<?=(isset($donnees['compost']))?$donnees['compost']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Engrais :</label>
          </div>
          <div class="col-auto">
            
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label"> - N</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="N" value="<?=(isset($donnees['N']))?$donnees['N']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label"> - P</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="P" value="<?=(isset($donnees['P']))?$donnees['P']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label"> - K</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="K" value="<?=(isset($donnees['K']))?$donnees['K']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label"> - S</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="S" value="<?=(isset($donnees['S']))?$donnees['S']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label"> - CA</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="CA" value="<?=(isset($donnees['CA']))?$donnees['CA']:''?>">
          </div>
        </div>

    </div>
  </div>
  <div class="col-6 row ">
      <div class="col-12 row">
        
        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">IFT</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="IFT" value="<?=(isset($donnees['IFT']))?$donnees['IFT']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Phytos :</label>
          </div>
          <div class="col-auto">
            
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">- 1er</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="phytos" value="<?=(isset($donnees['phytos']))?$donnees['phytos']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">- 2ème</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="phytos2" value="<?=(isset($donnees['phytos2']))?$donnees['phytos2']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Coupe :</label>
          </div>
          <div class="col-auto">
            
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">- 1ère</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="coupe1" value="<?=(isset($donnees['coupe1']))?$donnees['coupe1']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">- 2ème</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="coupe2" value="<?=(isset($donnees['coupe2']))?$donnees['coupe2']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">- 3ème</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="coupe3" value="<?=(isset($donnees['coupe3']))?$donnees['coupe3']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">- 4ème</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="coupe4" value="<?=(isset($donnees['coupe4']))?$donnees['coupe4']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Total de botte</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="botteT" value="<?=(isset($donnees['botteT']))?$donnees['botteT']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Poids des bottes</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="poidsBotte" value="<?=(isset($donnees['poidsBotte']))?$donnees['poidsBotte']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">KG total</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="kgTotal" value="<?=(isset($donnees['kgTotal']))?$donnees['kgTotal']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Taux de matière sèche</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="tauxMS" value="<?=(isset($donnees['tauxMS']))?$donnees['tauxMS']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Matière sèche récolté par parcelle</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="MSR" value="<?=(isset($donnees['MSR']))?$donnees['MSR']:''?>">
          </div>
        </div>

        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <label class="col-form-label">Rendement en matière sèche</label>
          </div>
          <div class="col-auto">
            <input class="form-control" type="text" name="RMS" value="<?=(isset($donnees['RMS']))?$donnees['RMS']:''?>">
          </div>
        </div>


        <div class="row g-3 align-items-center">
          <div class="col-auto">
            <button type="submit" class="btn btn-primary">Affichage</button>
          </div>
        </div>  

      </div>       
    </div>
  </div>  

  </form>
  <br>
</body>
</html>
<script>
   $("#nom").val("<?=$donnees['nom']?>");
   $("#annee").val("<?=$donnees['annee']?>");
   $("#culture").val("<?=$donnees['culture']?>");
</script>