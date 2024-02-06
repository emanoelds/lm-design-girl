<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>LM - Designer_Girl</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-custom">
            <div class="container">
                <a class="navbar-brand mt-3" href="index.php">
                    <img class="img-nav" src="assets/images/logo.png" alt="Logo" width="120">
                </a>

                <button class="navbar-toggler m-3" data-bs-toggle="collapse" data-bs-target="#nav-principal">
                    <i class="fa fa-bars fa-xl"></i>
                </button>

                <div class="collapse navbar-collapse p-3" id="nav-principal">
                    <ul class="navbar-nav justify-content-center">
                        <li class="nav-item">
                            <a class="nav-link" href="pages/meu_portfolio.php">Portfólio</a>
                        </li>
    
                        <li class="nav-item">
                            <a class="nav-link" href="pages/contato.php">Contato</a>
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
        <section class="bg-custom-sect-ptf mt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center justify-content-md-around">
                        <img class="img lary rounded-circle" src="assets/images/lary.jpg" alt="imagem" width="200">   
                    </div>

                    <div class="col-md-6 d-flex flex-column">
                        <div class="d-flex justify-content-center">
                            <h3 class="text-dark mt-4 text-center">OLÁ, ME CHAMO LARISSA!</h3>
                        </div>

                        <div class="d-flex justify-content-center">
                            <h5 class="lead bg-danger rounded-1 p-2 w-75 text-center">Busco sempre evoluir como designer!</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-custom-sect" id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center">
                        <div class="bg-portfolio-init mt-5 mb-5">
                            <h1 class="h1-custom text-center">&#10023; Portfólio &#10023;</h1>
                            <div class="d-flex">
                                <p class="h5-custom">
                                    Mídias Sociais<br>
                                    Revistas<br>
                                    Logotipo<br>
                                    Anúncios

                                    <div class="ms-5">
                                        <img class="img-fluid d-flex" src="assets/images/logotipos.png" alt="" width="200">
                                    </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-sobre" id="sobre">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="text-center">&#9734; Sobre mim &#9734;</h1>
                        <p class="lead">
                            Sou uma designer muito dedicada, esforçada e pontual, sempre procurando
                            melhorar e me esforçando ao máximo!<br>
                            Meu objetivo é me tornar uma designer profissional e especialista em 
                            <strong>Adobe Photoshop</strong>, <strong>Adobe Illustrator</strong>, 
                            <strong>CorelDraw</strong>, <Strong>Adobe XD</Strong> entre outros.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-white p-5 mt-5" id="contato">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 d-flex justify-content-center">
                        <a class="btn-ctt btn-custom-instagram text-nowrap" 
                        href="https://www.instagram.com/p/CkJzcMDLBXb/?utm_source=ig_web_copy_link"
                        target="_blank">
                            <i class="fa-brands fa-instagram fa-xl"></i>
                            Instagram
                        </a>

                        <a class="btn-ctt btn-custom-whatsapp ms-3 text-nowrap"
                            href="https://api.whatsapp.com/send?phone=5515997239416">
                            <i class="fa-brands fa-whatsapp fa-xl"></i>
                            WhatsApp
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <a href="index.html">
                            <img src="assets/images/logo.png" width="100" alt="logo">
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
                                    <a class="nav-link" href="pages/meu_portfolio.php">Portfólio</a>
                                </li>

                                <li class="nav-item mb-3">
                                    <a class="nav-link" href="pages/sobre.php">Sobre</a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="pages/contato.php">Contato</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </footer>
    </main>


    <script src="https://kit.fontawesome.com/408ad07b0a.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz"
        crossorigin="anonymous"></script>
</body>

</html>