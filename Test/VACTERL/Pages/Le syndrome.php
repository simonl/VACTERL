<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <head>
       <title>Le syndr�me de VACTERL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="index" href="index.css" />
   </head>
   
   <body>		
		<?php
		
			$part = array("V" => "ert�bres", "A" => "nus", "C" => "oeur", "T" => "rach�e", "E" => "sophagus (Oesophage)", "R" => "eins", "L" => "imbs (Extremit�s)");
			$initiale = array("V", "A", "C", "T", "E", "R", "L");
			
			?>
				
			
			<h2>Le Syndrome de VACTERL :</h2>
			
			<p>Ce syndrome est une maladie malformative de naissance, regroupant des malformations particuli�res qui 
			apparaissent souvent ensemble. C'est cette association que l'on appelle VACTERL, un acronyme d�crivant les 
			diff�rentes r�gions touch�es par le syndrome (Informations plus bas). Pour �tre diagnostiqu� VACTERL, 
			l'enfant doit avoir trois de ces malformations ou plus. La gravit� du syndrome d�pend grandement des 
			malformations avec lesquelles na�t l'enfant: il pourrait tr�s bien vivre une vie g�n�ralement normale, 
			tout comme il pourrait �tre handicap� toute sa vie.</p>
		
			<p>Le syndrome de VACTERL est un ph�nom�ne plut�t rare. Environ 1 enfant sur 6000 en sera atteint, 
			selon les statistiques des quelques pays qui en ont fait le compte. Aussi, le syndrome n�est souvent pas 
			diagnostiqu� � cause des m�decins qui ne le connaissent pas. Cette maladie cong�nitale s�attaque
			� n�importe quel nouveau n� et sa manifestation est, pour autant qu'on le sache, le fruit du hasard. 
			Par contre, les statistiques d�montrent qu�il y a environ deux fois plus de gar�ons atteints que de filles.</p>

			
			
					
			<h2>Caract�ristiques :</h2>
			
			<?php
			
			
			for($p = 0; $p < 7; $p ++)
			{
			
				if(!(isset($_GET['part'])))
				{
					?><a href="index.php?page=Le%20syndrome&part=<?php echo $initiale[$p] . '#' . $initiale[$p]; ?>"><?php echo $initiale[$p] . $part[$initiale[$p]]; ?></a><br /><br /><?php
				}
				elseif(isset($_GET['part']) AND !($_GET['part'] == $initiale[$p]))
				{
					?><a href="index.php?page=Le%20syndrome&part=<?php echo $initiale[$p] . '#' . $initiale[$p]; ?>"><?php echo $initiale[$p] . $part[$initiale[$p]]; ?></a><br /><br /><?php
				}
				
				if(isset($_GET['part']) AND $_GET['part'] == $initiale[$p])
				{
					$lettre = $_GET['part'];
					?><span class="currentletter"><?php echo $initiale[$p] . $part[$lettre]; ?></span><br /><?php
					
					if($initiale[$p] == 'V')
						{ ?>
						<span id="V"></span>
						<p>
							Cette anomalie touche la colonne vert�brale et peut survenir de diverses fa�ons. 
							Le probl�me le plus commun est ce qu'on appelle une H�mi-Vert�bre. �a consiste en un
							d�faut de croissance de la r�gion des c�tes et de la peau autour de la colonne vert�brale, 
							qui entra�ne des d�fauts de courbure et donc une posture probl�matique chez l'enfant. Un 
							angle trop prononc� peut pincer les nerfs qui traversent la colonne et entra�ner des douleurs, 
							et m�me de la difficult� � mouvoir les membres inf�rieurs en allant jusqu'� la paralysie. 
							Ces cas sont trait�s par un redressement chirurgical de la colonne vert�brale.
						</p>
						
						<?php }
					elseif($initiale[$p] == 'A')
						{ ?>
						<span id="A"></span>
						<p>
							Le cas le plus r�pendu de malformation anale est ce qu'on appelle l'imperforation anale. Cette anomalie cause 
							l'enfant � na�tre sans orifice post�rieur: l'intestin ne rejoint pas l'extr�mit� et laisse  une peau uniforme 
							comme si rien ne devait �tre � cet endroit. En plus de ce probl�me, on peut aussi trouver chez l'enfant une fistule, 
							ou un boyau, ur�trale reliant l'intestin et l'ur�tre. On peut d�j� s'imaginer les d�sagr�ments que �a peut engendrer.
							Ainsi, les selles et l'urine sont libres de s'�changer leur place dans le corps du b�b� et de passer dans des conduits
							qui n'ont pas �t� con�u � cet effet. La premi�re anomalie se r�gle en per�ant un anus et en reliant le bout de l'intestin 
							avec le trou nouvellement form�. L'autre probl�me, la fistule, doit �tre coup�e et les entr�es cousue lors d'une op�ration.
						</p>
						
						
						<?php }
					elseif($initiale[$p] == 'C')
						{ ?>
						<span id="C"></span>
						<p>
							Les malformations qui touchent le coeur sont tr�s souvent graves et doivent �tre trait�es le plus rapidement possible.
							Les probl�mes cardiaques peuvent se pr�senter de diff�rentes fa�ons. 
							Un des ph�nom�nes cardiaques le plus commun est ce qu'on appelle la communication inter-ventriculaire, ce qui signifie un 
							passage entre les deux ventricules du coeur. Ce lien, qui ne devrait normalement pas �tre l�, cause un �change du sang oxyg�n�, 
							venant des poumons, et du sang us�, venant du reste du corps, dans le coeur. Ce n'est pas toujours fatal, mais �a limite grandement 
							l'efficacit� du coeur � bien alimenter le corps. Si le lien est petit, il se referme de lui-m�me dans les semaines suivant la naissance.
							Il y a aussi possibilit� d'inversion des art�res cardiaques, 
							c'est-�-dire que l'art�re pulmonaire sera connect�e au ventricule gauche du coeur, alors que l'aorte sera reli�e au ventricule droit.
							Ceci est un probl�me car le sang, qui effectue normalement un trajet en 8 en passant dans le coeur, sera alors pi�g� dans deux boucles distinctes.
							Ainsi, le sang oxyg�n� se fait repomper � travers les poumons alors que le sang qui alimente le corps ne fait que repasser dans le corps 
							sans recevoir de l'oxyg�ne.
						</p>
						
						<?php }
					elseif($initiale[$p] == 'T')
						{ ?>
						<span id="T"></span>
						<p>
							L'anomalie associ�e � la trach�e est une fistule trach�o-oesophagienne, ce qui veut dire un conduit 
							reliant la trach�e et l'oesophage. Ce conduit peut �tre dangereux car la nourriture aval�e par l'enfant 
							peut se retrouver dans les poumons et l'air qu'il respire, dans son estomac, d�pendant du cas. Cette caract�ristique 
							se retrouve tr�s souvent avec la prochaine anomalie, celle de l'oesophage.

						</p>
						
						<?php }
					elseif($initiale[$p] == 'E')
						{ ?>
						<span id="E"></span>
						<p>
							Cette malformation, l'atr�sie de l'oesophage, consiste en une s�paration du haut et du bas de 
							l'oesophage. Les deux extr�mit�s ne sont pas reli�es et l'alimentationest devient donc impossible.
							Pour rem�dier � ce probl�me, on �tire les deux extr�mit�s de l'oesophage pour les raccorder. Mais parfois, 
							l'�cart est trop grand et on doit compenser en ajoutant un morceau de tube digestif pour les raccorder.

						</p>
						
						<?php }
					elseif($initiale[$p] == 'R')
						{ ?>
						<span id="R"></span>
						<p>
							Les malformations reinales peuvent survenir de multiples fa�cons, variant en s�v�rit�. 
							Les reins peuvent �tre diformes ou plus petit que la normale. Alors, ils ont de la difficult� 
							� purifier le sang � pleine capacit�. Ils peuvent aussi �tre reli�s un �a l'autre pour former 
							une sorte de fer � cheval, pas n�cessairement l�thale mais qui peut causer des probl�mes d'espace 
							et d'emplacement. 

						</p>
						
						<?php }
					elseif($initiale[$p] == 'L')
						{ ?>
						<span id="L"></span>
						<p>
							Les anomalies des extr�mit�s surtout touchent le radius, os de l'avant-bras vis � vis du pouce. 
							La plus courante est l'ag�n�sie radiale, qui est un manque de d�veloppement de l'os en question.
							Les effets peuvent varier d�pendamment de la gravit� de l'ag�n�sie, allant d'un pouce retranch� 
							vers l'int�rieur d� un r�tr�cissement du radius � l'absence totale de radius et de pouce. 

						</p>
						
						<?php }
				}
				
			}
			
			
			
		?>

		<h2>Traitement :</h2>
			
			<p>La majorit� des probl�mes li�s au syndrome de  VACTERL se r�glent avec la chirurgie et la transplantation. 
			La plupart de ces traitements, d�pendant du cas, n�cessiteront ensuite diff�rentes m�thodes de r�abilitations, 
			que ce soit d'apprendre � une partie du corps un comportement pour lequel elle n'�tait pas faite, � cause de 
			la malformation, ou simplement s'assurer qu'il n'y ait pas de complications. Parfois, malheureusement, le travail 
			des m�decins n'est pas suffisant et, d� � des probl�mes multiples et urgents, certains enfants en meurent. On 
			estime qu'environ la moiti� des b�b�s atteints meurent de la maladie ou suite � des complications.</p>

			
   </body>
</html>
