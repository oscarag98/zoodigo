<?php 

print_r($_POST);
include '../models/connection.php';

$codeStudent = $_POST['id'];
$name = $_POST['inputName'];
$age = $_POST['inputAge'];
$score = $_POST['inputScore'];
$conduct = $_POST['inputConduct'];

$consult = $db-> prepare("UPDATE students SET name= ?, age= ?, score= ?, conduct= ? WHERE id = ?");
$response = $consult->execute([$name,$age,$score,$conduct,$codeStudent]);


if ($response){
    header("Location: ../index.php");
} else {
    echo "your edit attempt has failed";
}


?>