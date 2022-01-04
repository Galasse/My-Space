<?php 

   
	define('DB_SERVER', localhost);
	define('DB_USERNAME', id17817604_localhost);
	define('DB_PASSWORD', Bijjamfall97);
	define('DB_NAME', id17817604_myspace);

	$conn = mysql_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

	if($conn == false){
		die("ERROR: Could not connect. " . mysql_connect_error());

	}

	$responsee = '';
	if(! empty($_REQUEST["email"] && !empty($_REQUEST["password"]) )) {

		$username = $_REQUEST["email"];
		$password = $_REQUEST["password"];

		header('Content-type : application/json');
		$sql = "SELECT email, nom, prenom FROM users where email = '"".$email. ""' and password= '"".$password. "'";

		$result = $conn->query($sql);

		if($resul->num_rows > 0){
			while($row = $result->fetch_assoc()){
				$response = "{'email': '" .$row["email"]. "', 'nom':'" .$row["nom"]. "', 'prenom': '" .$row["prenom"]. "'}";	
			}
		}

		else{
			http_response_code(404);
			$response="{'code':404, message:'user not found', 'data':''}";
		}
		$conn->close();
	}

	else{
		http_response_code(400);
		$response="{'code':400, message:'bad request', 'data':''}";
	}

echo $response;
?>