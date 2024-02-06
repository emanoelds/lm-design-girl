<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="../styles/index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>LM - Portfólio</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-custom">
            <div class="container">
                <a class="navbar-brand mt-3" href="../index.php">
                    <img class="img-nav" src="../assets/images/logo.png" alt="Logo" width="120">
                </a>

                <button class="navbar-toggler m-3" data-bs-toggle="collapse" data-bs-target="#nav-principal">
                    <i class="fa fa-bars fa-xl"></i>
                </button>

                <div class="collapse navbar-collapse p-3" id="nav-principal">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="../index.php">Principal</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../pages/contato.php">Contato</a>
                        </li>
                        
                        <li class="nav-item">
                            <a class="nav-link" href="#">Sobre</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="bg-white rounded-5 text-center p-2">
                            <h1>MEUS DESIGNS</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12 mt-5 mb-5">
                        <div class="carousel slide bg-danger rounded-4" id="carouselId" data-bs-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-bs-target="#carouselId" data-bs-slide-to="0" class="active"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="1"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="2"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="3"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="4"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="5"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="6"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="7"></li>
                                <li data-bs-target="#carouselId" data-bs-slide-to="8"></li>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem1.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem2.jpg" class="d-block" alt="First slide">
                                    </div>      
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem3.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem7.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem4.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem5.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem6.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/imagem8.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>

                                <div class="carousel-item">
                                    <div class="d-flex justify-content-center">
                                        <img src="../assets/images/image9.jpg" class="d-block" alt="First slide">
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselId" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselId" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
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