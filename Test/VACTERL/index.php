<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
   <head>
       <title>Le syndrôme de VACTERL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="index" href="index.css" />
   </head>
   
   <body >
		<div id="main">
		<?php
		
		$pages = array ("Accueil", "Le syndrome", "La clinique", "Autres Organismes", "Contact");
		$nombredepages = count($pages);
		
		include('Pages/Header.php');
		
		if(isset($_GET['page']))
		{
			if(in_array($_GET['page'], $pages))
				{
					?>
					<div id="content">
					<?php include('Pages/' . $_GET['page'] . '.php'); ?>
					</div>
					<?php
				}
			if(!(in_array($_GET['page'], $pages)))
			{
				?>
				<div id="content">
				<?php include('Pages/Accueuil.php'); ?>
				</div>
				<?php
			}
		}
		else
		{
			?>
			<div id="content">
			<?php include('Pages/Accueuil.php'); ?>
			</div>
			<?php
		}
		
		?>
			<br />
			<div id="Foot">
		<?php include('Pages/Foot.php'); ?>
			</div>
		<?php
		
		?>
		</div>
   </body>
</html>