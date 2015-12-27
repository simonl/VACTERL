<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <head>
       <title>Le syndrôme de VACTERL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="index" href="index.css" />
   </head>
   
   <body>		
		<?php
		
			$part = array("V" => "ertèbres", "A" => "nus", "C" => "oeur", "T" => "rachée", "E" => "sophagus (Oesophage)", "R" => "eins", "L" => "imbs (Extremités)");
			$initiale = array("V", "A", "C", "T", "E", "R", "L");
			
			?>
				
			
			<h2>Le Syndrome de VACTERL :</h2>
			
			<p>Ce syndrome est une maladie malformative de naissance, regroupant des malformations particulières qui 
			apparaissent souvent ensemble. C'est cette association que l'on appelle VACTERL, un acronyme décrivant les 
			différentes régions touchées par le syndrome (Informations plus bas). Pour être diagnostiqué VACTERL, 
			l'enfant doit avoir trois de ces malformations ou plus. La gravité du syndrome dépend grandement des 
			malformations avec lesquelles naît l'enfant: il pourrait très bien vivre une vie généralement normale, 
			tout comme il pourrait être handicapé toute sa vie.</p>
		
			<p>Le syndrome de VACTERL est un phénomène plutôt rare. Environ 1 enfant sur 6000 en sera atteint, 
			selon les statistiques des quelques pays qui en ont fait le compte. Aussi, le syndrome n’est souvent pas 
			diagnostiqué à cause des médecins qui ne le connaissent pas. Cette maladie congénitale s’attaque
			à n’importe quel nouveau né et sa manifestation est, pour autant qu'on le sache, le fruit du hasard. 
			Par contre, les statistiques démontrent qu’il y a environ deux fois plus de garçons atteints que de filles.</p>

			
			
					
			<h2>Caractéristiques :</h2>
			
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
							Cette anomalie touche la colonne vertébrale et peut survenir de diverses façons. 
							Le problème le plus commun est ce qu'on appelle une Hémi-Vertèbre. Ça consiste en un
							défaut de croissance de la région des côtes et de la peau autour de la colonne vertébrale, 
							qui entraîne des défauts de courbure et donc une posture problématique chez l'enfant. Un 
							angle trop prononcé peut pincer les nerfs qui traversent la colonne et entraîner des douleurs, 
							et même de la difficulté à mouvoir les membres inférieurs en allant jusqu'à la paralysie. 
							Ces cas sont traités par un redressement chirurgical de la colonne vertébrale.
						</p>
						
						<?php }
					elseif($initiale[$p] == 'A')
						{ ?>
						<span id="A"></span>
						<p>
							Le cas le plus répendu de malformation anale est ce qu'on appelle l'imperforation anale. Cette anomalie cause 
							l'enfant à naître sans orifice postérieur: l'intestin ne rejoint pas l'extrémité et laisse  une peau uniforme 
							comme si rien ne devait être à cet endroit. En plus de ce problème, on peut aussi trouver chez l'enfant une fistule, 
							ou un boyau, urétrale reliant l'intestin et l'urètre. On peut déjà s'imaginer les désagréments que ça peut engendrer.
							Ainsi, les selles et l'urine sont libres de s'échanger leur place dans le corps du bébé et de passer dans des conduits
							qui n'ont pas été conçu à cet effet. La première anomalie se règle en perçant un anus et en reliant le bout de l'intestin 
							avec le trou nouvellement formé. L'autre problème, la fistule, doit être coupée et les entrées cousue lors d'une opération.
						</p>
						
						
						<?php }
					elseif($initiale[$p] == 'C')
						{ ?>
						<span id="C"></span>
						<p>
							Les malformations qui touchent le coeur sont très souvent graves et doivent être traitées le plus rapidement possible.
							Les problèmes cardiaques peuvent se présenter de différentes façons. 
							Un des phénomènes cardiaques le plus commun est ce qu'on appelle la communication inter-ventriculaire, ce qui signifie un 
							passage entre les deux ventricules du coeur. Ce lien, qui ne devrait normalement pas être là, cause un échange du sang oxygéné, 
							venant des poumons, et du sang usé, venant du reste du corps, dans le coeur. Ce n'est pas toujours fatal, mais ça limite grandement 
							l'efficacité du coeur à bien alimenter le corps. Si le lien est petit, il se referme de lui-même dans les semaines suivant la naissance.
							Il y a aussi possibilité d'inversion des artères cardiaques, 
							c'est-à-dire que l'artère pulmonaire sera connectée au ventricule gauche du coeur, alors que l'aorte sera reliée au ventricule droit.
							Ceci est un problème car le sang, qui effectue normalement un trajet en 8 en passant dans le coeur, sera alors piégé dans deux boucles distinctes.
							Ainsi, le sang oxygéné se fait repomper à travers les poumons alors que le sang qui alimente le corps ne fait que repasser dans le corps 
							sans recevoir de l'oxygène.
						</p>
						
						<?php }
					elseif($initiale[$p] == 'T')
						{ ?>
						<span id="T"></span>
						<p>
							L'anomalie associée à la trachée est une fistule trachéo-oesophagienne, ce qui veut dire un conduit 
							reliant la trachée et l'oesophage. Ce conduit peut être dangereux car la nourriture avalée par l'enfant 
							peut se retrouver dans les poumons et l'air qu'il respire, dans son estomac, dépendant du cas. Cette caractéristique 
							se retrouve très souvent avec la prochaine anomalie, celle de l'oesophage.

						</p>
						
						<?php }
					elseif($initiale[$p] == 'E')
						{ ?>
						<span id="E"></span>
						<p>
							Cette malformation, l'atrésie de l'oesophage, consiste en une séparation du haut et du bas de 
							l'oesophage. Les deux extrémités ne sont pas reliées et l'alimentationest devient donc impossible.
							Pour remédier à ce problème, on étire les deux extrémités de l'oesophage pour les raccorder. Mais parfois, 
							l'écart est trop grand et on doit compenser en ajoutant un morceau de tube digestif pour les raccorder.

						</p>
						
						<?php }
					elseif($initiale[$p] == 'R')
						{ ?>
						<span id="R"></span>
						<p>
							Les malformations reinales peuvent survenir de multiples façcons, variant en sévérité. 
							Les reins peuvent être diformes ou plus petit que la normale. Alors, ils ont de la difficulté 
							à purifier le sang à pleine capacité. Ils peuvent aussi être reliés un èa l'autre pour former 
							une sorte de fer à cheval, pas nécessairement léthale mais qui peut causer des problèmes d'espace 
							et d'emplacement. 

						</p>
						
						<?php }
					elseif($initiale[$p] == 'L')
						{ ?>
						<span id="L"></span>
						<p>
							Les anomalies des extrémités surtout touchent le radius, os de l'avant-bras vis à vis du pouce. 
							La plus courante est l'agénésie radiale, qui est un manque de développement de l'os en question.
							Les effets peuvent varier dépendamment de la gravité de l'agénésie, allant d'un pouce retranché 
							vers l'intérieur dû un rétrécissement du radius à l'absence totale de radius et de pouce. 

						</p>
						
						<?php }
				}
				
			}
			
			
			
		?>

		<h2>Traitement :</h2>
			
			<p>La majorité des problèmes liés au syndrome de  VACTERL se règlent avec la chirurgie et la transplantation. 
			La plupart de ces traitements, dépendant du cas, nécessiteront ensuite différentes méthodes de réabilitations, 
			que ce soit d'apprendre à une partie du corps un comportement pour lequel elle n'était pas faite, à cause de 
			la malformation, ou simplement s'assurer qu'il n'y ait pas de complications. Parfois, malheureusement, le travail 
			des médecins n'est pas suffisant et, dû à des problèmes multiples et urgents, certains enfants en meurent. On 
			estime qu'environ la moitié des bébés atteints meurent de la maladie ou suite à des complications.</p>

			
   </body>
</html>
