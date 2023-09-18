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
        <title>Gestão de células - Cadastro de Líderes</title>
    </head>
    <body>
        <!--    INICIO NAVBAR   -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">CENA BNH</a>
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
                                href="index.html"
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
                                    <a class="dropdown-item" href="gerenciar-lider.php?searchlider=&submit="
                                        >Gerenciar Líderes</a
                                    >
                                </li>
                                <li>
                                    <a class="dropdown-item" href="cadastrar-lider.php"
                                        >Cadastrar Novo Lider</a
                                    >
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--    FIM NAVBAR  -->

        <!--    FORM CADASTRO -->
        <div class="cadlider">
            <form method="post" name="cadastroLider" class="row g-3" action="cadlider.php" enctype="multipart/form-data">
                <div class="col-md-6">
                    <label for="inputName" class="form-label"
                        >Nome Completo:</label
                    >
                    <input type="text" class="form-control" name="namelider"/>
                </div>
                <div class="col-md-6">
                    <label for="inputWhatsapp" class="form-label"
                        >WhatsApp:</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        name="whatsapp"/>
                </div>
                <div class="col-md-6">
                    <label for="inputCpf" class="form-label"
                        >CPF:</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        name="cpf"/>
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label"
                        >Selecione sua foto:</label
                    >
                    <input
                        class="form-control"
                        type="file"
                        name="picture"
                        multiple
                    />
                </div>
                <div class="col-12">
                    <label for="inputAddress" class="form-label"
                        >Endereço:</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Rua, Número, Lote, Quadra"
                        name="address"/>
                </div>
                <div class="col-12">
                    <label for="inputReference" class="form-label"
                        >Referencia:</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        placeholder="Próximo a mercearia..."
                        name="reference"/>
                </div>
                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Cidade:</label>
                    <input type="text" class="form-control" name="city"/>
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Estado:</label>
                    <input type="text" class="form-control" name="state"/>
                </div>
                <div class="col-md-2">
                    <label for="inputZip" class="form-label">CEP:</label>
                    <input type="text" class="form-control" name="zipcode"/>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </div>
            </form>
        </div>
        <!--    FIM FORM CADASTRO   -->
    </body>
</html>
