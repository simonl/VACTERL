<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >

   <head>
       <title>Le syndrôme de VACTERL</title>
       <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	   <link rel="stylesheet" media="screen" type="text/css" title="index" href="index.css" />
   </head>
   
   <body>
		<br />
		<br />
		<br />
		<br />
		<br />
		
		
		<?php
				
		if(!(isset($_GET['page'])))
			{
				$_GET['page'] = $pages[0];
			}		
		for($i = 0;$i < $nombredepages;$i ++)
		{			
			?>   <?php
			if($_GET['page'] == $pages['' . $i . ''])
			{
			?>	
				<div class="currenttab">
				<a href="index.php?page=<?php echo $pages['' . $i . ''];?>">
				<?php echo $pages['' . $i . ''];?></a>
				</div>
			<?php
			}
			else
			{
			?>
				<div class="tab">
				<a href="index.php?page=<?php echo $pages['' . $i . ''];?>">
				<?php echo $pages['' . $i . ''];?></a>
				</div>
			<?php
			}
		}
		?>
   </body>
</html>
