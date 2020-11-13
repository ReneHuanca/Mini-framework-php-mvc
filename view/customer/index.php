<?php require_once 'view/header.php';?>
<div class="container my-3">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Home</li>
    </ol>
    <div class="card">
        <div class="card-body">
            <a class="btn btn-primary mb-3" href="?c=customer&a=create">
                Agregar Cliente
            </a>
            <table class="table table-striped table-hover" id="CustomerDatatable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($customers as $customer) : ?>
                        <tr>
                            <td scope="row"><?php echo $customer->id; ?></td>
                            <td><?php echo $customer->name; ?></td>
                            <td><?php echo $customer->email; ?></td>
                            <td>
                                <a 
                                    class="btn btn-primary" 
                                    href="?c=customer&a=show&id=<?php echo $customer->id; ?>"
                                >
                                    Ver
                                </a>
                                <a 
                                    class="btn btn-warning" 
                                    href="?c=customer&a=edit&id=<?php echo $customer->id; ?>"
                                >
                                    Editar
                                </a>
                                <a 
                                    class="btn btn-danger" 
                                    onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" 
                                    href="?c=customer&a=destroy&id=<?php echo $customer->id; ?>"
                                >
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php require_once 'view/footer.php';?>
<script>
        $(document).ready(function() {
            $('#CustomerDatatable').DataTable();
        } );
</script>
</html>