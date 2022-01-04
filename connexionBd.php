<?php 

    $_user="id17817604_localhost";
    $_pass="Bijjamfall97@";

	try
	{
	$bdd = new PDO('mysql:host=localhost;dbname=id17817604_myspace', $_user, $_pass);
	}
	catch (Exception $e)
	{
	die('Erreur : ' . $e->getMessage());
	}

?>