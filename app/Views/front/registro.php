<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow">
        <div class="card-body">
          <h2 class="mb-4">Formulario de Registro</h2>
          <form action=""procesar_registro.php" method="post">
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" required oninput="convertirAMayusculas('nombre')">
            </div>

            <div class="mb-3">
              <label for="apellido" class="form-label">Apellido:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" required oninput="convertirAMayusculas('apellido')">
            </div>

            <div class="mb-3">
              <label for="correo" class="form-label">Correo Electrónico:</label>
              <input type="email" class="form-control" id="correo" name="correo" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
            </div>

            <div class="mb-3">
              <label for="usuario" class="form-label">Usuario:</label>
              <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Contraseña:</label>
              <input type="password" class="form-control" id="password" name="password" required minlength="6" maxlength="8">
            </div>

            <div class="mb-3">
              <button type="submit" class="btn btn-primary">Enviar</button>
              <button type="reset" class="btn btn-secondary">Limpiar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
