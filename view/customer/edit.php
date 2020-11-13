<?php require_once 'view/header.php';?>
<div class="container my-3">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?c=customer">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Editar Registro</li>
    </ol>
    </nav>
    <div class="card">
        <div class="card-header">
            <h1 class="h3 text-muted">
                NUEVO REGISTRO
            </h1>
        </div>
        <div class="card-body">
            <form 
                id="frmCreateCustomer" 
                action="?c=customer&a=update&id=<?=$customer->id?>" 
                method="POST" 
                enctype="multipart/form-data"
            >
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name"
                        value="<?=$customer->name?>" 
                        class="form-control" 
                        placeholder="Ingrese su nombre" 
                        required
                    >
                </div>
                <div class="form-group">
                    <label for="email">Correo</label>
                    <input 
                        type="email" 
                        name="email"
                        id="email" 
                        value="<?=$customer->email?>" 
                        class="form-control" 
                        placeholder="Ingrese su correo electrónico" 
                        required
                    >
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require_once 'view/footer.php';?>
<script>
    document.body.onload = function() {
        $("#frmCreateCustomer")
            .validate({
                rules: {
                    name : {
                        required: true,
                        minlength: 3
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages : {
                    name: {
                        required: "Este campo es requerido",
                        minlength: "Nombre debe ser mas de 3 caracteres"
                    },
                    email: {
                        required: "Por favor ingresa tu email ",
                        email: "Ingrese un correo válido"
                    }
                }
            });
    }
</script>
</html>