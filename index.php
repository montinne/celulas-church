<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="css/login.css" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
            integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <title>Células Church - Login</title>
    </head>
    <body>
    <?php
include('config.php');

if(isset($_POST['email']) || isset($_POST['password'])) {

    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['password']) == 0) {
        echo "Preencha sua senha";
    } else {

        $email = $conn->real_escape_string($_POST['email']);
        $senha = $conn->real_escape_string($_POST['password']);

        $sql_code = "SELECT * FROM admin WHERE email = '$email' AND password = '$senha'";
        $sql_query = $conn->query($sql_code) or die("Falha na execução do código SQL: " . $conn->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['name'] = $usuario['name'];

            header("Location: dashboard.php");

        } else {
            echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>';
    echo '<script>
            Swal.fire({
                icon: "error",
                title: "E-mail ou senha inválidos!",
                showConfirmButton: true,
                timer: 1500
            }).then(function() {
                window.location = "index.php";
            });
          </script>';
        }

    }

}
?>
        <main id="container">
            <form action="" method="POST" id="login_form">
                <div id="form_header">
                    <h1>Login</h1>
                    <i id="mode_icon" class="fa-solid fa-moon"> </i>
                </div>
                <div id="social_media">
                    <a href="#">
                        <img
                            src="assets/social-icons-login/facebook.png"
                            alt="Facebook Logo"
                        />
                    </a>
                    <a href="#">
                        <img
                            src="assets/social-icons-login/google.png"
                            alt="Google Logo"
                        />
                    </a>
                    <a href="#">
                        <img
                            src="assets/social-icons-login/github.png"
                            alt="Github Logo"
                        />
                    </a>
                </div>
                <div id="inputs">
                    <div class="input-box">
                        <label for="email">
                            E-mail
                            <div class="input-field">
                                <i class="fa-solid fa-envelope"></i>
                                <input type="text" id="email" name="email" />
                            </div>
                        </label>
                    </div>
                    <div class="input-box">
                        <label for="password">
                            Senha
                            <div class="input-field">
                                <i class="fa-solid fa-key"></i>
                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                />
                            </div>
                        </label>
                        <div id="forgot_password">
                            <a href="#">Esqueceu sua senha?</a>
                        </div>
                    </div>
                </div>

                <button type="submit" id="login_button">
                    Entrar
                </button>
            </form>
        </main>
        <script type="text/javascript" src="js/login.js"></script>
    </body>
</html>
