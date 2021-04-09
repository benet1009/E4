<?php
include('db_connect.php');
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <title>Les Ages</title>
</head>
<body>
  <div class="container">
    <div class="row align-items-center">

      <div class="col-lg-4"></div>
      <div class="col-lg-4">
        <br><br>
        <div class="text-center text-primary"><h1>Les Ages</h1></div>
        
        <form class="row g-3" method="post" action="login.php" >
          <div class="mb-3">
            <label class="form-label">Nom</label>
            <input type="text" class="form-control" name="nom" value="">
          </div>
          <div class="mb-3">
            <label class="form-label">Mot de passe</label>
            <input type="password" class="form-control" name="mdp" value="">
          </div>
          <button type="submit" class="btn btn-primary">Connexion</button>
        </form>
      </div>
    <div class="col-lg-4"></div>

    
  </div>
  </div>
</body>
</html>