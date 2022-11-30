<?php   

$name_db = "zoodigodata";
$user = "root";
$password = "";

try{

$db = new PDO(
'mysql:host=localhost;port=3307;
dbname='.$name_db,
$user,
$password
);

} catch(Exception $e){
    // handling exceptions(errors)
echo "Connection didn't work because: ".$e->getMessage();
}

?>