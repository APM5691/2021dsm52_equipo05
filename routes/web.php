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

Route::get('/index', function () {
    return view('layouts.index');
});

Route::name('login')->get('login/', 'App\Http\Controllers\SistemController@login');

Route::name('iniciar_sesion')->get('iniciar_sesion/', 'App\Http\Controllers\SistemController@iniciar_sesion');

Route::name('home')->get('home/', 'App\Http\Controllers\SistemController@home');

Route::name('elements')->get('elements/', 'App\Http\Controllers\SistemController@elements');

Route::name('catalogo')->get('catalogo/', 'App\Http\Controllers\SistemController@catalogo');

Route::name('validar')->post('validar/', 'App\Http\Controllers\LoginController@validar');

Route::name('logout')->get('logout/', 'App\Http\Controllers\LoginController@logout');

//rutas de paypal
Route::get('/paypal/pay', 'App\Http\Controllers\PaymentController@payWithPayPal');

Route::get('/paypal/status', 'App\Http\Controllers\PaymentController@payPalStatus');

//-------------------------------------------Usuarios--------------------------------------------------------------

Route::name('usuarios')->get('usuarios/', 'App\Http\Controllers\SistemController@usuarios');

Route::name('guardar')->post('guardar/', 'App\Http\Controllers\SistemController@guardar');

Route::name('registrarse')->get('registrarse/', 'App\Http\Controllers\SistemController@registrarse');

Route::name('modificar')->get('modificar/{id}', 'App\Http\Controllers\SistemController@modificar');

Route::name('salvar')->put('salvar/{id}', 'App\Http\Controllers\SistemController@salvar');

Route::name('borrar')->get('borrar/{id}', 'App\Http\Controllers\SistemController@borrar');


//-------------------------------------------Productos--------------------------------------------------------------

Route::name('productos')->get('productos/{buscar?}', 'App\Http\Controllers\SistemController@productos');

Route::name('guardarProductos')->post('guardarProductos/', 'App\Http\Controllers\SistemController@guardarProductos');

Route::name('registrarProductos')->get('registrarProductos/', 'App\Http\Controllers\SistemController@registrarProductos');

Route::name('modificarProductos')->get('modificarProductos/{id}', 'App\Http\Controllers\SistemController@modificarProductos');

Route::name('salvarProductos')->put('salvarProductos/{id}', 'App\Http\Controllers\SistemController@salvarProductos');

Route::name('borrarProducto')->get('borrarProducto/{id}', 'App\Http\Controllers\SistemController@borrarProducto');


//-------------------------------------------Ventas--------------------------------------------------------------
Route::name('ventas')->get('ventas/', 'App\Http\Controllers\CRUDController@ventas');

Route::name('guardarVentas')->post('guardarVentas/', 'App\Http\Controllers\CRUDController@guardarVentas');

Route::name('registrarVentas')->get('registrarVentas/', 'App\Http\Controllers\CRUDController@registrarVentas');

Route::name('modificarVentas')->get('modificarVentas/{id}', 'App\Http\Controllers\CRUDController@modificarVentas');

Route::name('salvarVentas')->put('salvarVentas/{id}', 'App\Http\Controllers\CRUDController@salvarVentas');

Route::name('borrarVenta')->get('borrarVenta/{id}', 'App\Http\Controllers\CRUDController@borrarVenta');

//-------------------------------------------Materiales--------------------------------------------------------------
Route::name('materiales')->get('materiales/', 'App\Http\Controllers\CRUDController@materiales');

Route::name('guardarMateriales')->post('guardarMateriales/', 'App\Http\Controllers\CRUDController@guardarMateriales');

Route::name('registrarMateriales')->get('registrarMateriales/', 'App\Http\Controllers\CRUDController@registrarMateriales');

Route::name('modificarMateriales')->get('modificarMateriales/{id}', 'App\Http\Controllers\CRUDController@modificarMateriales');

Route::name('salvarMateriales')->put('salvarMateriales/{id}', 'App\Http\Controllers\CRUDController@salvarMateriales');

Route::name('borrarMaterial')->get('borrarMaterial/{id}', 'App\Http\Controllers\CRUDController@borrarMaterial');

Route::name('addCarrito')->get('addCarrito/{id?}', 'App\Http\Controllers\SistemController@addCarrito');

Route::name('detalleProducto')->get('detalleProducto/{id?}', 'App\Http\Controllers\SistemController@detalleProducto');

Route::name('buscar')->get('buscar/', 'App\Http\Controllers\SistemController@buscar');

Route::name('carrito')->get('carrito/', 'App\Http\Controllers\SistemController@carrito');

Route::post('/cart-add',    'App\Http\Controllers\CartController@add')->name('cart.add');

Route::get('/cart-checkout','App\Http\Controllers\CartController@cart')->name('cart.checkout');

Route::post('/cart-clear',  'App\Http\Controllers\CartController@clear')->name('cart.clear');

Route::post('/cart-removeitem',  'App\Http\Controllers\CartController@removeitem')->name('cart.removeitem');

Route::name('reporte')->get('reporte/', 'App\Http\Controllers\SistemController@reporte');

//------------------------------------------ MIO --------------------------------------------------------------

Route::name('guardarVentas')->get('guardarVentas/{id?}', 'App\Http\Controllers\CrudController@guardarVentas');

Route::name('detalleUsuario')->get('detalleUsuario/', 'App\Http\Controllers\SistemController@detalleUsuario');

Route::name('registrarDireccion')->get('registrarDireccion/{id?}/{cantidad?}', 'App\Http\Controllers\SistemController@registrarDireccion');


Route::name('direcciones')->get('direcciones/', 'App\Http\Controllers\CrudController@direcciones');


//--------------------------------- Mapas google------------------------------------------
Route::name('mapa')->get('mapa/', 'App\Http\Controllers\SistemController@mapa');

//paypal

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
