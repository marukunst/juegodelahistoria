@extends('layouts.layout')

@section('title','Iniciar Sesión')

@section('contenido')
  <div class="container fondo">
      <div class="row justify-content-center">
          <div class="col-10 col-sm-7">
              <div class="card">
                  <div class="card-body form">
                      <h4 class="card-title">Inicio de sesión</h4>
                      <form action="" method="POST">
                          <div class="form-group">
                              <label for="user">Correo electrónico o DNI</label>
                              <input type="text" class="form-control" value="" name="user" placeholder="Ingrese su correo electrónico o número de DNI" autofocus="autofocus">
                          </div>
                          <span style="color:red; font-size:14px;"></span>
                          <div class="form-group">
                              <label for="password">Contraseña</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Ingrese su contraseña">
                              <div class="form-check mt-3">
                          <input type="checkbox" class="form-check-input" name="recuerdame" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Recuérdame</label>
                      </div>
                          </div>
                          <button class="mb-2 done" type="submit">Iniciar sesión!</button>
                      </form>
                      <a href="register.php" id="registro">
                          <b>Registrarme</b>
                      </a>
                      <a href="" id="olvido">
                      <b>Olvidé mi contraseña</b></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
