<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
   return "Hola";
});
/*
 admin routes
*/


/*
 clientes routes
*/


/*
 proveedor routes
*/
Route::get('/proveedor', function(){return "Hola";});
Route::get('/proveedor/productos', function(){return "";});
Route::get('/proveedor/crearproductos', function(){return "";});
Route::get('/proveedor/borrarproductos', function(){return "";});
Route::get('/proveedor/actualizarproductos', function(){return "";});
Route::get('/proveedor/ordenes', function(){return "";});
Route::get('/proveedor/ventas', function(){return "";});

/*
 transportitas routes
*/