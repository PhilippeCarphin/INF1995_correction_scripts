﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="description" content="Cours INF1995: programmation en C/C++ d'un robot fonctionnant avec un AVR d'Atmel" />
    <meta name="keywords" content="Robot,education,Atmel,AVR,opensource,Universitaire,Programmation" />
    <meta name="author" content="Jérôme Collin" />
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <link rel="icon" type="image/png" href="/inf1995/images/favicon-192x192.png" sizes="192x192"/>
    <link rel="icon" type="image/png" href="/inf1995/images/favicon.png" sizes="144x144"/>
    <link rel="icon" type="image/x-icon" href="/inf1995/images/favicon-32x32.ico" sizes="64x64"/>
    <link rel="icon" type="image/png" href="/inf1995/images/favicon.png" sizes="32x32"/>
    <link rel="icon" type="image/x-icon" href="/inf1995/images/favicon-16x16.ico" sizes="16x16"/>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <link href="/inf1995/ressources/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--<link href="/inf1995/ressources/bootstrap/css/bootstrap-responsive.css" rel="stylesheet" media="screen"> -->

    <script src='/inf1995/ressources/jquery/jquery-2.0.2.min.js'></script>
    <script src='/inf1995/ressources/bootstrap/js/bootstrap.min.js'></script>

    <link rel="stylesheet" href="/inf1995/ressources/font-awesome/css/font-awesome.min.css">
    <!--[if IE 7]>
    <link rel="stylesheet" href="/inf1995/ressources/font-awesome/css/font-awesome-ie7.min.css">
    <![endif]-->


    <link rel="stylesheet/less" type="text/css" href="/inf1995/ressources/css/style.less" />
    <script src='/inf1995/ressources/less/less-1.4.1.min.js'></script>

    <script src='/inf1995/ressources/js/functions.js'></script>

    <link rel="stylesheet" href="/inf1995/ressources/css/video_player.css" />
    <script src='/inf1995/ressources/js/video_player.js'></script>

    <title>INF1995: génie informatique et génie logiciel - Polytechnique Montréal</title>
</head>

<body>
<div class='container header'>
    <div class='row top'>
        <div class='span6'>
            <a href='http://www.polymtl.ca/gigl/'><img src='/inf1995/images/genie_info_log.png' /></a>
        </div>
        <div class='span6 right text-right'>
            <div class="form-horizontal quicklinks">
                <select class='span3'>
                    <option value='-1' selected>Liens Rapides</option>
                    <option value="https://moodle.polymtl.ca"  > Moodle
                    <option value="http://www.polymtl.ca/" > polymtl.ca
                    <option value="http://www.polymtl.ca/etudes/cours/" > Cours et horaire
                    <option value="http://www.nongnu.org/avr-libc/user-manual/modules.html" > AVRLibC
                    <option value="http://www.atmel.com" > Atmel
                    <option value="https://www4.polymtl.ca/poly/poly.html" > Dossier étudiant
                    <option value="http://www.imp.polymtl.ca/horde/imp/login.php" > Courriel IMP
                    <option value="https://zimbra.polymtl.ca/" > Zimbra
                </select>

            </div>
        </div>
    </div>
    <div class='row middle'>
        <div class='span7'>
            <a href='/inf1995'><img src='/inf1995/images/inf1995.png' /></a>
        </div>
        <div class='span5 right text-right'>
            <div class='searchbox'>
                <label class="radio inline">
                    <input checked type="radio" name="search-engine" value="http://www.groupes.polymtl.ca/inf1995/"> INF1995
                </label>
                <label class="radio inline">
                    <input type="radio" name="search-engine" value="http://www.nongnu.org/avr-libc/"> AVRLibC
                </label>
                <label class="radio inline">
                    <input type="radio" name="search-engine" value="http://www.atmel.com"> Atmel
                </label>
                <label class="radio inline">
                    <input type="radio" name="search-engine" value="http://www.google.com"> Google
                </label>
                <div class="input-append">
                    <input class="span3 searchquery" id="appendedInputButton" type="text">
                    <button class="btn search btn-primary" type="button">Recherche</button>
                </div>
            </div>

        </div>
    </div>
    <div class='row bottom'>
        <div class='span8'>
            <h5>Contacts</h5>
            <table class='table table-condensed contacts'>
                <tr>
                    <td class='first'>Enseignants</td>
                    <td colspan='2'>
                        <a href='mailto:jerome.collin@polymtl.ca'>Jérôme Collin</a>, responsable (local M-4013, poste 5060)<br />
                        <a href='mailto:jean-sebastien.naud@polymtl.ca'>Jean-Sébastien Naud</a>, HPR section 1 (bureau C-314.39)<br />
                        <a href='mailto:sarah-jane.turcot@polymtl.ca'>Sarah-Jane Turcot</a>, HPR section 2 (bureau C-314.39)<br />
                    </td>
                </tr>
                <tr>
                    <td class='first'>Support technique supplémentaire</td>
                    <td colspan='2'><a href='mailto:laurent.tremblay@polymtl.ca'>Laurent Tremblay</a> (local M-4011, poste 7181)</td>
                </tr>
                <tr>
                    <td class='first'>Chargés de laboratoire</td>
                    <td class='charges_labo_section'>Section 1</td>
                    <td>
                        <a href='mailto:adam.martin-cote@polymtl.ca'>Adam Martin-Côté</a> (mardi PM)<br />
                        <a href='mailto:philippe.carphin@polymtl.ca'>Philippe Carphin</a> (vendredi PM)
                    </td>
                </tr>
            </table>
        </div>
        <div class='span4 text-right right'>
            <a href='http://www.polymtl.ca'><img src='/inf1995/images/logo_poly.png' /></a>
        </div>
        <div class='span4'></div>
    </div>
</div>

<div class='container main-menu'>
    <div class='row main-menu'>
        <div class="navbar">
            <div class="navbar-inner">
                <ul class="nav">

                    <li>
                        <a href="/inf1995/planCours/">PLAN DE COURS</a>
                    </li>
                    <li class='dropdown'>
                        <a class="dropdown-toggle" id="drop1" role="button" data-toggle="dropdown" data-target="/inf1995/tp/" href="/inf1995/tp/">
                            TRAVAUX PRATIQUES
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="drop1">

                            <li><a href="/inf1995/tp/tp1/">TP 1</a></li>
                            <li><a href="/inf1995/tp/tp2/">TP 2</a></li>
                            <li><a href="/inf1995/tp/tp3/">TP 3</a></li>
                            <li><a href="/inf1995/tp/tp4/">TP 4</a></li>
                            <li><a href="/inf1995/tp/tp5/">TP 5</a></li>
                            <li><a href="/inf1995/tp/tp6/">TP 6</a></li>
                            <li><a href="/inf1995/tp/tp7/">TP 7</a></li>
                            <li><a href="/inf1995/tp/tp8/">TP 8</a></li>
                            <li><a href="/inf1995/tp/tp9/">TP 9</a></li>
                            <li><a href="/inf1995/tp/projet/">Projet</a></li>
                        </ul>
                    </li>
                    <li class='dropdown'>
                        <a class="dropdown-toggle" id="drop2" role="button" data-toggle="dropdown" data-target="/inf1995/materiel/" href="/inf1995/materiel/">
                            MATÉRIEL
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop2">
                            <li><a href="/inf1995/materiel/pieces/">Pièces</a></li>
                            <li class='dropdown-submenu'>
                                <a href="/inf1995/materiel/montage/">Montage</a>
                                <ul class='dropdown-menu'>
                                    <li><a href='/inf1995/materiel/montage/pontH/'>Pont en H</a></li>
                                    <li><a href='/inf1995/materiel/montage/carteMere/'>Carte mère</a></li>
                                    <li><a href='/inf1995/materiel/montage/rouesMoteurs/'>Roues, Moteurs, Engrenages</a></li>
                                    <li><a href='/inf1995/materiel/montage/sertissage/'>Sertissage des fils</a></li>
                                    <li><a href='/inf1995/materiel/montage/robot/'>Robot complet</a></li>
                                </ul>
                            </li>
                            <li><a href="/inf1995/materiel/carteMC/">Carte Mère</a></li>
                            <li><a href="/inf1995/materiel/pontH/">Pont en H</a></li>
                            <li><a href="/inf1995/materiel/debugPontH/">Débogage du pont en H</a></li>
                            <li><a href="/inf1995/materiel/debugCarteMC/">Débogage de la carte mère</a></li>
                            <li><a href="/inf1995/materiel/circuitsDeBase/">Circuits de base</a></li>
                            <li class='dropdown-submenu'>
                                <a href="/inf1995/materiel/capteurs/">Capteurs</a>
                                <ul class='dropdown-menu'>
                                    <li><a href='/inf1995/materiel/capteurs/montage/'>Montage de support</a></li>
                                    <li><a href='/inf1995/materiel/capteurs/infrarouge'>Infrarouge</a></li>
                                    <li><a href='/inf1995/materiel/capteurs/moteurs/'>Moteurs</a></li>
                                    <li><a href='/inf1995/materiel/capteurs/breadboard/'>Sur breadbord</a></li>
                                    <li><a href='/inf1995/materiel/capteurs/autres/'>Autres</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class='dropdown'>
                        <a class="dropdown-toggle" id="drop3" role="button" data-toggle="dropdown" data-target="/inf1995/logiciel/" href="/inf1995/logiciel/">
                            LOGICIEL
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop3">
                            <li><a href="/inf1995/logiciel/firmware/">Micrologiciel</a></li>
                            <li><a href="/inf1995/logiciel/progAvr/">Programmation des microcontrôleurs AVR</a></li>
                            <li><a href="/inf1995/logiciel/xp/">Méthode XP</a></li>
                        </ul>
                    </li>
                    <li>
                    <li class='dropdown '>
                        <a class="dropdown-toggle" id="drop4" role="button" data-toggle="dropdown" data-target="/inf1995/guides/" href="/inf1995/guides/">
                            GUIDES
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="drop4">
                            <li><a href="/inf1995/guides/editeurs/">Éditeurs</a></li>
                            <li><a href="/inf1995/guides/outils/">Outils fournis</a></li>
                            <li><a href="/inf1995/guides/coffre/">Articles à acheter</a></li>
                            <li><a href="/inf1995/guides/guideMontage/">Guide de montage</a></li>
                            <li><a href="/inf1995/guides/station/">Soudage/Déssoudage</a></li>
                            <li><a href="/inf1995/guides/mesure/">Appareils de mesure</a></li>
                            <li><a href="/inf1995/guides/debug/">Mise au point</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="/inf1995/fichiers/">FICHIERS</a>
                    </li>
                    <li>
                        <a href="/inf1995/video/">VIDÉOS</a>
                    </li>
                    <li>
                        <a href="/inf1995/references/">RÉFÉRENCES</a>
                    </li>
                    <li>
                        <a href="/inf1995/evaluation/">ÉVALUATION</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class='container content-container' >
    <div class='row'>
        <ul class="breadcrumb" id="mainBreadCrumb">

        </ul>





<p style="text-align:right" >
    <a href='../evaluation/'>retour</a> &nbsp | &nbsp
    <a href='index1.php'>par liste alphabétique</a> &nbsp | &nbsp
    <a href='indexe1.php'>par équipe de deux</a> 
</p>


<!DOCTYPE html>
<html>
   <!-- Liste produite automatiquement par le script listeEtudiants.py -->
   <!-- Département de génie informatique et de génie logiciel -->
   <!-- Polytechnique Montréal -->
   <!-- Jérôme Collin, poste 5060 -->
<head>
   <title>Liste des étudiants/équipes pour la session automne 2017</title>
   <meta charset="UTF-8">
   <meta name = "description" content = "Liste équipes/étudiants">
   <meta name = "author" content = "Jérôme Collin, DGIGL">
   <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
</head>

<body>
<p><b> Liste des équipes pour la session automne 2017 </b></p>
<p><b> Section 1 de cours: </b></p>
<br>
<table style="margin: auto; width: 55%; text-align: left; border-collapse: collapse; border-spacing: 0;  "> 
   <tr style="background-color: lightGray;">
      <th style="text-align: center; border: 1px solid black; cellspacing: 0;">
         Nom</th> 
      <th style="text-align: center; border: 1px solid black; cellspacing: 0;">
         Prénom</th> 
      <th style="text-align: center; border: 1px solid black; cellspacing: 0;">
         Équipe  </th>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Dah-Achinanon </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Ulrich </td>
      <!-- Crl ulrich.dah-achinanon -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0105 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Diler </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Andre </td>
      <!-- Crl andre.diler -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0105 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Hammami </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Ahmed </td>
      <!-- Crl ahmed.hammami -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0105 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Monlong </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Antoine </td>
      <!-- Crl antoine.monlong -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0105 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         De Champlain </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Antoine </td>
      <!-- Crl antoine.de-champlain -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0307 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Meunier </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Bernard </td>
      <!-- Crl bernard.meunier -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0307 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Naud-Dulude </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Olivier </td>
      <!-- Crl olivier.naud-dulude -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0307 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Nguyen </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Duc-Thien </td>
      <!-- Crl duc-thien.nguyen -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         0307 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Belkouch </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Leila </td>
      <!-- Crl leila.belkouch -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1041 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Gnaga </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Dogbéda Georges </td>
      <!-- Crl dogbeda-georges.gnaga -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1041 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Juteau </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Godefroy </td>
      <!-- Crl godefroy.juteau -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1041 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Phan </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Marcus </td>
      <!-- Crl marcus.phan -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1041 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Laroche </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Genevieve </td>
      <!-- Crl genevieve.laroche -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1225 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         M'hirsi </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Meriem </td>
      <!-- Crl meriem.mhirsi -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1225 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Sicaud </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Jacques </td>
      <!-- Crl jacques.sicaud -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1225 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Stimphat </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Emmanuella </td>
      <!-- Crl emmanuella.stimphat -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1225 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Boulianne </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Jean-Sébastien </td>
      <!-- Crl jean-sebastien.boulianne -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1521 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Dorais </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Jacob </td>
      <!-- Crl jacob.dorais -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1521 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Legault </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         François-Xavier </td>
      <!-- Crl francois-xavier.legault -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1521 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Marois </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Charles </td>
      <!-- Crl charles.marois -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1521 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Bekteshi </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Amena </td>
      <!-- Crl amena.bekteshi -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1829 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Lambert </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Justine </td>
      <!-- Crl justine.lambert -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1829 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Rousseau </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Julie </td>
      <!-- Crl julie.rousseau -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1829 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         You-Tuon </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Olivia </td>
      <!-- Crl olivia.you-tuon -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         1829 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Ben Taleb </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Youssef </td>
      <!-- Crl youssef.ben-taleb -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2028 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Boussari </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Hanane </td>
      <!-- Crl hanane.boussari -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2028 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Chayer </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Pascal </td>
      <!-- Crl pascal.chayer -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2028 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Matharoo </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Simren </td>
      <!-- Crl simren.matharoo -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2028 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Ahohoue </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Nourou-Dine </td>
      <!-- Crl nourou-dine.ahohoue -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2230 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Bienvenue </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Tristan </td>
      <!-- Crl tristan.bienvenue -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2230 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Cissé </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Mamadou Aliou </td>
      <!-- Crl mamadou-aliou.cisse -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2230 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Legault </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Julien </td>
      <!-- Crl julien-3.legault -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2230 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Bossé </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Sophie </td>
      <!-- Crl sophie.bosse -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2333 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Bérubé </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Marie-Elaine </td>
      <!-- Crl marie-elaine.berube -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2333 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Correia-Martins </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Élisa </td>
      <!-- Crl elisa.correia-martins -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2333 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Daigneault-Demers </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Antoine </td>
      <!-- Crl antoine.daigneault-demers -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2333 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Bouchard </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Billy </td>
      <!-- Crl billy.bouchard -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2440 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Gauthier </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Yoan </td>
      <!-- Crl yoan.gauthier -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2440 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Granger </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Francis </td>
      <!-- Crl francis.granger -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2440 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Lee </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Sang Hyuk </td>
      <!-- Crl sang-hyuk.lee -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2440 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Obossou Ema-Wo </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Sanyan </td>
      <!-- Crl sanyan.obossou-ema-wo -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2440 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Belfodil </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Anes Mohammed K </td>
      <!-- Crl anes.belfodil -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2627 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         D'Amours-Fortier </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Samuel </td>
      <!-- Crl samuel.damours-fortier -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2627 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Garnier </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         David </td>
      <!-- Crl david.garnier -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2627 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Trad </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Mohamed Lamine </td>
      <!-- Crl mohamed-lamine.trad -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         2627 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Clermont Dejean </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Olivier </td>
      <!-- Crl olivier.clermont-dejean -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         3132 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Germain </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Audrey </td>
      <!-- Crl audrey.germain -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         3132 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Hassoun </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Anas </td>
      <!-- Crl anas.hassoun -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         3132 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Mounzeo </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Fatou Sokhna </td>
      <!-- Crl fatou-sokhna.mounzeo -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         3132 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Bohbot </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         James </td>
      <!-- Crl james.bohbot -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         4344 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         El Fad </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Mehdi </td>
      <!-- Crl mehdi.el-fad -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         4344 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Elakhrass </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Mohamed Ali </td>
      <!-- Crl mohamed-ali.elakhrass -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         4344 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Ho </td>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Henri Bao-Khoi </td>
      <!-- Crl henri.ho -->
      <td style="text-align: center;border: 1px solid black; cellspacing: 0px;"> 
         4344 </td>
   </tr>
   <tr>
      <td style="border: 1px solid black; cellspacing: 0px;"> &nbsp;&nbsp; 
         Total: 53 étudiants </td>
   </tr>
</table>
<br> 
<br> 
</body>
</html>
 
<!--
   footer.php - phe 5 décembre 2005
   
-->

<!--
     Finir le chargement de la page principale avant...
-->
</div>
</div>


<style type="text/css">


</style>

<div id="popupPhotos" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div id="myCarousel" class="carousel slide">

        <div class="carousel-inner">
                                    <div class="item active ">
                            <img src="/inf1995/preambule/imagesRobot/images/5robots_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/5robots.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/escalier+3robots_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/escalier+3robots.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/lt+usb_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/lt+usb.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/jaune+ligne_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/jaune+ligne.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/ligne+3robots_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/ligne+3robots.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/oscillo+blanc_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/oscillo+blanc.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/oscillo+noir_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/oscillo+noir.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/ps2+bleu_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/ps2+bleu.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/3robots_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/3robots.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/arriere_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/arriere.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/eviterPoteaux_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/eviterPoteaux.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/combatants_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/combatants.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/optimus_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/optimus.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                                                <div class="item  ">
                            <img src="/inf1995/preambule/imagesRobot/images/carteMere_.jpg" alt="">
                            <div class="carousel-caption text-right">
                                                                <a class="btn btn-danger close" data-dismiss="modal" href="#" style="opacity:1; float:none">Fermer</a>
                                <a class="btn btn-success download-image" href="/inf1995/preambule/imagesRobot/images/carteMere.jpg">Télécharger l'image</a>
                            </div>
                        </div>
                        
        </div>

        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
    </div>
</div>



<footer >

    <div class = "container skinfooter">
        <div class='row'
        <div class='span12'>
            <a class = "skinfooteritem" href="/inf1995/planDuSite/"> Plan du site </a>
            <a class = "skinfooteritem" href="/inf1995/intro/"> Description générale du robot</a>
            <a class = "skinfooteritem" href="/inf1995/prixMalouf/"> Prix Philip et Lily Malouf</a>
            <a class = "skinfooteritem" href="/inf1995/preambule/remerciements/"> Remerciements</a>
            <a class = "skinfooteritem" href="#popupPhotos" data-toggle="modal" > Photographies</a>
            <a class = "skinfooteritem" href="/inf1995/liensDivers/"> Liens  </a>


            <div style= "margin-top:15px; margin-bottom:15px; color:#E7E6E6" >
                Copyright (C) 2005-2015 Jérôme Collin - INF1995 :
                Projet initial en ingénierie informatique et travail en Équipe <br>
                Département de génie informatique et génie logiciel - Polytechnique Montréal
            </div>
        </div>

    </div>
    </div>

</footer>


</body>
</html>
<!-- ******************** F O O T E R  ( F I N ) ******************** !-->
