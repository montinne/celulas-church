<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/custom.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
        crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Gestão de células - Cadastro de Líderes</title>
</head>
<body>
    <!-- INICIO NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">CENA BNH</a>
            <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active"
                            aria-current="page"
                            href="index.html">
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Células</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Líderes
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item"
                                    href="gerenciar-lider.php?searchlider=&submit=">
                                    Gerenciar Líderes
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item"
                                    href="cadastrar-lider.php">
                                    Cadastrar Novo Lider
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <form method="get" class="d-flex"
                    role="search" nome="search"
                    action="gerenciar-lider.php">
                    <input class="form-control me-2"
                        type="search"
                        placeholder="Nome do Líder"
                        aria-label="Search"
                        name="searchlider" />
                    <button class="btn btn-outline-success"
                        type="submit"
                        name="submit">
                        Buscar
                    </button>
                </form>
            </div>
        </div>
    </nav>
    <!-- FIM NAVBAR -->

     <!-- DIV LISTA CADASTRO -->
     <div class="gerlider">
        <?php include_once "config.php"; ?>

        <?php
        $searchlider = $_GET['searchlider'];

        // Corrigindo a consulta SQL
        $result_nomes = "SELECT * FROM tblideres WHERE namelider LIKE '%$searchlider%' OR whatsapp LIKE '%$searchlider%' OR id LIKE '%$searchlider%'";
        $resultado = mysqli_query($conn, $result_nomes);

        while ($linha = mysqli_fetch_array($resultado)) {
            // Imprimindo os valores de namelider e whatsapp
            $id = $linha['id'];
            $namelider = $linha['namelider'];
            $whatsapp = $linha['whatsapp'];
            $picture = $linha['picture']; // Adicionando esta linha para obter o caminho da imagem
            $cpf = $linha['cpf'];
        ?>
          <div class="mb-3">
            <div class="users-list d-flex">
            <div class="col-md-6">
                <ul class="p-0">
                    <li class="list-none">ID: <?php echo $id?></li>
                    <li class="list-none">Nome do lider: <?php echo $namelider?></li>
                    <li class="list-none">WhatsApp: <?php echo $whatsapp?></li>
                </ul>
                <button class='btn btn-danger' onclick='confirmDelete(<?php echo $id ?>)'>Deletar</button>
            </div>
            <div class="col-md-6 text-end">
            <img src='assets/<?php echo $cpf ?>/<?php echo $picture ?>' alt=''>
            </div>
            </div>
          </div>
        <?php }?>
    </div>
    <!-- FIM DIV LISTA CADASTRO   -->


    <script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Tem certeza?',
            text: 'Você realmente deseja excluir este registro?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Sim, excluir!',
            cancelButtonText: 'Cancelar'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "deletarlider.php?id=" + id;
            }
        });
    }
</script>

</body>
</html>
