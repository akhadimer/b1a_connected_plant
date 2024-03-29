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
  		while ($plant = $p1->fetch(PDO::FETCH_ASSOC)) {
  			$name = $plant['NAME'];
  			$category = $plant['CATEGORY'];
  			$desc = $plant['DESCRIPTION'];
  			$period = $plant['PERIOD'];
  			$humidity = $plant['HUMIDITY'];
  			$temperature = $plant['TEMPERATURE'];
  			$brightness = $plant['BRIGHTNESS'];
  		}
  	?>
    <img src="ressources/prunier.jpg" alt="prunier" />
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
  		while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
  		$p3 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=3;');
  		$p3->execute();
  		while ($plant = $p3->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
  		$p4 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=4;');
  		$p4->execute();
  		while ($plant = $p4->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
  		$p5 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=5;');
  		$p5->execute();
  		while ($plant = $p5->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
  		$p6 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=6;');
  		$p6->execute();
  		while ($plant = $p6->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p7 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=7;');
      $p7->execute();
      while ($plant = $p7->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p8 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=8;');
      $p8->execute();
      while ($plant = $p8->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p9 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=9;');
      $p9->execute();
      while ($plant = $p9->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p10 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=10;');
      $p10->execute();
      while ($plant = $p10->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p11 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=11;');
      $p11->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=12;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=13;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=14;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=15;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=16;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=17;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=18;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=19;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
      $p2 = $connexion->prepare('SELECT * FROM registeredplants WHERE id=20;');
      $p2->execute();
      while ($plant = $p2->fetch(PDO::FETCH_ASSOC)) {
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
    <div class="title">
      <h3><?= $name ?></h3>
      <h4><?= $category ?></h4>
    </div>
    <p class="desc"><?= $desc ?></p>
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
