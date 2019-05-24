@extends('layouts.layout')

@section('title','Preguntas Frecuentes')

@section('contenido')
  <div class="container">
      <div class="row justify-content-center">
             <h1>PREGUNTAS FRECUENTES</h1>
          <div class="col-10 col-sm-10 mb-5">
              <div id="accordion">
                  <div class="card">
                      <div class="card-header" id="headingOne">
                          <h5 class="mb-0">
                              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  ¿Qué es "El juego de la Historia"?
                              </button>
                          </h5>
                      </div>
                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                          <div class="card-body">
                              Es un juego educativo para los alumnos de la materia Historia Económica y Social
                              General de la Facultad de Ciencias Económicas de la UBA. Es el bloque de
                              práctica que acompaña a las clases teóricas para ayudar a fijar los
                              conocimientos explicados en cada clase.
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingEight">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                                      ¿Quién puede jugar?
                                  </button>
                              </h5>
                          </div>
                          <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordion">
                              <div class="card-body">
                                  Sólo pueden participar del juego los alumnos que estén anotados en la materia.
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingSix">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                      ¿Cómo empiezo a jugar?
                                  </button>
                              </h5>
                          </div>
                          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
                              <div class="card-body">
                                  Para empezar a jugar es necesario estar logueado en la página. Para eso en
                                  primer lugar hay que crear un usuario y contraseña.
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingTwo">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      ¿Cuales son las reglas del juego?
                                  </button>
                              </h5>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                              <div class="card-body">
                                  Es un juego de preguntas y respuestas dividido en niveles. Cada nivel
                                  corresponde a una clase y solo será posible desbloquear el siguiente nivel si se
                                  completaron los anteriores.
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingThree">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                      ¿Los resultados del juego influyen en la nota final de la materia?
                                  </button>
                              </h5>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                              <div class="card-body">
                                  No, el juego nos sirve para evaluar cómo estamos avanzando con la materia. Cada
                                  nivel tendrá un puntaje basado en la cantidad de respuesats correctas. En base a
                                  esos resultados podremos saber si estamos entendiendo y qué contenidos nos
                                  faltan repasar.
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingFour">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      ¿Puedo interactuar con otros jugadores?
                                  </button>
                              </h5>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                              <div class="card-body">
                                  Si, hay un chat donde vamos a poder hacer preguntas y todos los usuarios que
                                  estén logueados van a poder responder.
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingFive">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                      ¿Para que sirve la "línea del tiempo"?
                                  </button>
                              </h5>
                          </div>
                          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                              <div class="card-body">
                                  La línea del tiempo es un ejercicio transversal a todos los niveles. Se va
                                  contruyendo a medida que avanza el cuatrimestre. Hay que ir agregando las fechas
                                  con sus correspondientes eventos y ubicación geográfica (ej. Año 1760 - Evento:
                                  Primera Revolución Industrial - Ubicación: Gran Bretaña)
                              </div>
                          </div>
                      </div>
                      <div class="card">
                          <div class="card-header" id="headingNine">
                              <h5 class="mb-0">
                                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                                      ¿Puedo jugar en cualquier momento?
                                  </button>
                              </h5>
                          </div>
                          <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordion">
                              <div class="card-body">
                                  Si. Sin embargo, cada nivel se desbloqueará a medida que avance la clase
                                  correspondiente. La primera vez que se accede a cada nivel es al finalizar cada
                                  clase, en ese momento todos los alumnos responden a las preguntas desde su
                                  celular en el aula y al mismo tiempo. Al final se discutirán los resultados y
                                  las dudas que puedan haber quedado. Luego se podrá volver a acceder en cualquier
                                  momento, repasar las preguntas y volver a contestar las que se hayan respondido
                                  mal. Servirá también como material de repaso para los parciales.
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
