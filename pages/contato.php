<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>LM - Contato</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-custom">
            <div class="container">
                <a class="navbar-brand mt-3" href="../index.php">
                    <img class="img-nav" src="../assets/images/logo.png" alt="Logo" width="120">
                </a>

                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#nav-principal">
                    <i class="fa fa-bars fa-xl"></i>
                </button>

                <div class="collapse navbar-collapse p-3 " id="nav-principal">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Principal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="meu_portfolio.php">Portfólio</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contato.php">Contato</a>
                        </li>

                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container">
                <div class="row mt-5 mb-5">
                    <div class="col-12 d-flex justify-content-center contato">
                        <h1>&#9829; ENTRE EM CONTATO &#9829;</h1>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="list-unstyled d-flex justify-content-center">
                            <a class="btn-ctt btn-custom-instagram" href="https://www.instagram.com/lm_desiger_girl/" target="_blank">
                                <i class="fa-brands fa-instagram fa-xl"></i>
                                Instagram
                            </a>

                            <a class="btn-ctt btn-custom-whatsapp ms-3" href="https://api.whatsapp.com/send?phone=5515997239416" target="_blank">
                                <i class="fa-brands fa-whatsapp fa-xl"></i>
                                Whatsapp
                            </a>
                        </div>
                    </div>
                </div>

                <div class="row mt-5 mb-5">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <form class="d-flex flex-column bg-white p-4 rounded-4" action="processa-email.php" method="post">
                            <h2 class="mb-4 text-dark display-6">ENVIE UMA MENSAGEM</h2>
                            <input type="text" class="form-control mb-3 w-100" name="nome" placeholder="Nome">
                            <input type="email" class="form-control mb-3" name="email" placeholder="E-mail">
                            <textarea class="form-control mb-4" name="mensagem" placeholder="Mensagem"></textarea>
                            <input class="btn btn-danger" type="submit" value="Enviar">
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html">
                            <img src="../assets/images/logo.png" width="100" alt="logo">
                        </a>
                    </div>

                    <div class="col-sm-4 mt-5">
                        <p>Artísta: Larissa Miranda</p>
                        <p>Desenvolvido por @emanoeldossantosyt</p>
                    </div>

                    <div class="col-sm-4 d-flex justify-content-around">
                        <nav class="navbar navbar-custom">
                            <ul class="navbar-nav">
                                <li class="nav-item mb-2">
                                    <a class="nav-link" href="../index.php">Principal</a>
                                </li>

                                <li class="nav-item mb-3">
                                    <a class="nav-link" href="sobre.php">Sobre</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="contato.php">Contato</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
    </main>

    <script src="https://kit.fontawesome.com/408ad07b0a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>

</html>