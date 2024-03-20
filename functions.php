<?php 

// Tableau de comptes
$accounts = array(
    array(
        "acc_id" => 1,
        "acc_libelle" => "user1",
        "acc_password" => "password1",
        "acc_info" => "Informations sur le compte 1"
    ),
    array(
        "acc_id" => 2,
        "acc_libelle" => "user2",
        "acc_password" => "password2",
        "acc_info" => "Informations sur le compte 2"
    ),
);

// Fonctions
function login($libelle, $password) {
	global $accounts;

	foreach ($accounts as $account) {
        if ($account['acc_libelle'] === $libelle && $account['acc_password'] === $password) {

        	session_start();
			$_SESSION['acc_id'] = $account['acc_id'];
			$_SESSION['acc_libelle'] = $account['acc_libelle'];
			$_SESSION['acc_info'] = $account['acc_info'];

            $msg = "Connexion réussie";
            header('location:index.php?msg='. $msg);
            exit();
        }
    }
            
    $msg = "Identifiant ou mot de passe incorrect";
	header('location:index.php?msg='. $msg);

	exit();
}

function logout() {
	session_start();
	session_destroy();

	header('Location: index.php');
	exit();
}

?>