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

Route::get('/admin', function(){return "";});
Route::get('/admin/clientes', function(){return "";});
Route::get('/admin/proveedores', function(){return "";});
Route::get('/admin/trasnportistas', function(){return "";});
Route::get('/admin/productos', function(){return "";});
Route::get('/admin/ventas', function(){return "";});
Route::get('/admin/perfil', function(){return "";});

/*
 clientes routes
*/

Route::get('/clientes', function(){return "";});
Route::get('/clientes/tienda', function(){return "";});
Route::get('/clientes/carrito', function(){return "";});
Route::get('/clientes/historial', function(){return "";});
Route::get('/clientes/perfil', function(){return "";});

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

Route::get('/transportitas', function(){return "";});
Route::get('/transportitas/ingresos', function(){return "";});
Route::get('/transportitas/ordenes', function(){return "";});
Route::get('/transportitas/pendientes', function(){return "";});
Route::get('/transportitas/perfil', function(){return "";});