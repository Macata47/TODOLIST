<?php
include("tareas.php"); 
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ToDo List</title>

  <style>
  @import url('https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap');
 </style>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

</head>

<body>

  <header>

  </header>

  <main>

  <br/>
  <div class="container">
    <div class="card transparent-card">

      <div class="card-header">
        <p class="h1">TODOLIST</p>
      </div>

      <div class="card-body">

        <div class=" mb-3">

          <form action="" method="POST">
            <label for="tarea"class="form-label"></label>
            <input type="text" class="form-control" 
            name="tarea" id="tarea" placeholder="Escriba su tarea" 
            aria-label="Example text with button addon" 
            aria-describedby="button-addon1">
        <br/>
          <input name="agregar_tarea" 
              id="agregar_tarea" 
              class="btn btn-success" 
              type="submit" 
              value="Add Task">
            </form>

      </div>

      <ul class="list-group">

      <?php foreach($resultados as $resultado){ ?>
              
        <li class="list-group-item list-group-item-success">

        <form action="" method="POST">
        <input type="hidden" name="id" value="<?php echo $resultado['id'];?>">
        <input 
          class="form-check-input me-1" 
          type="checkbox" 
          name="completada"
          value="<?php echo $resultado['completada'];?>" 
          id="" 
          onchange="this.form.submit()"
          <?php echo ($resultado['completada']==1)?'checked':''; ?> >

          <span class=
          <?php echo ($resultado['completada']==1)?'subrayado':''; ?> >
          <?php echo $resultado['tarea'];?>
          </span>

          <h9>
            <a href="?id=<?php echo $resultado['id'];?>" style="text-decoration: none; color: inherit;">
            <span class="badge bg-danger">X</span>
          </h9>
        </li>

        </form>  

      <?php } ?>

      </ul>
      
    </div>
  </div>
</main>

<footer>

</footer>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>



