<?php 

include("./functions.php");

switch ($_POST["request"]) {
	case 'loginRequest':
		if (!function_exists("login")) break;
		login($_POST["username"], $_POST["password"]);

		break;

	case 'logoutRequest':
		if (!function_exists("logout")) break;
		logout();
		
	default:
		header('Location: ./index.php?msg=La requête n\'a pas pu aboutir');
		break;
}

?>