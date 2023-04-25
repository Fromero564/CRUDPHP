<?php view('header');?>

<div class="card">
    <div class="card-header">
        Contactos
    </div>
    <div class="card-body">
        <form action="/contactos" method="post">

         <div class="mb-3">
           <label for="nombre" class="form-label">Nombre:</label>
           <input type="text"
             class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
           
         </div>
         <div class="mb-3">
           <label for="primerApellido" class="form-label">Primer Apellido:</label>
           <input type="text"
             class="form-control" name="primerApellido" id="primerApellido" aria-describedby="helpId" placeholder="Primer Apellido">
           
         </div>
         <div class="mb-3">
           <label for="segundoApellido" class="form-label">Segundo Apellido:</label>
           <input type="text"
             class="form-control" name="segundoApellido" id="segundoApellido" aria-describedby="helpId" placeholder="Segundo Apellido">
           
         </div>
         <div class="mb-3">
           <label for="correo" class="form-label">Correo Electronico:</label>
           <input type="email"
             class="form-control" name="correo" id="correo" aria-describedby="helpId" placeholder="Correo Electronico">
           
         </div>
         <button type="submit" class="btn btn-primary">Guardar</button>
         <a class="btn btn-primary" href="/" role="button">Cancelar</a>

        </form>
    </div>

    <div class="card-footer text-muted">
        
    </div>
</div>

<?php view('footer');?>