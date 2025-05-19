<?php
$username = 'root';
$password = NULL;
$db = new PDO('mysql:host=localhost;dbname=social_network', $user, $pass,
    [PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

function get_user_by_login($username) {
    global $db;
    $user = $db->query('SELECT * FROM users WHERE login = ' . $db->quote($username));
    return $user->fetch();
}

function get_info_by_id($id) {
    global $db;
    $data = $db->query('SELECT * FROM user_info WHERE id = '. $db->quote($id));
    return $data->fetch();
}
?>