<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"><img src="https://lh3.googleusercontent.com/aIXADeaCLGozD3YhT43_xGEhF7YdzMjWERdYHNMMZbFvxrS1_dMgzsYN7OtQozMPKdUN" width="60px"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="registrarDatos.php">Registar Productos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="consultarDatos.php">Consultar Productos</a>
              </li>
          </ul>
          <form class="form-inline my-2 my-lg-0" method="get" action="resultadoBusqueda.php">
            <input name="termino"class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>
          </form>
        </div>
    </nav>