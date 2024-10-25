<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CRUD php - API fetch</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
  <div class="container pt-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card">
          <div class="card-header bg-primary">
            <h3 class="text-center">Registrar Tarea</h3>
          </div>
          <div class="card-body">
            <form action="" method="post" id="frm">
              <input type="hidden" name="idp" id="idp" value="">
              <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre" placeholder="nombre" class="form-control">
              </div>
              <div class="form-group">
                <label for="">Descripcion</label>
                <textarea type="text" name="descripcion" id="descripcion" placeholder="descripcion" class="form-control">
                 </textarea>
              </div>
              <div class="form-group">
                <label for="">Completada</label>
                <input type="checkbox" name="completada" id="completada" value="1">
              </div>
              <div class="form-group">
                <input type="button" value="Registrar" id="registrar" class="btn btn-primary btn-block">
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- SECCION BUSCAR -->
      <div class="col-lg-8">
        <div class="row">
          <div class="col-lg-6">
            <form action="" method="post">
              <div class="form-group">
                <label for="buscar">Buscar:</label>
                <input type="text" name="buscar" id="buscar" placeholder="Buscar..." class="form-control">
              </div>
            </form>
          </div>
        </div>
        <table class="table table-hover table-resposive">
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
      </div>
    </div>
  </div>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>

</html>