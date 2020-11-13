<?php require_once 'view/header.php';?>
<div class="container my-3"><nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="?c=customer">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Ver Registro</li>
    </ol>
    </nav>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h1 class="h4">MOSTRAR CLIENTE</h1>
                </div>
                <div class="card-body">
                    <b>Nombre:</b>  <?=$customer->name?> <br>
                    <b>Correo:</b>  <?=$customer->email?>
                </div>
            </div>
        </div>
    </div>    
</div>
<?php require_once 'view/footer.php';?>
</html>