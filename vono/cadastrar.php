<?php
include"cabe.php";
?>


<body>
  <nav class="nav-extended orange accent-3">
    <div class="nav-wrapper">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php" class="active">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
      <h1>Cine Vono</h1>
    </div>
    <div class="nav-content">
      <ul class="tabs tabs-transparent light-blue accent-4">
        <li class="tab"><a href="galeria.php">Todos</a></li>
        <li class="tab"><a class="" href="#test2">Assistidos</a></li>
        <li class="tab "><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
  <div class="row">
    <div class="col s6 offset-s3">
      <div class="card ">
        <div class="card-content">
          <span class="card-title">Cadastrar Filme </span>


          <!--INPUT TITULO-->
          <div class="row">
            <div class="input-field col s12">
              <input id="titulo" type="text" class="validate" require>
              <label for="titulo">Titulo do filme</label>
            </div>
          </div>
          <!--INPUT SINOPSE-->

          <div class="row">
            <form class="col s12">
              <div class="row">
                <div class="input-field col s12">
                  <textarea id="sinopse" class="materialize-textarea"></textarea>
                  <label for="sinopse">Sinopse</label>
                </div>
              </div>
            </form>
          </div>

          <!--INPUT NOTA -->

          <div class="row">
            <div class="input-field col s4">
              <input id="nota" type="number" step=".1" min="0" max="10" class="validate" require>
              <label for="nota">Nota</label>
            </div>
          </div>
        </div>

        <!-- input capa -->
        <div class="file-field input-field">
          <div class="btn blue black-text">
            <span>Capa</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate" type="text">
          </div>
        </div>
        <div class="card-action center ">
          <a class="waves-effect waves-light btn grey" href="galeria.php">Cancelar</a>
          <a href="#" class="waves-effect waves-light btn blue">Salvar</a>
        </div>
      </div>
    </div>

  </div>
</body>

</html>