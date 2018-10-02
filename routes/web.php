<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/********************** USUARIOS *************************/
Route::group(['middleware' => ['guestaw']], function () {

	Route::any('/', 'UserController@actionLogin');
	Route::any('/login', 'UserController@actionLogin');

});

Route::get('/cerrarsession', 'UserController@actionCerrarSesion');



Route::group(['middleware' => ['authaw']], function () {

	Route::get('/bienvenido', 'UserController@actionBienvenido');

	Route::any('/gestion-de-usuarios/{idopcion}', 'UserController@actionListarUsuarios');
	Route::any('/agregar-usuario/{idopcion}', 'UserController@actionAgregarUsuario');
	Route::any('/modificar-usuario/{idopcion}/{idusuario}', 'UserController@actionModificarUsuario');

	Route::any('/gestion-de-roles/{idopcion}', 'UserController@actionListarRoles');
	Route::any('/agregar-rol/{idopcion}', 'UserController@actionAgregarRol');
	Route::any('/modificar-rol/{idopcion}/{idrol}', 'UserController@actionModificarRol');

	Route::any('/gestion-de-permisos/{idopcion}', 'UserController@actionListarPermisos');
	Route::any('/ajax-listado-de-opciones', 'UserController@actionAjaxListarOpciones');
	Route::any('/ajax-activar-permisos', 'UserController@actionAjaxActivarPermisos');

	Route::any('/gestion-de-trabajador/{idopcion}', 'TrabajadorController@actionListarTrabajador');
	Route::any('/agregar-trabajador/{idopcion}', 'TrabajadorController@actionAgregarTrabajador');
	Route::any('/modificar-trabajador/{idopcion}/{idtrabajador}', 'TrabajadorController@actionModificarTrabajador');

	Route::any('/derecho-habiente-trabajador/{idopcion}/{idtrabajador}', 'DerechoHabienteController@actionDerechoHabiente');
	Route::any('/ajax-form-derechohabiente', 'DerechoHabienteController@actionDerechoHabienteAjax');
	Route::any('/modificar-derecho-habiente-trabajador/{idderechohabiente}/{idopcion}/{idtrabajador}', 'DerechoHabienteController@actionModificarDerechoHabiente');

	Route::any('/ficha-socioeconomica-trabajador/{idopcion}/{idtrabajador}', 'FichaSocioeconomicaController@actionFichaSocioeconomica');
	Route::any('/ajax-form-fichasocioeconomica', 'FichaSocioeconomicaController@actionFichaSocioeconomicaAjax');
	Route::any('/modificar-ficha-socioeconomica-trabajador/{idfichasocioeconomica}/{idopcion}/{idtrabajador}', 'FichaSocioeconomicaController@actionModificarFichaSocioeconomica');



	Route::any('/ficha-contrato-trabajador/{idopcion}/{idtrabajador}', 'ContratoController@actionContrato');
	Route::any('/ajax-form-contrato', 'ContratoController@actionContratoAjax');
	Route::any('/modificar-ficha-contrato-trabajador/{idcontrato}/{idopcion}/{idtrabajador}', 'ContratoController@actionModificarContrato');




	Route::any('/ajax-select-provincia', 'GeneralAjaxController@actionProvinciaAjax');
	Route::any('/ajax-select-distrito', 'GeneralAjaxController@actionDistritoAjax');

	Route::any('/ajax-select-tipoinstitucion', 'GeneralAjaxController@actionTipoInstitucionAjax');
	Route::any('/ajax-select-institucion', 'GeneralAjaxController@actionInstitucionAjax');
	Route::any('/ajax-select-carrera', 'GeneralAjaxController@actionCarreraAjax');

	/*Route::any('/ajax-select-vinculofamiliar', 'GeneralAjaxController@actionVinculoFamiliarAjax');*/
	Route::any('/ajax-select-tipodocumentoacredita', 'GeneralAjaxController@actionTipoDocumentoAcreditaAjax');



	Route::any('/gestion-de-horario/{idopcion}', 'HorarioController@actionListarSemanas');
	Route::any('/ajax-listado-de-horario', 'HorarioController@actionAjaxListarHorario');
	Route::any('/ajax-activar-horario-trabajador', 'HorarioController@actionAjaxActivarHorarioTrabajador');
	Route::any('/ajax-select-horario-trabajador', 'HorarioController@actionAjaxSelectHorarioTrabajador');


	

});

	Route::any('/pruebas', 'UserController@pruebas');