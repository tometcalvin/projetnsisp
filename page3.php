<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Tri Fusion - Cours NSI</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="author" content="Tle NSI - StPierre 2021">
        <meta name="description" content="Leçon sur la méthode Diviser pour régner destinée aux élèves de NSI de SaintPierre de niveau Terminale.">
        <link rel="shortcut icon" href="icon/favicon.ico" type="image/x-icon">
        <link rel="icon" href="icon/favicon.ico" type="image/x-icon">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="js/quizz.js"></script>
    </head>
    <body style="margin: 0;" id="page3" name="page3">
        <?php include 'header.php';?>

        <h1 class="sous_titre" id="part2title">TRI FUSION</h1>
		<section class="content">
			<div class="sommaire">
				<h3>Sommaire</h3>
				<ol class="sommairelist" style="list-style-type: none;">
					<li class="sommaire-element"><a href="#un-peu-dhistoire"> | Un peu d'Histoire </a></li>
					<li class="sommaire-element"><a href="#definition-fonctionnement">II | Définition et Fonctionnement</a></li>
					<li class="sommaire-element"><a href="#implementation">III | Implémentation Python</a></li>
				</ol>
			</div>
			<div class="cours" style="width: 70%;">
				<div class="subpart1">
					<div class="sp1text">
						<h3 class="sous_sous_titre" id="un-peu-dhistoire">I | Un peu d'Histoire</h3>
						<p>- Le tri fusion est inventé en 1945 par John Von Neumann, mathématicien et</br> astrophysicien américano-hongrois, avec l’aide d’autres collaborateurs au sein de</br> l’EDVAC (Electronic Discrete Variable Automatic Computer).<br>
							<br>
							- Il se base sur le principe de “Diviser pour Régner”.</p></br>
					</div>
				</div>
				<div class="subpart2">
					<div class="sp1text">
						<h3 class="sous_sous_titre" id="definition-fonctionnement">II | Définition et Fonctionnement</h3>
						<p>Le Tri en Fusion est un algorithme de tri de liste, basé sur la récurrence, permettant</br> de trier des listes par séparation et fusion. Il est notamment utile pour son efficacité</br> et sa performance.<br>
							<br>
							Pour se faire, l’algorithme:<br>
							<br>
								> Sépare d’abord la liste à trier en deux, pour re-séparer ces listes jusqu’à isolement des éléments de la liste.<br>
								<br>
								> Choisit les deux premiers éléments, puis les trie de façon croissante.<br>
								<br>
								> Fusionne ces deux éléments en une seule liste, et recommence pour les autres éléments.<br>
								<br>
							Les listes sont enfin fusionnées suivant le même principe, jusqu’à obtenir une liste finale, la liste triée.</p>
							<img class="forme_img"
								src="img\tri_fusion.jpg"
								alt="Tri Fusion"
							/>
						<p>Au sein du programme, afin de trier les listes formées par la fusion des éléments, l’algorithme choisit le premier</br> élément des deux petites listes, et choisit le plus petit afin de l’insérer dans la nouvelle liste.
							Après insertion, le</br> nombre fusionné est retiré de la petite liste. La méthode se reproduit jusqu’à ce que les deux petites listes soient</br> entièrement fusionnées.</p>
							<img class="forme_img"
								src="img\tri_fusion_fus-liste.jpg"
								alt="Fonctionement Tri Fusion"
							/>
						<p>Le tri par fusion est donc très utile pour trier des listes de taille importante, car elle sépare avant de trier</br> afin de trier des petites listes, au lieu de trier une seule grande liste.
							Mais, cet algorithme est assez demandant</br> en mémoire à cause de ces séparations, et du doublement de tableaux à trier.</br></br>
					
							Le tri par fusion est de complexité n*log(n)</p></br>
	
				</div>
				<div class="subpart3">
					<div class="sp1text">
						<h3 class="sous_sous_titre" id="implementation">III | Implémentation Python</h3>
							<p>Division des listes:</p>
							<pre class="python" style="width: 85%;"><code>
def tri_fusion(tableau):
	if  len(tableau) <= 1:  #Si le tableau ne comporte qu'une seule valeur
		return tableau
	separation = len(tableau)//2
	tableau1 = tableau[:separation]  # Division du premier tableau en 2 tableaux
	tableau2 = tableau[separation:]
	gauche = tri_fusion(tableau1)         # création de deux tableaux à trier "gauche" et "droite"
	droite = tri_fusion(tableau2)
	fusionne = fusion(gauche,droite)
	return fusionne
	</code>
	</pre>
</br>
							<p>Fusion des listes:</p>
							<pre class="python" style="width: 85%;"><code>
def fusion(tableau1,tableau2):
	indice_tableau1 = 0                   # Initialisation des variables utiles à la fonction
	indice_tableau2 = 0
	taille_tableau1 = len(tableau1)
	taille_tableau2 = len(tableau2)
	tableau_fusionne = []

	while indice_tableau1 < taille_tableau1 and indice_tableau2 < taille_tableau2:      
		if tableau1[indice_tableau1] < tableau2[indice_tableau2]:    
			tableau_fusionne.append(tableau1[indice_tableau1])   
			indice_tableau1 = indice_tableau1 + 1
		else:                                                        # Sinon on prend la valeur du tableau 2
			tableau_fusionne.append(tableau2[indice_tableau2])
			indice_tableau2 = indice_tableau2 + 1

	while indice_tableau1 < taille_tableau1:                         # S'occupe de la répéter la fonction
		tableau_fusionne.append(tableau1[indice_tableau1])
		indice_tableau1 = indice_tableau1 + 1

	while indice_tableau2 < taille_tableau2:
		tableau_fusionne.append(tableau2[indice_tableau2])
		indice_tableau2 = indice_tableau2 + 1

	return tableau_fusionne
	</code>
	</pre>


						
					</div>
	
				</div>
			
			</div>
			
		</section>

		<hr class="above">
<h3  class="questions">Question 1 : La méthode Tri Fusion:...</h3>
<hr class="separator">
<form name="q1" class="form">
    <input type="radio" name="choix">Trie en insérant de manière décroissante.</input><br>
    <input type="radio" name="choix">N'utilise pas de récurrence.</input><br>
    <input type="radio" name="choix">Est efficace sur de très grandes listes.</input><br> <!--BONNE REPONSE-->
    <input type="radio" name="choix">N'utilise que très peu de mémoire.</input>
</form>
<h3 class="questions">Question 2 : Elle est inventée en:...</h3>
<hr class="separator">
<form name="q2" class="form">
    <input type="radio" name="choix">1938</input><br>
    <input type="radio" name="choix">1945</input><br> <!--BONNE REPONSE-->
    <input type="radio" name="choix">1947</input><br>
    <input type="radio" name="choix4">1952</input>
</form>

<input type="button" value="Vérifier mes réponses" onclick="return checkanswer('page3');" class="button">
				<div class="bouttons">
                    <button type="button" name="back" id="back" onclick="window.location.href='https://projetnsisp.000webhostapp.com/page2.php';">Cours précédent</button>

                </div>

        <?php include 'footer.php';?>
    </body>
</html>
