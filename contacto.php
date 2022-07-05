<?php include("template/cabecera.php")  ?>

<div class="w3-container">
    <h2>Mercado de Jabba</h2>
    <p>Si quieres ponerte en contacto con nosotros para conocernos, envíanos un correo usando el formulario o visítanos en nuestras redes sociales. ¡Te esperamos!.</p>
    <center><img src= "img/hutt.jpg" alt="Cinque Terre" width="600" height="300"></center>

    <center><h2>Contactanos</h2>
    <p>En caso de que su droide intente matarlo comuniquese con nosotros, intentaremos responder lo antes posible </p>
    </center>
    <center>
    <div class="row">

        <div class="col-md-5">
            <form method="POST" name="form-work" action="admin/seccion/logica/guardar2.php">

                <fieldset>
            <div class="form-group">
                <div class="col-md-7">
                <label class="control-label" for="surname">ingrese su nombre</label>
                <input name="nombre" class="form-control" placeholder="nombre" type="text">
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-7">
                <label class="control-label" for="surname">ingrese su apellido</label>
                <input name="apellido" class="form-control" placeholder="apellido" type="text">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-7">
                <label class="control-label" for="nome">ingrese su correo</label>
                <input name="email" class="form-control" placeholder="email" type="text">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-10">
                <label class="control-label" for="surname">su caso</label>
                <input name="caso" class="form-control" placeholder="su caso" type="text">
                </div>
            </div>
<br>
            <div class="form-group">
                <div class="col-md-6">
                <button type="submit" class="btn btn-primary btn-lg btn-block info">enviar</button>
                
                </div>
            </div>
            </fieldset>
            </form>

            
        </div>

    </div>
</center>
</section>




    </div>
  </div>

  <?php include("template/pie.php")  ?>