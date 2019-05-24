@extends('layouts.layout')

@section('title','Registrarse')

@section('contenido')
  <div class="container fondo">
      <div class="row justify-content-center h-100">
          <div class="col-10 col-sm-7">
              <div class="card">
                  <div class="card-body form">
                      <h4 class="card-title">Regístrate</h4>
                      <form action="" method="POST" enctype="multipart/form-data">
                          <div class="form-group">
                              <label for="name">Nombre</label>
                              <input
                                  type="text"
                                  class="form-control"
                                  name="name"
                                  id="name"
                                  placeholder="Ingrese su nombre"
                                  autofocus="autofocus"
                                  value="">
                              <span style="color:red; font-size:14px;"></span>
                          </div>
                          <div class="form-group">
                              <label for="lastName">Apellido</label>
                              <input
                                  type="text"
                                  class="form-control"
                                  name="lastName"
                                  id="lastName"
                                  placeholder="Ingrese su apellido"
                                  autofocus="autofocus"
                                  value="">
                              <span style="color:red; font-size:14px;"></span>
                          </div>
                          <div class="form-group">
                              <label for="email">Correo electrónico</label>
                              <input
                                  type="text"
                                  class="form-control"
                                  name="email"
                                  id="email"
                                  placeholder="Ingrese su correo electrónico"
                                  value="">
                              <span style="color:red; font-size:14px;"></span>
                          </div>
                          <div class="form-group">
                              <label for="dni">DNI</label>
                              <input
                                  type="text"
                                  class="form-control"
                                  name="dni"
                                  id="dni"
                                  placeholder="Ingrese su número de DNI"
                                  value="">
                              <span style="color:red; font-size:14px;"></span>
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input
                                  type="password"
                                  class="form-control"
                                  name="password"
                                  id="password"
                                  placeholder="Ingrese su contraseña">
                              <span style="color:red; font-size:14px;"></span>
                          </div>
                          <div class="form-group">
                              <label for="confirmPassword">Confirmación de contraseña</label>
                              <input
                                  type="password"
                                  class="form-control"
                                  name="confirmPassword"
                                  id="confirmPassword"
                                  placeholder="Repita su contraseña">
                              <span style="color:red; font-size:14px;"></span>
                          </div>
                          <div class="form-group">
                              <label for="avatar">Avatar</label><br>
                              <input id="avatar" type="file" name="avatar">
                              <span style="color:red; font-size:14px;"></span>
                          </div>
                          <button class="mb-2 done" type="submit">Registrarme!</button>
                      </form>
                      <a href="login.php" id="login">
                          <b>Iniciar Sesión</b>
                      </a>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
