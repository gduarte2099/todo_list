<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD php - API fetch</title>
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" href="css/media-query.css">
</head>

<body>
  <main class="container pt-5">

    <section class="card-right">
      <div class="card-header bg-primary">
        <h3 class="text-center">Registrar Tarea</h3>
      </div>
      <div class="card-body">
        <form action="" method="post" id="frm">
          <input type="hidden" name="idp" id="idp" value="">
          <div class="input-box">
            <label for="">Nombre</label>
            <input type="text" name="nombre" id="nombre" placeholder="Nombre..." class="form-input">
          </div>
          <div class="input-box">
            <label for="">Descripcion</label>
            <textarea type="text" name="descripcion" id="descripcion" placeholder="Descripcion..." class="form-textarea"></textarea>
          </div>
          <div class="input-box flex">
            <label for="" class="mr-15">Completada</label>
            <input type="checkbox" name="completada" id="completada" value="1">
          </div>
          <div class="input-box">
            <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block">
          </div>
        </form>
      </div>
    </section>

    <!-- SECCION BUSCAR -->
    <section class="card-left">
      <div class="card-body">
        <form action="" method="post">
          <div class="input-box">
            <label for="buscar">Buscar:</label>
            <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
          </div>
        </form>
      </div>

      <table class="table-resposive">
        <thead class="thead-dark">
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripción</th>
            <th>Estado</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="resultado">
        </tbody>
      </table>
    </section>


    <script src="js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
  </main>
</body>

</html>