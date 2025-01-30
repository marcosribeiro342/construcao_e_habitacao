<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backoffice</title>

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <!-- CSS Local-->
    <link rel="stylesheet" href="css/estilo.css">

    <!-- Editor de texto -->
    <script src="https://cdn.tiny.cloud/1/jsudxs3tclz7b4zieokw25er9lkx7vncn2rtpu3qo2f3tpy1/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

</head>
<body class="bg-dark text-light" >

    <header class="container-fluid">
        <div class="row mt-0">
            <div class="col-12 px-0">
            <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "home") ? 'active': '' ?>" aria-current="page" href="home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "noticias") ? 'active': '' ?>" aria-current="page" href="noticias.php">Noticias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "destaques") ? 'active': '' ?>" aria-current="page" href="destaques.php">Destaques</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "empreendimentos") ? 'active': '' ?>" aria-current="page" href="empreendimentos.php">Empreendimentos</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu Simples
                                </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="menu_simples.php?pagina=quem_somos">Quem Somos</a></li>
                                <li><a class="dropdown-item" href="menu_simples.php?pagina=socios">Sócios</a></li>
                                <li><a class="dropdown-item" href="menu_simples.php?pagina=centro_de_ferias">Centro de Férias</a></li>
                            </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "ferias") ? 'active': '' ?>" href="ferias.php">Férias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link <?= ($pagina_atual == "contactos") ? 'active': '' ?>" href="contactos.php">Contactos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>
                        </ul>
                    
                    </div>
                </div>
            </nav>
            </div>
        </div>

    </header>