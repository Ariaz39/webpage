@extends('admin.layouts')
@section('listar-usuario','active')
@section('header-fixed')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
            <!-- <div class="col-sm-6">
            <h1 class="m-0">Inicio</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Inicio</li>
            </ol>
          </div> -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
@endsection

@section('content')
    <div class="col-md-12">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Crear usuario</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="get" action="#">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6 col-sm-6 col-xs-12">
                         <!-- text input -->
                          <div class="form-group">
                            <label>Nombre</label>
                            <input type="text" name="name" class="form-control" placeholder="Ingrese su nombre" autofocus>
                          </div>
                        </div>
                        <div class="col-sm-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Ingrese sus apellidos">
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            <label>Teléfono</label>
                            <input type="number" name="phone" class="form-control" placeholder="Ingrese su número de teléfono">
                          </div>
                        </div>
                        <div class="col-sm-6 col-sm-6 col-xs-12">
                         <!-- text input -->
                          <div class="form-group">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Ingrese su correo electrónico">
                          </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-6 form-group">
                          <!-- select -->
                            <label>Tipo de documento</label>
                            <select class="custom-select" name="doctype">
                              <option>Seleccione...</option>
                              <option>Cédula</option>
                              <option>Nit</option>
                              <option>Rut</option>
                              <option>Pasaporte</option>
                              <option>Tarjeta de identidad</option>
                              <option>Registro civil</option>
                            </select>
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="exampleInputPassword1">Número de documento</label>
                            <input type="number" class="form-control" name="document" placeholder="Número de documento">
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-sm-6 form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                        <div class="col-sm-6 form-group">
                            <label for="exampleInputFile">Cargar archivo</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="exampleInputFile">
                                    <label class="custom-file-label" for="exampleInputFile">Seleccionar archivo</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Cargar</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Crear</button>
                </div>
            </form>
        </div>
    </div>
@endsection
