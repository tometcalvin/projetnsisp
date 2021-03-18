<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Rappel sur les tris - Cours NSI</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="author" content="Tle NSI - StPierre 2021">
        <meta name="description" content="Leçon sur la méthode Diviser pour régner destinée aux élèves de NSI de SaintPierre de niveau Terminale.">
        <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/quizz.js"></script>
    </head>
    <body style="margin: 0;" id="page1" name="page1">
        <?php include 'header.php';?>

        <section class="content">

		<div class="sommaire">
			<h3>Sommaire</h3>
			<nav class="menu_nav">
				<ol style="list-style-type:none;">
					<li class="sommaire-element"><a href="#Tri-par-Selection">I | Tri par selection</a>
						<ol style="list-style-type:none;">
							<li class="sommaire-element"><a href="#Implémentation1">&bull; Implémentation</a></li>
							<li class="sommaire-element"><a href="#Complexité1">&bull; Compléxité</a></li>
						</ol>
					</li>
					<li class="sommaire-element"><a href="#Tri-par-Insertion">II | Tri par insertion</a>
						<ol style="list-style-type:none;">
							<li class="sommaire-element"><a href="#Implémentation2">&bull; Implémentation</a></li>
							<li class="sommaire-element"><a href="#Complexité2">&bull; Compléxité</a></li>
						</ol>
					</li>
				</ol>
			</nav>
		</div>

		<div class="general">
			<h3 class="sous_sous_titre" id="Tri-par-Selection">
				I | Le Tri par Selection
			</h3>

			<div class="bloc1">
				<p>
					Le tri par sélection consiste à prendre le premier terme et l’inverser avec le plus petit terme de la suite, puis prendre le deuxième et faire de même jusqu’au dernier terme.
				</p>
				<div class="image">
					<img
						src="img/tri_selection.png"
						alt="Tri par Selection"
					/>
				</div>
			</div>
			
			<div class="bloc2">
				<h4 class="sous_sous_sous_titre" id="Implémentation1">
					&bull; Implémentation:
				</h4>
				<pre class="python"><code python>
def tri_selection(L):
	for i in range (len(L)):
		min = i
		for j in range (i, len(L)):
			if L[j] &#60 L[min]:
				min = j
				temp = L[i]
				L[i] = L[min]
				L[min] = temp
	return L
				</code></pre>
			</div>
			<div class="bloc3">
				<h4 class="sous_sous_sous_titre" id="Complexité1">
					&bull; Complexité:
				</h4>
					<p>
						La complexité du tri par insertion est dans le pire des cas d'une complexité quadratique, en effet:
					</p>
					<img
						src="img/complexite-tri_selection.png"
						alt="Complexite tri par selection"
					/>
			</div>
			<h3 class="sous_sous_titre" id="Tri-par-Insertion">
				II | Le Tri par Insertion
			</h3>
			
			<div class="bloc4">
				<p>
					Le tri par insertion lui consiste à prendre le terme suivant et à l’insérer dans la liste de termes qu’on a déjà triée.
				</p>
				<div class="image">
					<img
						src="img/tri_insertion.png"
						alt="Tri par Insertion"
					/>
				</div>
			</div>

			<div class="bloc5">
				<h4 class="sous_sous_sous_titre" id="Implémentation2">
					&bull; Implémentation:
				</h4>
				<pre class="python"><code python>
def tri_insertion(L):
	for i in range (1, len(L)):
		cle = L[i]
		j = i-1
		while j >= 0 and L[j] > cle:
			L[j+1] = L[j]
			j = j-1
			L[j+1] = cle
	return L
				</code></pre>
			</div>

			<div class="bloc6">
				<h4 class="sous_sous_sous_titre" id="Complexité2">
					&bull; Complexité:
				</h4>
					<p>
						La complexité du tri par insertion est dans le pire des cas d'une complexité quadratique, en effet:
					</p>
					<img
						src="img/complexite-tri_insertion.png"
						alt="Complexite tri par insertion"
					/>
			</div>
		</div>

	</section>
	<hr class="above">
	<h3  class="questions">Question 1 : Quel est la complexité des 2 tris ?</h3>
	<hr class="separator">
	<form name="q1" class="form">
		<input type="radio" name="choix">linéaire</input><br>
		<input type="radio" name="choix">quadratique</input><br>
		<input type="radio" name="choix">logarithmique</input>
	</form>
	<h3 class="questions">Question 2 : Quel est le principe du tri par insertion et du tri par sélection ?</h3>
	<hr class="separator">
	<form name="q2" class="form">
		<input type="radio" name="choix">Insérer le terme dans une liste déjà triée & Echanger les termes entre eux?</input><br>
		<input type="radio" name="choix">Insérer le terme dans une liste déjà triée & Diviser et trier les listes avant de les fusionner ?</input><br>
		<input type="radio" name="choix">Echanger les termes entre eux & Insérer le terme dans une liste déjà triée ?</input>
	</form>
	<input type="button" value="Vérifier mes réponses" onclick="return checkanswer('page1');" class="button">

    <div class="bouttons">
                    <button type="button" name="next" id="next" onclick="window.location.href='https://projetnsisp.000webhostapp.com/page2.php';">Cours suivant</button>
                </div>

        <?php include 'footer.php';?>
    </body>
</html>