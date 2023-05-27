<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

/* Route::get('/web',function(){
    return "<h1>welcome to your app</h1>";
}); */

/* Route::get('/adel', function () {
     return '<h1>welcome adel</h1>';
 }); */

/*  Route::post('adel', function (){
      return "welcome adel";
  }); */

/* Route::get('/malek', function () {
     return '<h2> welcome malek </h2>';
 });
 */

/* Route::get('/{name}', function ($name) {
    return "<h1>hello".$name."</h1>";
});
    */ 

/* Route::get('/{name}/{prenom}', function ($name, $prenom) {
    return "<h1>hello $name and $prenom </h1>";
}); */

/* Route::get('sum/{x}/{y?}', function ($x,$y=0)
{
   return '<h3> la somme est :'. $x+$y.'</h3>';
});
 */

/* Route::get('user', function () {
    return view('form');
});
Route::post('tasks', function () {
    return '<h3>hello tasks</h3>';
 })->name('task');
 */


/* Route::get('ip', function (Request $request) {
    return '<h3>your ip address: </h3>'.$request->ip();
 });

Route::middleware('verifyIp')->group(     //['prefix'=>'log'] ,
    function(){
        Route::get('/adelPrivate', function () {
            return '<h1 style="color:red;"> welcome adel  </h1>';
    });

    Route::get('/malekPrivate', function () {
        return '<h1 style="color:red;"> welcome malek </h1>';
    });

}); 
 */