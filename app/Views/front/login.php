<div class="container mt-5">
<div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-body">
          <h2 class="mb-4">Acceso a usuarios</h2>
          <form action="procesar_registro.php" method="post">
            
            <div class="mb-3">
              <label for="correo" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="correo" name="correo" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Acceder</button>
              <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>  