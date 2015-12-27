<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Le syndrôme de TEST</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="index" href="index.css" />
   </head>
   
   <body>
		<h1>Projet Personnel de Simon Langlois</h1>
		<p>Ici, je présenterai toutes les étapes de mon apprentissage dans la programmation de pages <br />
		WEB en vue de mon Projet Personnel qui consiste à créer un site WEB sur le syndrome de VACTERL.</p>
		<p>Mes premiers tests ne portent pas sur ce sujet car je ne faisais que tester les différentes fonctions <br />
		pour me pratiquer. Je commencerai le site final lorsque je pourrai l'implémenter intelligemment sans avoir<br />
		à en refaire la moitié plus tard.</p>
		<p>Pour me contacter: seulement m'envoyer un e-mail à <a href="mailto:simlanglois@hotmail.com">simlanglois@hotmail.com</a></p>

		<h1>Fichiers</h1>
				
		<h2>SITE FINAL</h2>
			<ul>
				<li><a href="VACTERL/index.php">Le Syndrome de VACTERL</a></li>
			</ul>

		<h2>Download : </h2>
		<ul>
				<li> MES DOCUMENTS : <br /><span class="description">
							Échéancier : <a href="Download/echeancier.txt">Original</a>,
							<a href="Download/echeancier2.txt">Révision Novembre</a><br />
							<a href="Download/JournalDeBord.txt">Mon journal de bord</a><br />
						<?php
							if(isset($_POST['acces']) AND $_POST['acces'] == Fortin)
							{
								echo '<a href="Download/Planderedaction.doc">Plan de Rédaction</a><br />';
								echo '<a href="Download/Redaction.doc">Ma rédaction</a><br />';
							}
							else
							{
								?>
								<form method="post" action="index.php">
								Votre nom de famille:
								<input type="password" name="acces" id="acces" size="10"/>
								<input type="submit" value="Accéder à la rédaction"/><br/>
								</form>
								<?php
							}
							?>
								
							</span>
							</li>

				<li> MA RECHERCHE : <br /><span class="description">
							<a href="Recherche/">Fiches d'Information</a><br />
							Sources: <a href="Recherche/Imprimé">Sur Papier</a>,
							<a href="Recherche/Internet">Venant d'Internet</a>,
							<a href="Recherche/Personnes">Personnes Ressource</a><br />


						
							</span>
							</li>
				
							
				<li> APPLICATIONS : <br /><span class="description">
							<a href="Download/winscp382setupintl2.exe">WinSCP3</a> : Client pour accéder à l'Espace Réseau.<br />
							<a href="Download/wrar380.exe">WinRAR</a> : Logiciel de décompression très polyvalent.<br />
							<a href="Download/npp.5.1.Installer.exe">Notepad++</a> : Éditeur de texte spécialisé pour la programmation.<br />
							</span>
							</li>
		</ul>
   </body>
</html>