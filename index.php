<?php include 'templates/header.php' ?>

<?php

 include 'models/connection.php';

 $sentence = $db->query("SELECT * from students");
 $students = $sentence->fetchAll(PDO::FETCH_OBJ);
//print_r($students)

 ?>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
      <th scope="col">Student's performance</th>
      <th scope="col">Conduct</th>
    </tr>
  </thead>

  <?php foreach($students as $data){?>
  <tbody class="table-group-divider">

    <tr>
      <th scope="row"><?php echo $data->id ?></th>
      <td><?php echo $data->name ?></td>
      <td><?php echo $data->age ?></td>
      <td><?php echo $data->score ?></td>
      <td><?php echo $data->conduct ?></td>

     
<?php //buttons delete and edit ?>
      <td> 
        <a href="controllers/edit.php?id=<?php echo $data->id?>" class="btn btn-success">Edit</a>
      <a href="controllers/delete.php?id=<?php echo $data->id?>" class="btn btn-danger ml-2">Delete</a>
    </td>

    </tr>
    
  </tbody>
  <?php }?>
</table>

<?php //button "Add a new record" ?>

</br>


<div class="d-grid gap-2 d-md-flex justify-content-md-end">

  <a href="controllers/add.php" class="btn btn-success">Create new record</a>

</div>
</br>




<?php include 'templates/footer.php' ?>