<?php

require_once('includes/config.php');

require_once('includes/database.class.php');

$db= new database($pdo);
?>
<?php
		$query=$pdo->query("SELECT query");

		while($exec=$query->fetch(PDO::FETCH_OBJ))

		{
			$exec->column_name;
		}
		
		$query=("INSERT query");
		
		$exec=$pdo->prepare($query);
		if($exec->execute())
		{
			// if get executed
		}
?>