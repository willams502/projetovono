<?php
include"cabe.php";
?>

<?php

$db = new  SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";
$filmes = $db->query($sql);

$filme1 = [
  "titulo" => "Prey",
  "nota" => 8.6,
  "sinopse" => "Uma habilidosa guerreira Comanche tenta proteger seu povo de um predador alienígena altamente evoluído que caça humanos por esporte. Ela luta contra a natureza, colonizadores perigosos e essa criatura misteriosa para manter sua tribo segura.",
  "poster" => "https://www.joblo.com/wp-content/uploads/2022/07/Prey-Hulu-latest-poster-692x1024.jpg"
];

//$filmes = [$filme1, ];
?>


<body>
<nav class="nav-extended orange accent-3">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php" class="active">Galeria</a></li>
        <li><a href="cadastrar.php" >Cadastrar</a></li>
      </ul>
    </div>
    <div class= "nav-header center">
        <h1>Cine Vono</h1>
     </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent light-blue accent-4">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a  href="#test2">Assistidos</a></li>
        <li class="tab "><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>


  <div class="row">
    <?php while ($filmes = $filmes->fetchArray())?>
        <div class="col s3">
            <div class="card hoverable">
              <div class="card-image">
                <img src="<?= $filme["poster"] ?>">
                <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">favorite_border</i></a>
              </div>
              <div class="card-content">
                <p class="valing-wrapper">
                    <span class="card-tittle"> <?= $filme["titulo"]?></span>
                    <i class="material-icons amber-text">star</i><?= $filme["nota"] ?></p>    
                <p><?=$filme["sinopse"] ?> </p>
              </div>
            </div>
        </div>
</body>
</html>