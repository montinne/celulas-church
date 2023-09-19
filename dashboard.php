<?php

include('protect.php');


?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/style.css" />
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"
        ></script>
        <title>Células Church - Dashboard</title>
    </head>
    <body>
        <!--    INICIO NAVBAR   -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="dashboard.php">CENA BNH</a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div
                    class="collapse navbar-collapse"
                    id="navbarSupportedContent"
                >
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="dashboard.php"
                                >Inicio</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Células</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a
                                class="nav-link dropdown-toggle"
                                href="#"
                                role="button"
                                data-bs-toggle="dropdown"
                                aria-expanded="false"
                            >
                                Líderes
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="gerenciar-lider.php?searchlider=&submit="
                                        >Gerenciar Líderes</a
                                    >
                                </li>
                                <li>
                                    <a
                                        class="dropdown-item"
                                        href="cadastrar-lider.php"
                                        >Cadastrar Novo Lider</a
                                    >
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link" href="#">Administrativo</a>
                    </li>
                    </ul>
                    <div id="session">
                    <span>Bem vindo,&nbsp</span>
                    <?php echo $_SESSION['name']."!"; ?>
                    </div>
                    <form class="d-flex" role="search">
                        <input
                            class="form-control me-2"
                            type="search"
                            placeholder="Buscar"
                            aria-label="Search"
                        />
                        <button class="btn btn-outline-success" type="submit">
                            Buscar
                        </button>
                    </form>
                </div>
                <a href="logout.php" id="btn_sair">Sair</a>
            </div>
        </nav>
        <!--    FIM NAVBAR  -->
        <div class="buscar_lider">
    <form method="get" class="d-flex"
                    role="search" nome="search"
                    action="gerenciar-lider.php">
                    <input class="form-control me-2"
                        type="search"
                        placeholder="Digite o nome da célula para buscar..."
                        aria-label="Search"
                        name="searchlider" />
                    <button class="btn btn-outline-success"
                        type="submit"
                        name="submit">
                        Buscar
                    </button>
                </form>
                </div>
    </body>
</html>
