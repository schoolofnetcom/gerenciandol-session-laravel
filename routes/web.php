<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Session;

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
    return view('welcome');
});

// Lembrando que você deve implementar tudo dentro de um controller a não ser que seja apenas estudos!!!
Route::get('session', function(){
    // SALVAR/CRIAR
    // session()->put('key', null);
    // \Session::put('key-1', 'School of Net');

    // Multiplas inserções
    // \Session::put(['name' => 'Thiago', 'last_name' => 'Valls', 'age' => 33]);
    // session()->put(['name' => 'Thiago', 'last_name' => 'Valls', 'age' => 33]);

    // ELIMINAR
    // \Session::forget('key');
    // session()->forget('key');
    // \Session::forget(['name', 'last_name', 'age']);
    // session()->forget(['name', 'last_name', 'age']);

    // RESGATAR
    // echo \Session::get('key');
    // echo session()->get('key-1');

    // UTILS
    // if(\Session::has('key')) {
    //     echo "Minha key tem um valor";
    // } else {
    //     echo "Minha key não tem um valor";
    // }

    // if(session()->has('key')) {
    //     echo "Minha key tem um valor";
    // } else {
    //     echo "Minha key não tem um valor";
    // }

    // if(\Session::exists('key')) {
    //     echo "Minha key existe";
    // } else {
    //     echo "Minha key não existe";
    // }

    // if(session()->exists('key')) {
    //     echo "Minha key existe";
    // } else {
    //     echo "Minha key não existe";
    // }

    // FLASH
    // session()->flash('message', 'Página carregada com sucesso');
    // echo session()->get('message');

    echo "<pre>";
        var_dump(\Session::all());
        // var_dump(Session::all());
        // var_dump(session()->all());
    echo "</pre>";
});
