<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>todo_api</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/media-query.css">
</head>

<body>
  <!-- main div -->
  <main class="container pt-5">

    <!--seccion izquierda -->
    <section class="card-left">
      <div class="card-header bg-primary">
        <h3 class="text-center">Registrar Tarea</h3>
      </div>
      <div class="card-body mt-10">
        <form action="" method="post" id="frm">
          <input type="hidden" name="idt" id="idt" value="">
          <div class="input-box">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre..." class="form-input">
          </div>
          <div class="input-box">
            <label for="">Descripción</label>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion..." class="form-textarea"></textarea>
          </div>
          <div class="input-box flex">
            <label for="" class="mr-15">Completada</label>
            <input type="checkbox" name="completada" id="completada" value="1">
          </div>
          <div class="input-box">
            <input type="button" value="Registrar" id="registrar" class="btn btn-block">
          </div>
        </form>
      </div>
    </section>

    <!-- seccion derecha -->
    <!-- buscar -->
    <section class="card-right">
      <div class="card-body ">
        <form action="" method="post">
          <div class="input-box">
            <label for="buscar">Buscar:</label>
            <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-input">
          </div>
        </form>
      </div>

      <!-- tabla -->
      <div class="div-table">
        <div class="div-titles">
          <div>
            <strong>ID</strong>
          </div>
          <div>
            <strong>Nombre</strong>
          </div>
          <div>
            <strong>Descripción</strong>
          </div>
          <div>
            <strong>Estado</strong>
          </div>
          <div>
            <strong>Acciones</strong>
          </div>
        </div>

        <div id="resultado">
        </div>
      </div>
    </section>

    <script src="js/main.js"></script>
    <!-- utlizaremos SweetAlert2 para mostrar las notificaciones y warnings" -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </main>



</body>

</html>