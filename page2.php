<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Diviser pour mieux régner - Cours NSI</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="author" content="Tle NSI - StPierre 2021">
        <meta name="description" content="Leçon sur la méthode Diviser pour régner destinée aux élèves de NSI de SaintPierre de niveau Terminale.">
        <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/quizz.js"></script>
    </head>
    <body style="margin: 0;" id="page2" name="page2">
        <?php include 'header.php';?>

        <h1 class="sous_titre" id="part2title">DIVISER POUR MIEUX RÉGNER</h1>
		<section class="content">
			<div class="sommaire">
				<h3>Sommaire</h3>
				<ol class="sommairelist" style="list-style-type: none;">
					<li class="sommaire-element"><a href="#qcq">I | Qu'est ce que c'est ?</a></li>
					<li class="sommaire-element"><a href="#qca">II | Les étapes de la méthode</a></li>
					<li class="sommaire-element"><a href="#qcb">III | Les entreprise qui utilise cette   méthode</a></li>
				</ol>
			</div>
			<div class="cours">
				<div class="subpart1">
					<div class="sp1text">
						<h3 class="sous_sous_titre " id="qcq">I | Qu'est ce que c'est ?</h3>
						<p>La méthode diviser pour mieux régner est une méthode<br>algorithmiques" afin de basée sur le principe suivant :<br>
							On prend un problème (généralement complexe à résoudre), on divise ce<br>problème en une multitude de petits problèmes, l'idée étant<br>que les "petits problèmes" seront plus simples à résoudre que le problème original.<br>
							Une fois les petits problèmes résolus, on recombine<br>les "petits problèmes résold'obtenir la solution du problème de départ.</p>
					</div>
					<img src="img/methode.png" alt="Explication de la méthode" id="methode">
				</div>
				<div class="subpart2">
					<div class="sp1text">
						<h3 class="sous_sous_titre" id="qca">II | Les étapes de la méthode</h3>
						<p>Le paradigme "diviser pour mieux régner" repose donc sur 3 étapes :<br></br><br></br>
						-   <STRONG>DIVISER </STRONG> : le problème d'origine est divisé en un certain nombre de sous-problèmes<br></br>
						-   <strong>RÉGNER</strong> : on résout les sous-problèmes (les sous-problèmes sont plus faciles à résoudre que le problème d'origine)<br></br>
						-  <strong>COMBINER</strong> : les solutions des sous-problèmes sont combinées afin d'obtenir la solution du problème d'origine.</p>
					</div>
				</div>
				<div class="subpart3">
					<div class="sp1text">
						<h3 class="sous_sous_titre" id="qcb">III | Les entreprise qui utilise cette méthode</h3>
						<p>Plusieurs entreprise divisent pour mieux régner comme :<br></br><br></br>
						- <STRONG>Tesla</STRONG><br></br>
						- <STRONG>Apple</STRONG><br></br>
						- <STRONG>SNCF</STRONG> <br></br><br></br>
						Le principe étant de diviser le travail à l’intérieur de l’entreprise pour exterminer leurs concurrents / adversaires. <br>
						Nous allons maintenant étudier un de ces algorithmes basés sur le principe diviser pour mieux régner : le tri-fusion
						
						</p>
					</div>
	
				</div>
				
			</div>
			
		</section>
		<hr class="above">
		<h3  class="questions">Le paradigme "diviser pour mieux régner" repose donc sur 3 étapes :</h3>
		<hr class="separator">
		<form name="q1" class="form">
			<input type="radio" name="choix">DIVISER, RÉGNER, COMBINER</input><br>
			<input type="radio" name="choix">RÉGNER, PLIER, ATTRAPER</input><br>
			<input type="radio" name="choix">VENDRE, RÉGNER, ATTRAPER</input><br>
			<input type="radio" name="choix">DORMIR, COMBINER, DIVISER</input>
		</form>
		<h3 class="questions">La méthode diviser pour mieux régner est une méthode :</h3>
		<hr class="separator">
		<form name="q2" class="form">
			<input type="radio" name="choix">fatidique</input><br>
			<input type="radio" name="choix">algorithmiques</input><br>
			<input type="radio" name="choix">geometrique</input><br>
			<input type="radio" name="choix">linéaire</input>
		</form>
		<input type="button" value="Vérifier mes réponses" onclick="return checkanswer('page2');" class="button">
		</div>
		<div class="bouttons">
            <button type="button" name="back" id="back" onclick="window.location.href='https://projetnsisp.000webhostapp.com/page1.php';">Cours précédent</button>
            <button type="button" name="next" id="next" onclick="window.location.href='https://projetnsisp.000webhostapp.com/page3.php';">Cours suivant</button>
        </div>

        <?php include 'footer.php';?>
    </body>
</html>