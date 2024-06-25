<!doctype html>
<html lang="en">

<head>
    <script src="../assets/js/color-modes.js"></script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.118.2">
    <title>Modifier le profil</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/album/">



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        li {
            text-decoration: none;
        }
    </style>


</head>

<body>

    <header class="p-3 text-bg-dark">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap" />
                    </svg>
                </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="../index.php" class="nav-link px-2 text-secondary">Accueil</a></li>
                    </ul>

                
            </div>
        </div>
    </header>

    <main>

        <section class="py-5 text-center container">

            <h1>Modifier mon profil</h1>
             
            Mon adresse électronique : <?= $util["mailU"] ?> <br />
            Mettre à jour mon pseudo : 


            <form action="./?action=updProfil" method="POST">

                <input type="text" name="pseudoU" placeholder="Nouveau pseudo" /><br />
                <hr>
                Mettre à jour mon mot de passe : <br />
                <input type="password" name="mdpU" placeholder="Nouveau mot de passe" /><br />
                <input type="password" name="mdpU2" placeholder="Confirmer la saisie" /><br />
                <input type="submit" value="Enregistrer" />
            
                <hr>

            </form>
         
        </section>

    </main>

    <div class="container">
        <footer class="py-5">
            <div class="row">

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="/paysASE/vue/vueMentions.html" class="nav-link p-0 text-muted">Mentions Légales</a></li>
                        <li class="nav-item mb-2"><a href="/paysASE/vue/vuePolitiqueConf.html" class="nav-link p-0 text-muted">Politique de
                                confidentialité</a></li>
                        <p>Accessibilité : partiellement conforme</p>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <p>Contact : ochheak@gmail.com</p>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                <form action="" method="POST">
                        <h5>S'inscrire à notre newsletter</h5>
                        <p>Recevez des notifications et les actualités du moment!</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Adresse mail</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Adresse mail">
                            <button class="btn btn-primary" type="button">S'inscrire</button>
                        </div>
                    </form>
                </div>
            </div>
        </footer>
    </div>

    
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>