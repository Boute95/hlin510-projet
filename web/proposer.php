<?php include("header.php"); ?>

<?php
session_start();
?>

<header class="container-fluid header-accueil">

    <?php

    if(isset($_SESSION['identifiant'])) {

    ?>

	<div class="container">

	    <div class= "row my-auto">

		<form class="form-proposer mx-auto" method="post">

		    <div class="formulaire mx-auto px-5 py-4 inscription-form" id="form-type">
			<div class="row">
			    <h1 class="mb-4">Que proposez-vous?</h1>
			</div>
			<div class="row">
			    <div class="col-6 text-center">
				<input type="radio" name="ObjetService" id="objet" />
				<label>Objet</label>
			    </div>
			    <div class="col-6 text-center">
				<input type="radio" name="ObjetService" id="service" />
				<label>Service</label><br/>
			    </div>
			</div>
			<div class="row">
			    <div id="continuer1" class="row mt-4 mx-auto button-holavoisin button-violet">
				Continuer  <i class="ml-2 fas fa-1x fa-angle-right"></i>
      </div>
			</div>
		    </div>

		    <div class="formulaire mx-auto px-5 py-4 inscription-form" id="form-objet">
			<div class="row">
			    <h2 class="text-center mx-auto mb-3">Décrivez votre objet<h2>
			</div>
			<div class="container">
        <div class="row mb-2">
			    <label class="col-6">Nom de l'objet</label>
			    <input class="col-6 mb-2" type="text" name="objet" placeholder="nom objet">
        </div>
			    <div class="row mb-2">
            <div class="col-6">
              <label>Location</label>
				<input type="radio" name="LocationVente" id="location" />
      </div>
      <div class="col-6">
        <label>Vente</label>
				<input type="radio" name="LocationVente" id="vente" />
			    </div>
        </div>

      <div class="row mb-2">
			    <label class="col-6">Prix</label>
			    <input class="col-6" type="text" name="prix" placeholder="prix">
			</div>

    <div class="row mb-2">
        <label class="col-6">Localisation</label>
        <input class="col-6" type="text" name="localisation" placeholder="Localisation">
    </div>

    <div class="row mb-2">
    <label class="col-6">Image(s)</label>
</div>

      <div class="row mb-2">
        <input class="mx-auto button-holavoisin button-vert" type="submit" value="Valider">
  </div>

      </div>
      </div>

      <div class="formulaire mx-auto px-5 py-4 inscription-form" id="form-service">
    <div class="row">
        <h2 class="text-center mx-auto mb-3">Décrivez votre service<h2>
    </div>
    <div class="container">
      <div class="row mb-2">
        <label class="col-6">Nom de du service</label>
        <input class="col-6 mb-2" type="text" name="objet" placeholder="nom objet">
      </div>

    <div class="row mb-2">
        <label class="col-6">Prix</label>
        <input class="col-6" type="text" name="prix" placeholder="prix">
    </div>

  <div class="row mb-2">
      <label class="col-6">Localisation</label>
      <input class="col-6" type="text" name="localisation" placeholder="Localisation">
  </div>

  <div class="row mb-2">
    <label class="col-6">Image(s)</label>
  </div>

    <div class="row mb-2">
      <input class="mx-auto button-holavoisin button-vert" type="submit" value="Valider">
</div>

    </div>
    </div>

		</form>
    </div>
	</div>

    <?php }
    else {
    ?>

	<div class="container">
	    <div id="msg-inscription-necessaire"
		 class="row mx-auto my-4 text-center fond-blanc">
		<div class="row m-0 mb-4">
		    Vous devez être inscrit pour pouvoir proposer un objet ou service
		</div>
		<div class="row w-100 mx-auto justify-content-around">
		    <a class="button-holavoisin button-vert" href="./inscription.php">
			Devenir membre
		    </a>
		    <a class="button-holavoisin button-violet" href="./connexion.php">
			Se connecter
		    </a>
		</div>

	    </div>
	</div>

    <?php } ?>

</header>


<?php include("footer.php") ?>