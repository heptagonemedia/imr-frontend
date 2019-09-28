<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="formulaireCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Hind+Guntur|Rubik|Squada+One&display=swap" rel="stylesheet">

    <!-- jQuery -->
    <script src="js/materialize.js"></script>


</head>
<title>Formulaire</title>
<!-- Compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<nav>
    <div class="nav-wrapper black">
        <div class="row">
            <div class="col l4 center-align"><button href="#" data-target="slide-out" class="sidenav-trigger btn black white-text" ><i class="material-icons" id="menu">menu</i></button></div>
            <div class="col l4 center-align" style="font-size: 18pt">Formulaire de recherche</div>
            <div class="col l4 center align ">
                <a href="accueil.php" class="breadcrumb">accueil</a>
                <a href="#" class="breadcrumb">formulaire</a>
            </div>
        </div>
    </div>
</nav>



<div class="container">

    <div id="register-page" class="row">
        <div class="col s12 z-depth-6 card-panel">
            <form class="register-form">
                <div class="row">
                    <div class="input-field col s2">
                        <i class="small material-icons prefix">content_paste</i>
                        <label>Calcul</label>
                    </div>
                    <div class="input-field col s10">
                        <p>
                            <label id="radio">
                                <input name="calcul" type="radio" value="moyenne" id="moyenne" checked />
                                <span>Moyenne</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="calcul" type="radio" value="mediane" id="mediane" />
                                <span>Mediane</span>
                            </label>
                        </p>
                        <p>
                            <label>
                                <input name="calcul" type="radio"  value = "ecart" id="ecart" />
                                <span>Ecart type</span>
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row" id="marge">
                    <div class="input-field col s2">
                        <i class="small material-icons prefix">history</i>
                        <label>Fréquence</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="annee" type="text">
                        <label for="annee" class="center-align">Année</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="mois" type="text">
                        <label for="mois" class="center-align">Mois</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="jour" type="text">
                        <label for="jour" class="center-align">Jour</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="heure" type="text">
                        <label for="heure" class="center-align">Heure</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="minute" type="text">
                        <label for="minute" class="center-align">Minute</label>
                    </div>
                    <div class="col s2">
                    </div>
                    <div class="col s10">
                        <span class="helper-text" id="frequence"><label id="alerte">Il faut saisir au moins une valeur et uniquement des entiers</label></span>
                    </div>
                </div>
                <div class="row" id="marge">
                    <div class="input-field col s2">
                        <i class="small material-icons prefix">location_searching</i>
                        <label>Bouée</label>
                    </div>
                    <div class="input-field col s10">
                        <input type="number" id="bouee">
                        <label for="bouee" id="labelBouee">Numero</label>
                    </div>
                    <div class="col s2">
                    </div>
                    <div class="col s10">
                        <span class="helper-text" id="HelperBouee"><label id="alerte">Il faut entrer un entier compris entre 1 et 75</label></span>
                    </div>
                </div>
                <div class="row" id="marge">
                    <div class="input-field col s2">
                        <i class="small material-icons prefix">date_range</i>
                        <label>Intervalle temporel</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="dateDeb" type="text" class="datepicker">
                        <label for="dateDeb">Date début</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="heureDeb" type="text" class="timepicker">
                        <label for="heureDeb">Heure début</label>
                    </div>
                    <div class="input-field col s3">
                        <input id="dateFin" type="text" class="datepicker">
                        <label for="dateFin">Date fin</label>
                    </div>
                    <div class="input-field col s2">
                        <input id="heureFin" type="text" class="timepicker">
                        <label for="heureFin">Heure fin</label>
                    </div>
                    <div class="col s2">
                    </div>
                    <div class="col s10">
                        <span class="helper-text" id="heureTest"><label id="alerte">Il faut que la date de fin soit supérieure à celle de début</label></span>
                    </div>
                </div>
                <div class="row" id="marge">
                    <div class="input-field col s2">
                        <i class="small material-icons prefix">save</i>
                        <label>Enregistrer calcul</label>
                    </div>
                    <div class="input-field col s10">
                        <!-- Switch -->
                        <div class="switch">
                            <label>
                                Non
                                <input type="checkbox">
                                <span class="lever"></span>
                                Oui
                            </label>
                        </div>
                    </div>
                </div>
                <br><br>
                <div class="row" id="marge">
                    <div class="input-field col s12">
                        <a href="#" class="btn waves-effect waves-light pastel col s12" onclick="detecterErreurs()">Valider</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<ul id="slide-out" class="sidenav draggable">
    <li><div class="user-view">
            <div class="background">
                <img src="fond_header_navigation_side_bar.jpg" height="300px">
            </div>
            <a href="#user"><img src="logo_imr.png" width="60px" height="50px"></a>
            <a href="#name"><span class="white-text name">Institut Maritime de Rimouski</span></a>
        </div></li>
    <li><a class="waves-effect waves-teal" href="accueil.php"><i class="material-icons">home</i>Accueil</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Accéder aux calculs</a></li>
    <li class="no-padding">
        <ul class="collapsible collapsible-accordion  waves-teal">
            <li>
                <a class="collapsible-header">Calculs Enregistrés<i class="material-icons">arrow_drop_down</i></a>
                <div class="collapsible-body">
                    <ul>
                        <?php for ($i = 0; $i<6;$i++):
                            echo '<li><a class="waves-effect waves-teal" href="resultats.php?bouee='.$i.'&type=enr"><i class="material-icons">insert_chart_outlined</i>Calcul '.$i.'</a></li>';
                        endfor;
                        ?>
                    </ul>
                </div>
            </li>
        </ul>
    </li>
    <li><a class="waves-effect waves-teal" href="resultats.php?bouee=2&type=prev"><i class="material-icons">new_releases</i>Calcul en cours</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Faire des calculs</a></li>
    <li><a class="waves-effect waves-teal" href="formulaireRecherche.php"><i class="material-icons">add_circle_outline</i>Nouveau calcul</a></li>
</ul>

</body>


</html>
<script type="text/javascript" src="script.js"></script>
</html>
