<?php view('header');?>
<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="contactos/crear" role="button">Agregar contacto</a>
    </div>
    <div class="card-body">
    <div class="table-responsive-sm">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Primer apellido</th>
                <th scope="col">Segundo apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
                
            </tr>
        </thead>
        <tbody>
        <?php foreach($contactos as $contacto ) : ?>
            <tr>
            
                <td><?php echo $contacto['id']; ?></td>
                <td><?php echo $contacto['nombre']; ?></td>
                <td><?php echo $contacto['primerapellido']; ?></td>
                <td><?php echo $contacto['segundoapellido']; ?></td>
                <td><?php echo $contacto['correo']; ?></td>
                <td><a name="" id="" class="btn btn-info" href="/contactos/editar/<?php echo $contacto['id']; ?>;" role="button">Editar</a> |
                    <a name="" id="" class="btn btn-danger" href="/contactos/<?php echo $contacto['id']; ?>" role="button">Borrar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div> 
    </div>
    <div class="card-footer text-muted">
  
    </div>
</div>
   
<?php view('footer');?>