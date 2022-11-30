

<?php 

include '../models/connection.php';
//include header and footer 
// Look the way to connect to the button

$name = $_POST['inputName'];
$age = $_POST['inputAge'];
$score = $_POST['inputScore'];
$conduct = $_POST['inputConduct'];

echo $name, $age,$score,$conduct;

$consultation = $db->prepare("INSERT INTO students (name,age,score,conduct) VALUES (?,?,?,?)");
$result =$consultation->execute([$name, $age,$score,$conduct]);

if ($result){
    header("Location: ../index.php");
} else {
    echo "your registration has failed";
}


if(empty($_POST['inputName']) || empty($_POST['inputAge']) || empty($_POST['inputScore']) || empty($_POST['inputConduct'])){
    echo "Error - Fill out the form";
    exit();
}

?>

