<?php
  include_once 'connexion.php';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Accueil - Connected Flowers</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div id="intro">
    <h1>Connected Flowers</h1>
  </div>
  <nav>
    <ul>
      <li><a href="index.php">Accueil</a></li>
      <li><a class="active" href="regplants.php">Plantes enregistrées</a></li>
      <li><a href="rasplants.php">Votre plante</a></li>
    </ul>
  </nav>
  <div class="plant">
    <?php
  		$p1 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=1;');
  		$p1->execute();
  		while ($plant = $p1->fetch()) {
  			$name = $plant['NAME'];
  			$category = $plant['CATEGORY'];
  			$desc = $plant['DESCRIPTION'];
  			$period = $plant['PERIOD'];
  			$humidity = $plant['HUMIDITY'];
  			$temperature = $plant['TEMPERATURE'];
  			$brightness = $plant['BRIGHTNESS'];
  		}
  	?>
    <img src="ressources/prunier.jpg" alt="prunier"/>
    <h3><?= $name ?></h3>
    <h4><?= $category ?></h4>
    <p><?= $desc ?></p>
    <div class="tools">
      <p>Temperature optimale:</p><?= $temperature ?>
    </div>
    <div class="tools">
      <p>Humidité optimale:</p><?= $humidity ?>
    </div>
    <div class="tools">
      <p>Luminosité optimale:</p><?= $brightness ?>
    </div>
  </div>
  <div class="plant">
    <?php
  		$p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=2;');
  		$p2->execute();
  		while ($plant = $p2->fetch()) {
  			$name = $plant['NAME'];
  			$category = $plant['CATEGORY'];
  			$desc = $plant['DESCRIPTION'];
  			$period = $plant['PERIOD'];
  			$humidity = $plant['HUMIDITY'];
  			$temperature = $plant['TEMPERATURE'];
  			$brightness = $plant['BRIGHTNESS'];
  		}
  	?>
    <img src="ressources/laurier.jpg" alt="laurier" />
    <h3><?= $name ?></h3>
    <h4><?= $category ?></h4>
    <p><?= $desc ?></p>
    <div class="tools">
      <p>Temperature optimale:</p><?= $temperature ?>
    </div>
    <div class="tools">
      <p>Humidité optimale:</p><?= $humidity ?>
    </div>
    <div class="tools">
      <p>Luminosité optimale:</p><?= $brightness ?>
    </div>
  </div>
  <div class="plant">
    <?php
  		$p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=2;');
  		$p2->execute();
  		while ($plant = $p2->fetch()) {
  			$name = $plant['NAME'];
  			$category = $plant['CATEGORY'];
  			$desc = $plant['DESCRIPTION'];
  			$period = $plant['PERIOD'];
  			$humidity = $plant['HUMIDITY'];
  			$temperature = $plant['TEMPERATURE'];
  			$brightness = $plant['BRIGHTNESS'];
  		}
  	?>
    <img src="prunier.jpg"></img>
    <h3><?= $name ?></h3>
    <h4><?= $category ?></h4>
    <p><?= $desc ?></p>
    <div class="tools">
      <p>Temperature optimale:</p><?= $temperature ?>
    </div>
    <div class="tools">
      <p>Humidité optimale:</p><?= $humidity ?>
    </div>
    <div class="tools">
      <p>Luminosité optimale:</p><?= $brightness ?>
    </div>
  </div>
  <div class="plant">
    <?php
  		$p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=2;');
  		$p2->execute();
  		while ($plant = $p2->fetch()) {
  			$name = $plant['NAME'];
  			$category = $plant['CATEGORY'];
  			$desc = $plant['DESCRIPTION'];
  			$period = $plant['PERIOD'];
  			$humidity = $plant['HUMIDITY'];
  			$temperature = $plant['TEMPERATURE'];
  			$brightness = $plant['BRIGHTNESS'];
  		}
  	?>
    <img src="prunier.jpg"></img>
    <h3><?= $name ?></h3>
    <h4><?= $category ?></h4>
    <p><?= $desc ?></p>
    <div class="tools">
      <p>Temperature optimale:</p><?= $temperature ?>
    </div>
    <div class="tools">
      <p>Humidité optimale:</p><?= $humidity ?>
    </div>
    <div class="tools">
      <p>Luminosité optimale:</p><?= $brightness ?>
    </div>
  </div>
  <div class="plant">
    <?php
  		$p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=2;');
  		$p2->execute();
  		while ($plant = $p2->fetch()) {
  			$name = $plant['NAME'];
  			$category = $plant['CATEGORY'];
  			$desc = $plant['DESCRIPTION'];
  			$period = $plant['PERIOD'];
  			$humidity = $plant['HUMIDITY'];
  			$temperature = $plant['TEMPERATURE'];
  			$brightness = $plant['BRIGHTNESS'];
  		}
  	?>
    <img src="prunier.jpg"></img>
    <h3><?= $name ?></h3>
    <h4><?= $category ?></h4>
    <p><?= $desc ?></p>
    <div class="tools">
      <p>Temperature optimale:</p><?= $temperature ?>
    </div>
    <div class="tools">
      <p>Humidité optimale:</p><?= $humidity ?>
    </div>
    <div class="tools">
      <p>Luminosité optimale:</p><?= $brightness ?>
    </div>
  </div>
  <div class="plant">
    <?php
  		$p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=2;');
  		$p2->execute();
  		while ($plant = $p2->fetch()) {
  			$name = $plant['NAME'];
  			$category = $plant['CATEGORY'];
  			$desc = $plant['DESCRIPTION'];
  			$period = $plant['PERIOD'];
  			$humidity = $plant['HUMIDITY'];
  			$temperature = $plant['TEMPERATURE'];
  			$brightness = $plant['BRIGHTNESS'];
  		}
  	?>
    <img src="prunier.jpg" />
    <h3><?= $name ?></h3>
    <h4><?= $category ?></h4>
    <p><?= $desc ?></p>
    <div class="tools">
      <p>Temperature optimale:</p><?= $temperature ?>
    </div>
    <div class="tools">
      <p>Humidité optimale:</p><?= $humidity ?>
    </div>
    <div class="tools">
      <p>Luminosité optimale:</p><?= $brightness ?>
    </div>
  </div>
</body>
</html>