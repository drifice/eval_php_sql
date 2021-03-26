<?php
$user='visiteur';
$pass='root';
$pdo = new PDO('mysql:host=localhost; dbname=animaux', $user, $pass);
#$pdo = new PDO('mysql:host=localhost; dbname=animaux', 'root', '');

function add($nom, $race) {
    global $pdo;
    $add = $pdo->prepare("INSERT INTO animaux.chien(`nom`,`race`) VALUE(?,?)");
    $add->bindParam(1,$nom);
    $add->bindParam(2,$race);
    $add->execute();
    $add;
}

if(isset($_REQUEST['nom']) && isset($_REQUEST['race'])) {
    $nom = $_REQUEST['nom'];
    $prenom = $_REQUEST['race'];
    add($nom, $prenom);
    $chien = select();
}

function select() {
    global $pdo;
    $select = $pdo->query('SELECT * FROM animaux.chien');
    $select = $select->fetchAll(PDO::FETCH_OBJ);  
    return $select;
}
$table = select();


?>