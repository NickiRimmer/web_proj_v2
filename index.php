<?php

//$sess = false;
//if (isset($_COOKIE[sessin_name()])) {
//    session_start();
//    $sess = true;
//}

//print_r($_SERVER);
if (!isset($_GET['q'])){
    include('./web_proj-main/index.html');
}
elseif ($_GET['q']=='login'){
    if ($_SERVER['REQUEST_METHOD']=='GET'){
        setcookie('login', 0, 100);
        setcookie('error', 0, 100);
        $error = $_COOKIE['error'] ?? '';
        $login = $_COOKIE['login'] ?? '';
        include('./pages/login.php');
    } else {
        include('db.php');
        //if (!preg_match('/^', $_POST['']))
        $user = get_user_by_login($login);
        if (empty($user) || !password_verify($_POST['password'], $user['password'])) {
            setcookie('login', $_POST['login'], time() + 3600);
            setcookie('error', 'Неверный логин или пароль', time() + 3600);
            header('Location: /login');
        }
        else {
            session_start();
            $_SESSION['login'] = $user['id'];
            setcookie('login', 0, 100);
            setcookie('error', 0, 100);
            header('Location: /my_requests');
        }
    }
}
elseif ($_GET['q']=='my_requests'){
    header('Location: /edit');
}
/*elseif(!$sess){
    http_response_code(401);
}*/
elseif ($_GET['q']=='edit'){
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        print_r($_POST);
		include('db.php');

        $fio = $_POST['fio'];
        $phone = $_POST['phone'];
        $email = $_POST['emaail'];
        $dbirth = $_POST['dbirth'];
        $sex = $_POST['sex'];
        $abilities = $_POST['abilities'];
        $bio = $_POST['bio'];
        
        setcookie('fio', $fio, time() + 3600);
        setcookie('phone', $phone, time() + 3600);
        setcookie('email', $email, time() + 3600);
        setcookie('sex', $sex, time() + 3600);
        setcookie('bio', $bio, time() + 3600);
        foreach( $abilities as $ability ){
            setcookie($ability, 1, time()+3600);
        }

		setcookie('first_name', $first_name, time()+60*60);
		setcookie('last_name', $last_name, time()+60*60);
		setcookie('bio', $bio, time()+60*60);

		if (empty($first_name) || empty($last_name) || empty($bio)) {
			setcookie('error', 'Пожалуйста, заполните все поля.', time()+3600);
		} 
		else {
			edit_user($_POST);
			setcookie('error', 0, 1000);
			setcookie('first_name', 0, 1000);
			setcookie('last_name', 0, 1000);
			setcookie('bio', 0, 1000);
			header('Location: /my_profile');
			exit;
		}
		header('Location: /edit_profile');
	} else {
		include('db.php');
		$uinf = get_user_info($_SESSION['id']);
		$error = $_COOKIE['error'] ?? '';
		$first_name = $_COOKIE['first_name'] ?? $uinf['first_name'];
		$last_name = $_COOKIE['last_name'] ?? $uinf['last_name'];
		$bio = $_COOKIE['bio'] ?? $uinf['bio'];
		setcookie('error', 0, 1000);
		setcookie('first_name', 0, 1000);
		setcookie('last_name', 0, 1000);
		setcookie('bio', 0, 1000);
        $errors = array();
        $values = array();
		include('./form.php');
	}

}
elseif ($_GET['q']=='admin'){
    
}elseif ($_GET['q']==''){
    
}
elseif ($_GET['q']==''){
    
}
elseif ($_GET['q']==''){
    
}
else {
    http_response_code(404);
}
?>