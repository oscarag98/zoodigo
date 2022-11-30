<?php

include '../models/connection.php';

$codeStudent = $_GET['id'];

$consult = $db->prepare("DELETE FROM students WHERE id=?");
$result = $consult->execute([$codeStudent]);

if ($result){
    header ("Location:../index.php");
} else {
    echo "your delete attempt has failed";
}


?>