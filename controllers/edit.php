<?php  include '../templates/header.php' ?>


<?php  include '../models/connection.php';

$codeStudent = $_GET['id'];
$consult = $db->prepare("SELECT * from students WHERE id = ?");
$consult->execute([$codeStudent]);
$student = $consult->fetch(PDO::FETCH_OBJ);

//print_r($student)

?>

<div class="container">
<div class="row justify-content-center">
<div class="card-header"> Edit Student info</div>

<form action="update.php" method="POST">

<div class="mb-2 ml-2 mr-2">
    <label> Name</label>
    <input class="form-control" type="text" placeholder="Enter Student's name" name="inputName" value="<?php echo $student->name ?>" required>
</div>
<div class="mb-2 ml-2 mr-2">
    <label> Age</label>
    <input class="form-control" type="number" placeholder="Enter Studen's age" name="inputAge" value="<?php echo $student->age ?>" required>
</div>
<div class="mb-2 ml-2 mr-2">
    <label> Performance</label>
    <input class="form-control" type="text" placeholder="Description of student's performance" name="inputScore" value="<?php echo $student->score ?>" required>
</div>
<div class="mb-2 ml-2 mr-2">
    <label> Conduct</label>
    <input class="form-control" type="text" placeholder="Enter brief description od student's behavior" name="inputConduct" value="<?php echo $student->conduct ?>" required>
</div>

<input type="hidden" name="id" value="<?php echo $student->id ?>"> 

<input type="submit" class="btn btn-success mb-2 ml-2" value="Edit">

</form>

</div>
    </br> </br>
</div>


<?php  include '../templates/footer.php' ?>