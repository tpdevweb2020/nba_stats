<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>NBA Stats</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/nba-icon.png">
    <!-- Custom Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    
    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <div class="brand-logo">
                <a href="index.html" class="text-white">
                    <b class="logo-abbr"><i class="ti-basketball"></i> </b>
                    <span class="logo-compact"><i class="ti-basketball"></i></span>
                    <span class="brand-title">
                    <i class="ti-basketball"></i> NBA Stats
                    </span>
                </a>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

        <!--**********************************
            Header start
        ***********************************-->
        <div class="header">    
            <div class="header-content clearfix">
                
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="toggle-icon"><i class="icon-menu"></i></span>
                    </div>
                </div>
                <div class="header-left">
                    <div class="input-group icons">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent border-0 pr-2 pr-sm-3" id="basic-addon1"><i class="mdi mdi-magnify"></i></span>
                        </div>
                        <input type="search" class="form-control" placeholder="Rechercher" aria-label="Search Dashboard">
                        <div class="drop-down animated flipInX d-md-none">
                            <form action="#">
                                <input type="text" class="form-control" placeholder="Rechercher">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="header-right">
                    <ul class="clearfix">
                        <li class="icons dropdown">
                            <div class="user-img c-pointer position-relative" data-toggle="dropdown">
                                <span class="activity active"></span>
                                <img src="images/user/1.png" height="40" width="40" alt="">
                            </div>
                            <div class="drop-down dropdown-profile animated fadeIn dropdown-menu">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="app-profile.html"><i class="icon-user"></i> <span>Mon profil</span></a></li>
                                        <hr class="my-2">
                                        <li><a href="page-login.html"><i class="icon-key"></i> <span>Déconnexion</span></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="nk-sidebar">           
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li class="nav-label">Tableau de bord</li>
                    <li>
                        <a href="./index.php"  aria-expanded="false">
                            <i class="icon-speedometer menu-icon"></i><span class="nav-text">Rapport global</span>
                        </a>
                    </li>
                    <li class="nav-label">Infos Joueurs</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-magnifier menu-icon"></i><span class="nav-text">Rechercher</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./playersByPosition.php">Par poste</a></li>
                            <li><a href="./playersByTeam.php">Par équipe</a></li>
                        </ul>
                    </li>
                    <li class="nav-label">Infos Équipes</li>
                    <li>
                        <a href="./stats.php" aria-expanded="false">
                            <i class="icon-list menu-icon"></i><span class="nav-text">Statistiques</span>
                        </a>
                    </li>
                    <li>
                        <a href="./managers.php" aria-expanded="false">
                            <i class="icon-people menu-icon"></i><span class="nav-text">Managers</span>
                        </a>
                    </li>
                    <li class="nav-label">Classement</li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-graph menu-icon"></i><span class="nav-text">Equipes</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./rankingConference.php">Conférence</a></li>
                            <li><a href="./rankingDivision.php">Division</a></li>
                        </ul>
                    </li>
                    <li>
                        <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                            <i class="icon-chart menu-icon"></i><span class="nav-text">Joueurs</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="./rankingPoints.php">Points</a></li>
                            <li><a href="./rankingPasses.php">Passes</a></li>
                            <li><a href="./rankingRebounds.php">Rebonds</a></li>
                            <li><a href="./rankingRatio.php">Rendement</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->

        <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">

            <div class="container-fluid mt-3">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <h2 class="card-title text-primary">Consignes </h2>
                                <p>
                                    <ul>
                                        <li>1. Commencez par effectuer un découpage des différents blocs HTML de ce template afin de faciliter la création de nouvelles pages</li>
                                        <li>2. Créez ensuite les différentes pages spécifiées par le menu vertical à gauche</li>
                                        <li>3. Effectuez les requêtes en base de données pour afficher sous la forme de votre choix les réponses / résultats de requêtes</li>
                                        <li>4. Enfin, le champs recherche devrait permettre de retrouver une élément, qu'il soit joueur, manager, ou équipe. Si possible, intégrer un autocomplete ou un résultat de recherche immédiat en ajax, avec un tag en bout de ligne qui spécifiera le type de résultat (Equipe, Joueur ou Manager) selon les résultats trouvés.</li>
                                    </ul>
                                </p>
                                <hr>
                                <h3 class="card-title">Bienvenue</h3>
                                <p>Dans ce nouvel exercice, nous allons utiliser une base de données pré-conçue et <a href="db/nba_db.sql" class="font-weight-bold">disponible ici</a>. Cette base de données contient toutes les statistiques de la saison 2017/2018 de NBA, l'élite du basket-ball américain et même mondial. Il vous suffit de créer une base vide dans votre espace phpmyadmin, puis de l'importer, les tables sont quant à elles déjà fournies en statistiques.</p>
                                <p>Votre objectif va être de comprendre cette base de données, et de l'exploiter de manière à rendre ce dashboard un centre unique de statistiques et de consultations des joueurs et des équipes du championnat NBA. La compréhension de l'Anglais est alors un vrai plus dans l'analyse des termes utilisés par les colonnes, mêmes s'ils sont également compréhensibles avec une simple recherche Google.</p>
                                <p>La documentation de ce template Bootstrap 4 est disponible en <a class="font-weight-bold" href="https://demo.themefisher.com/quixlab/">cliquant sur ce lien</a>, en visualisant la Live preview, vous pourrez trouves des blocs html/css prêts à l'emploi dans les différentes pages que vous aurez à créer.</p>
                                <p>Vous trouverez ci-dessous la BDD en vue relationnelle, ce diagramme devrait vous permettre de comprendre comment celle-ci a été conçue et mise à jour.</p>
                                <div class="text-center">
                                    <img src="images/diagram_nba.png" class="img-fluid" alt="diagram nba stats">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- #/ container -->
        </div>
        <!--**********************************
            Content body end
        ***********************************-->
        
        
        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>TP Dev web - Exercice NBA Stats</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->
    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <script src="plugins/common/common.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="js/settings.js"></script>
    <script src="js/gleek.js"></script>
    <script src="js/styleSwitcher.js"></script>


</body>

</html>