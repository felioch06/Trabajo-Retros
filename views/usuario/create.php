
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <br>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"><a href="?c=usuarios&m=index">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Registrar</li>
            </ol>
            </nav>
            
            <br>    
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 offset-md-3">
        <div class="text-center"><h1>REGISTRO</h1></div>
            <div class="jumbotron">
                <form action="?c=Usuarios&m=stored" method="post" enctype="multipart/form-data" >
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nombres</label>
                        <input type="text" class="form-control" name="nombres" placeholder="Nombres" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Apellidos</label>
                        <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Correo</label>
                        <input type="email" class="form-control" name="correo" placeholder="Correo"required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Dirección</label>
                        <input type="text" class="form-control" name="direccion" placeholder="Dirección" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Telefono</label>
                        <input type="text" class="form-control" name="telefono" placeholder="Telefono" required>
                    </div>

                    <div class="form-group">
                        <p><label for="exampleInputEmail1">Foto de Perfil</label></p>
                        <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Foto de Perfil" required>
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1">Acepto Terminos Y Condiciones</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>
</div>