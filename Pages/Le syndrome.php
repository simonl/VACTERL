<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <head>
       <title>Le syndrôme de VACTERL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="index" href="index.css" />
   </head>
   
   <body>
		<p>HELLO THERE</p>
		
		
		
		<?php
		
			$part = array("V" => "ventre", "A" => "allo", "C" => "coeur", "T" => "Tete", "E" => "ehlp", "R" => "Rododandron", "L" => "Lol");
			
			for($p = 0; $p < 7; $p ++)
			{
				?> <a href="lamag.qc.ca/eleves/e5217187/VACTERL/index.php?page=Le%20syndrome&part=<?php echo '' . $part['' . $p . ''] . ''; ?>"><?php echo $part[$p]; ?></a><?php
				echo ' Bonjour les amies';
			}
			
			
			
		?>
			
   </body>
</html>
