<?php include("../template/cabecera.php"); ?>

<?php
require 'logica/consulta.php';

?>
<div class="col-md-5">

  <div id="wrapper" class="container">

    <h1>insertar datos</h1>
    <hr>
    <form method="POST" name="form-work" action="logica/guardar.php">

      <fieldset>
        <div class="form-group">
          <div class="col-md-7">
            <label class="control-label" for="surname">id</label>
            <input name="id" class="form-control" placeholder="id" type="text">
          </div>
        </div>


        <div class="form-group">
          <div class="col-md-7">
            <label class="control-label" for="nome">modelo</label>
            <input name="modelo" class="form-control" placeholder="modelo" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-7">
            <label class="control-label" for="surname">texto</label>
            <input name="texto" class="form-control" placeholder="texto" type="text">
          </div>
        </div>

        <div class="form-group">
          <div class="col-md-6">
            <button type="submit" class="btn btn-primary btn-lg btn-block info">Guardar</button>
            
          </div>
        </div>
      </fieldset>
    </form>
  </div>
</div>

<div class="col-md-10">

  <table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">modelo</th>
        <th scope="col">texto</th>
      </tr>
    </thead>
    <tbody id="datos">
      <?php
      foreach ($query as $row) { ?>
        <tr>
          <td><?php echo $row['id']; ?></td>
          <td><?php echo $row['modelo']; ?></td>
          <td><?php echo $row['texto']; ?></td>
        </tr>
    </tbody>

  <?php
      }
  ?>

  </table>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

</div>

<?php include("../template/pie.php"); ?>