<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Accueil Diviser pour régner - Cours NSI</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="author" content="Tle NSI - StPierre 2021">
        <meta name="description" content="Leçon sur la méthode Diviser pour régner destinée aux élèves de NSI de SaintPierre de niveau Terminale.">
        <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/quizz.js"></script>
    </head>
    <body style="margin: 0;" >
        <?php include 'header.php';?>

        <h1 class="sous_titre" id="part0title">DIVISER POUR MIEUX RÉGNER</h1>
        <!--Annonce du sous titre-->
		<section class="content">
            <!--Annonce de l'écriture du contenue en utilisant la classe content-->
			<div class="sommaire">
                <!--Création d'un sommaire en utilisant la classe CSS sommaire-->
				<h3>Sommaire</h3>
				<ol class="sommairelist">
                    <!--Utilsation de la classe CSS sommairelist permettant de créer une liste pour le sommaire-->
					<li class="sommaire-element">I | Qui sommes nous ?</li>
                    <li class="sommaire-element">II | Les différentes pages du site</li>
                    <!-- remplissage du sommaire en utilisant la classe CSS sommaire-element -->

				</ol>
			</div>
			<div class="cours">
                <!-- Présentation du groupe avec le style de la classe cours-->
				<div class="subpart">
                    <!--création du paragraphe1 avec la classe subpart-->
					<div class="sp1text">
                        <!-- Annonce du texte avec la classe sp1text-->
						<h3 class="sous_sous_titre">I | Qui sommes nous ?</h3>
						<p>Nous sommes une équipe composée de 7 élèves de Terminale (2020/2021) ayant comme spécialités NSI et Mathématiques.<br>Notre projet consiste en la création d’un cours sur la notion "Diviser pour régner”<br>
							notre objectif est nullement professionnel mais éducatif et instructif.</p>
					</div>
					<img src="img/Tdg.png" alt="Travail de groupe" id="methode">
				</div>
				<div class="subpart">
                    <img src="img/group.jpeg" alt="Photo du groupe NSI 2020-2021" style="border-radius: 20px;" height="200px">
                    <!--Annonce du paragraphe grâce à la classe subpart-->
					<div class="sp2text">
						<h3 class="sous_sous_titre">II | Les différentes page du site</h3>
                        <!-- Annonce des différentes page du site (lien cliquable)-->
						<p>Notre site est divisé en 4 pages:<br>
                            <li class="sommaire-element">Page d'acceuil</li>
                            <!--Lien ramenant sur la page d'acceuil-->
                            <li class="sommaire-element">Page 1 | Rappel</li>
                            <li class="sommaire-element">Page 2 | Diviser pour mieux régner</li>
                            <li class="sommaire-element">Page 3 | Tri fusion</li>
                            <!-- Annonce des différentes pages-->
					</div>
				</div>		
			</div>
			
		</section>

        <?php include 'footer.php';?>
    </body>
</html>